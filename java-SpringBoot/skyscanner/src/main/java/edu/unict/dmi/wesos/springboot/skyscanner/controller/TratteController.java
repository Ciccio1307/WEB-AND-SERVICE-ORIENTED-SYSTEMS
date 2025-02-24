package edu.unict.dmi.wesos.springboot.skyscanner.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;

import edu.unict.dmi.wesos.springboot.skyscanner.model.CompagnieAeree;
import edu.unict.dmi.wesos.springboot.skyscanner.model.Tratte;
import edu.unict.dmi.wesos.springboot.skyscanner.repositories.CompagnieAereeRepo;
import edu.unict.dmi.wesos.springboot.skyscanner.repositories.TratteRepo;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RequestBody;

@Controller
public class TratteController {

    private final TratteRepo repoT;
    private final CompagnieAereeRepo repoC;

    public TratteController(TratteRepo repoT, CompagnieAereeRepo repoC) {
        this.repoT = repoT;
        this.repoC = repoC;
    }

    @GetMapping("/compagnie/{id}/filterByCOmpagnieAeree")
    public String filterByCOmpagnieAeree(@PathVariable Long id, Model model) {
        CompagnieAeree c = repoC.getReferenceById(id);
        model.addAttribute("tratte", repoT.findByCompagnieAereeId(c));
        return ("tratte/list");

    }

    @GetMapping("/tratte")
    public String getCompagnie(Model model) {
        model.addAttribute("compagnie_aeree", repoC.findAll());
        model.addAttribute("tratte", repoT.findAll());

        return ("tratte/list");
    }

    @GetMapping("/tratte/{id}/edit")
    public String getEditCompagnie(@PathVariable Long id, Model model) {
        model.addAttribute("compagnie_aeree", repoC.findAll());

        model.addAttribute("tratte", repoT.getReferenceById(id));
        return ("tratte/edit");
    }

    @GetMapping("/tratte/{id}/delete")
    public String getEditCompagnie(@PathVariable Long id) {
        repoT.deleteById(id);
        return "redirect:/tratte";
    }

    @GetMapping("/tratte/new")
    public String newCompagnie(Model model) {
        model.addAttribute("tratte", new Tratte());
        model.addAttribute("compagnie_aeree", repoC.findAll());

        return ("tratte/edit");

    }

    @PostMapping("/tratte/findByAereoporto_destinazione")
    public String postMethodName(String destinazione, Model model) {
        model.addAttribute("compagnie_aeree", repoC.findAll());
        model.addAttribute("tratte", repoT.findByDestinazione(destinazione));

        return ("tratte/list");
    }

    @PostMapping("/tratte")
    public String getNewCOmpagnie(@ModelAttribute Tratte compagnieAeree, Model model) {
        // TODO: process POST request

        repoT.save(compagnieAeree);
        return "redirect:/tratte";

    }

}
