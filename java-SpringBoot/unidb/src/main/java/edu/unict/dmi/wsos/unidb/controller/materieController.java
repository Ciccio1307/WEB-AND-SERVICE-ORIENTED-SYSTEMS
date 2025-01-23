package edu.unict.dmi.wsos.unidb.controller;

import java.util.List;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;

import edu.unict.dmi.wsos.unidb.model.materie;
import edu.unict.dmi.wsos.unidb.repositories.materieRepo;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestParam;

@Controller
public class materieController {

    public final materieRepo repo;

    public materieController(materieRepo repo) {
        this.repo = repo;
    }

    @GetMapping("/materie")
    public String getMaterie(Model model) {
        model.addAttribute("materie", repo.findAll());

        List<materie> all_materie = repo.findAll();
        int count = 0;
        for (materie elem : all_materie) {
            count += elem.getCfu();
        }
        model.addAttribute("count", count);
        return ("materie/list");
    }

    @PostMapping("materie/new")
    public String addMateria(materie materie) {
        repo.save(materie);
        return ("redirect:/materie");
    }

    @PostMapping("materie/delete")
    public String delete(Long id) {
        repo.deleteById(id);
        return ("redirect:/materie");
    }

    @PostMapping("materie/modify")
    public String getEditMaterie(Long id, Model model) {
        model.addAttribute("materie", repo.getReferenceById(id));
        return ("materie/edit");
    }

}
