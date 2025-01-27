package edu.unict.dmi.wsos.scuola.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;

import edu.unict.dmi.wsos.scuola.model.classi;
import edu.unict.dmi.wsos.scuola.model.studenti;
import edu.unict.dmi.wsos.scuola.repositories.classiRepo;
import edu.unict.dmi.wsos.scuola.repositories.studentiRepo;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RequestBody;

@Controller
public class studentiController {

    private final studentiRepo repoS;
    private final classiRepo repoC;

    public studentiController(studentiRepo repoS, classiRepo repoC) {
        this.repoS = repoS;
        this.repoC = repoC;
    }

    @GetMapping("/studenti")
    public String getStudenti(Model model) {
        model.addAttribute("studenti", repoS.findAll());
        model.addAttribute("classi", repoC.findAll());
        return ("studenti/list");

    }

    @PostMapping("/studenti/new")
    public String newClasse(studenti studenti) {
        repoS.save(studenti);
        return ("redirect:/studenti");
    }

    @PostMapping("/studenti/delete")
    public String deleteStudenti(Long id) {
        repoS.deleteById(id);
        return ("redirect:/studenti");
    }

    @PostMapping("/studenti/modify")
    public String modifyStudenti(Model model, Long id) {
        model.addAttribute("classi", repoC.findAll());

        model.addAttribute("studenti", repoS.getReferenceById(id));
        return ("/studenti/edit");
    }

    @PostMapping("/studenti/findByClass")
    public String postMethodName(Model model, Long classiId) {
        classi obj = repoC.getReferenceById(classiId);
        model.addAttribute("studenti", repoS.findByClassiId(obj));
        model.addAttribute("classi", repoC.findAll());
        return ("/studenti/list");
    }

}
