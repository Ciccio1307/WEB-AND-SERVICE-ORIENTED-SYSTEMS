package edu.unict.dmi.wsos.palestre.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;

import edu.unict.dmi.wsos.palestre.model.iscritti;
import edu.unict.dmi.wsos.palestre.model.palestra;
import edu.unict.dmi.wsos.palestre.repositories.iscrittiRepo;
import edu.unict.dmi.wsos.palestre.repositories.palestraRepo;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;

@Controller
public class iscrittiController {
    private final iscrittiRepo repoI;
    private final palestraRepo repoP;

    public iscrittiController(iscrittiRepo repoI, palestraRepo repoP) {
        this.repoI = repoI;
        this.repoP = repoP;
    }

    @GetMapping("/iscritti")
    public String getIscritti(Model model) {
        model.addAttribute("palestra", repoP.findAll());
        model.addAttribute("iscritti", repoI.findAll());
        return ("iscritti/list");
    }

    @PostMapping("iscritti/new")
    public String newPalestra(iscritti iscritti) {
        repoI.save(iscritti);
        return ("redirect:/iscritti");
    }

    @PostMapping("iscritti/delete")
    public String deletePalestra(Long id) {
        repoI.deleteById(id);
        return ("redirect:/iscritti");
    }

    @PostMapping("iscritti/modify")
    public String modifyPalestra(Long id, Model model) {
        model.addAttribute("palestra", repoP.findAll());
        model.addAttribute("iscritti", repoI.getReferenceById(id));
        return ("iscritti/edit");
    }

    @PostMapping("/iscritti/search")
    public String postMethodName(Model model, Long palestraId) {
        palestra palestra = repoP.getReferenceById(palestraId);
        model.addAttribute("iscritti", repoI.findByPalestraId(palestra));
        return ("iscritti/list");
    }
}
