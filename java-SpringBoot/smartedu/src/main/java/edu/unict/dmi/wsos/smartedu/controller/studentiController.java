package edu.unict.dmi.wsos.smartedu.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;

import edu.unict.dmi.wsos.smartedu.model.Studenti;
import edu.unict.dmi.wsos.smartedu.repositories.studentiRepo;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;

@Controller
public class studentiController {

    private final studentiRepo repoS;

    public studentiController(studentiRepo repoS) {
        this.repoS = repoS;
    }

    @GetMapping("/studenti")
    public String getStudenti(Model model) {
        model.addAttribute("studenti", repoS.findAll());
        return ("studenti/list");
    }

    @GetMapping("/studenti/{id}/edit")
    public String modifyStudenti(@PathVariable Long id, Model model) {
        model.addAttribute("studenti", repoS.getReferenceById(id));
        return ("studenti/edit");
    }

    @GetMapping("/studenti/{id}/delete")
    public String deleteStudenti(@PathVariable Long id) {
        repoS.deleteById(id);
        return "redirect:/studenti";
    }

    @GetMapping("/studenti/new")
    public String newStudenti(Model model) {
        model.addAttribute("studenti", new Studenti());
        return ("studenti/edit");
    }

    @PostMapping("/studenti")
    public String saveStudenti(@ModelAttribute Studenti studenti) {
        repoS.save(studenti);
        return "redirect:/studenti";
    }

}
