package edu.unict.dmi.wsos.pappalardo.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;

import edu.unict.dmi.wsos.pappalardo.model.Telefono;
import edu.unict.dmi.wsos.pappalardo.repositories.TelefonoRepo;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;

@Controller
public class TelefonoController {

    private final TelefonoRepo repoT;

    public TelefonoController(TelefonoRepo repoT) {
        this.repoT = repoT;
    }

    @GetMapping("/telefono")
    public String getRubrica(Model model) {
        model.addAttribute("telefono", repoT.findAll());
        return ("/telefono/list");
    }

    @GetMapping("/telefono/{id}/edit")
    public String EditTelefono(Model model, @PathVariable Long id) {
        model.addAttribute("telefono", repoT.getReferenceById(id));
        return ("/telefono/edit");

    }

    @GetMapping("/telefono/{id}/delete")
    public String eliminaTelefono(Model model, @PathVariable Long id) {
        repoT.deleteById(id);
        return "redirect:/telefono";
    }

    @PostMapping("/telefono")
    public String eliminaTelefono(@ModelAttribute Telefono telefono) {
        repoT.save(telefono);
        return "redirect:/telefono";
    }

    @GetMapping("/telefono/new")
    public String NuovoTelefono(Model model) {
        model.addAttribute("telefono", new Telefono());
        return ("/telefono/edit");

    }

}
