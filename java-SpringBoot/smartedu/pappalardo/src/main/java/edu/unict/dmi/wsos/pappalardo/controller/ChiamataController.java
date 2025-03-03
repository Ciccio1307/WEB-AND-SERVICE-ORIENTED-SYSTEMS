package edu.unict.dmi.wsos.pappalardo.controller;

import java.util.List;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;

import edu.unict.dmi.wsos.pappalardo.model.Chiamata;
import edu.unict.dmi.wsos.pappalardo.model.Telefono;
import edu.unict.dmi.wsos.pappalardo.repositories.ChiamataRepo;
import edu.unict.dmi.wsos.pappalardo.repositories.TelefonoRepo;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;

@Controller
public class ChiamataController {

    private final TelefonoRepo repoT;
    private final ChiamataRepo repoC;

    public ChiamataController(TelefonoRepo repoT, ChiamataRepo repoC) {
        this.repoT = repoT;
        this.repoC = repoC;
    }

    @GetMapping("/chiamata")
    public String getRubrica(Model model) {
        model.addAttribute("telefono", repoT.findAll());
        model.addAttribute("chiamata", repoC.findAll());

        List<Chiamata> chiamatas = repoC.findAll();
        Integer countDurata = 0;
        for (Chiamata val : chiamatas) {
            countDurata = countDurata + val.getDurata();
        }

        model.addAttribute("totaleMinuti", countDurata);

        return ("/chiamata/list");
    }

    @GetMapping("/chiamata/{id}/edit")
    public String EditChiamata(Model model, @PathVariable Long id) {
        model.addAttribute("chiamata", repoC.getReferenceById(id));
        model.addAttribute("telefono", repoT.findAll());

        return ("/chiamata/edit");

    }

    @GetMapping("/chiamata/{id}/delete")
    public String eliminaTelefono(Model model, @PathVariable Long id) {
        repoC.deleteById(id);
        return "redirect:/chiamata";
    }

    @PostMapping("/chiamata")
    public String salavaCHiamata(@ModelAttribute Chiamata chiamata) {
        repoC.save(chiamata);
        return "redirect:/chiamata";
    }

    @GetMapping("/chiamata/new")
    public String NuovaChiamata(Model model) {
        model.addAttribute("chiamata", new Chiamata());
        model.addAttribute("telefono", repoT.findAll());

        return ("/chiamata/edit");

    }

    @PostMapping("/chiamata/filterByTelefono")
    public String getNics(Model model, Long id) {
        Telefono T = repoT.getReferenceById(id);
        model.addAttribute("telefono", repoT.findAll());

        model.addAttribute("chiamata", repoC.findByTelefonoId(T));

        return ("/chiamata/list");

    }

    @GetMapping("/chiamata/addTenMinutes")
    public String addMinuteString() {

        for (Chiamata c : repoC.findAll()) {

            c.setDurata(c.getDurata() + 10);
            repoC.save(c);

        }
        return "redirect:/chiamata";
    }

}
