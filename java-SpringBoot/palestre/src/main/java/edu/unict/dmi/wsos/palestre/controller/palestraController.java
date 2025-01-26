package edu.unict.dmi.wsos.palestre.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;

import edu.unict.dmi.wsos.palestre.model.palestra;
import edu.unict.dmi.wsos.palestre.repositories.palestraRepo;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;

@Controller
public class palestraController {

    private final palestraRepo repoP;

    public palestraController(palestraRepo repoP) {
        this.repoP = repoP;
    }

    @GetMapping("/palestra")
    public String getPalestre(Model model) {
        model.addAttribute("palestra", repoP.findAll());
        return ("palestra/list");
    }

    @PostMapping("palestra/new")
    public String newPalestra(palestra palestra) {
        repoP.save(palestra);
        return ("redirect:/palestra");
    }

    @PostMapping("palestra/delete")
    public String deletePalestra(Long id) {
        repoP.deleteById(id);
        return ("redirect:/palestra");
    }

    @PostMapping("palestra/modify")
    public String modifyPalestra(Long id, Model model) {
        model.addAttribute("palestra", repoP.getReferenceById(id));
        return ("palestra/edit");
    }

}
