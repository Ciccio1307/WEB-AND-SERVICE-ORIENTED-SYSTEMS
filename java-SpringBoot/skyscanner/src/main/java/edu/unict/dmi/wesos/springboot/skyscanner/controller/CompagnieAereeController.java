package edu.unict.dmi.wesos.springboot.skyscanner.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;

import edu.unict.dmi.wesos.springboot.skyscanner.model.CompagnieAeree;
import edu.unict.dmi.wesos.springboot.skyscanner.repositories.CompagnieAereeRepo;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestParam;

@Controller
public class CompagnieAereeController {

    private final CompagnieAereeRepo repo;

    public CompagnieAereeController(CompagnieAereeRepo repo) {
        this.repo = repo;
    }

    @GetMapping("/compagnie")
    public String getCompagnie(Model model) {
        model.addAttribute("compagnie_aeree", repo.findAll());
        return ("compagnie/list");
    }

    @GetMapping("/compagnie/{id}/edit")
    public String getEditCompagnie(@PathVariable Long id, Model model) {
        model.addAttribute("compagnie_aeree", repo.getReferenceById(id));
        return ("compagnie/edit");
    }

    @GetMapping("/compagnie/{id}/delete")
    public String getEditCompagnie(@PathVariable Long id) {
        repo.deleteById(id);
        return "redirect:/compagnie";
    }

    @GetMapping("/compagnie/new")
    public String newCompagnie(Model model) {
        model.addAttribute("compagnie_aeree", new CompagnieAeree());
        return ("compagnie/edit");

    }

    @PostMapping("/compagnie")
    public String getNewCOmpagnie(@ModelAttribute CompagnieAeree compagnieAeree, Model model) {
        // TODO: process POST request

        repo.save(compagnieAeree);
        return "redirect:/compagnie";

    }

}
