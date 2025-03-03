package edu.unict.dmi.wsos.smartedu.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;

import edu.unict.dmi.wsos.smartedu.model.Esami;
import edu.unict.dmi.wsos.smartedu.model.Studenti;
import edu.unict.dmi.wsos.smartedu.repositories.esamiRepo;
import edu.unict.dmi.wsos.smartedu.repositories.studentiRepo;

@Controller
public class esamiController {

    private final esamiRepo repoE;
    private final studentiRepo repoS;

    public esamiController(esamiRepo repoE, studentiRepo repoS) {
        this.repoE = repoE;
        this.repoS = repoS;
    }

    @GetMapping("/esami")
    public String getStudenti(Model model) {
        model.addAttribute("studenti", repoS.findAll());
        model.addAttribute("esami", repoE.findAll());

        return ("esami/list");
    }

    @GetMapping("/esami/{id}/edit")
    public String modifyEsami(@PathVariable Long id, Model model) {
        model.addAttribute("esami", repoE.getReferenceById(id));
        model.addAttribute("studenti", repoS.findAll());

        return ("esami/edit");
    }

    @GetMapping("/esami/{id}/delete")
    public String deleteStudenti(@PathVariable Long id) {
        repoE.deleteById(id);
        return "redirect:/esami";
    }

    @GetMapping("/esami/new")
    public String newStudenti(Model model) {
        model.addAttribute("studenti", repoS.findAll());
        model.addAttribute("esami", new Esami());

        return ("esami/edit");
    }

    @PostMapping("/esami")
    public String saveStudenti(@ModelAttribute Esami esami) {
        repoE.save(esami);
        return "redirect:/esami";
    }

}
