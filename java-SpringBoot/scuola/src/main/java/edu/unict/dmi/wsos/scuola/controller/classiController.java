package edu.unict.dmi.wsos.scuola.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;

import edu.unict.dmi.wsos.scuola.model.classi;
import edu.unict.dmi.wsos.scuola.repositories.classiRepo;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;

@Controller
public class classiController {
    private final classiRepo repo;

    public classiController(classiRepo repo) {
        this.repo = repo;
    }

    @GetMapping("/classi")
    public String getClassi(Model model) {
        model.addAttribute("classi", repo.findAll());
        return ("/classi/list");
    }

    @PostMapping("/classi/new")
    public String newClasse(classi classi) {
        repo.save(classi);
        return ("redirect:/classi");
    }

    @PostMapping("/classi/delete")
    public String deleteClassi(Long id) {
        repo.deleteById(id);
        return ("redirect:/classi");
    }

    @PostMapping("/classi/modify")
    public String modifyClassi(Model model, Long id) {
        model.addAttribute("classi", repo.getReferenceById(id));
        return ("/classi/edit");
    }

}
