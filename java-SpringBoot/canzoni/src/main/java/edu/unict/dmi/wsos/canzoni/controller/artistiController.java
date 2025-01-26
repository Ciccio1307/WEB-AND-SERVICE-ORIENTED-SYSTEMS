package edu.unict.dmi.wsos.canzoni.controller;

import edu.unict.dmi.wsos.canzoni.model.artisti;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import edu.unict.dmi.wsos.canzoni.repositories.artistiRepo;
import org.springframework.web.bind.annotation.PostMapping;

@Controller
public class artistiController {
    private final artistiRepo repoA;

    public artistiController(artistiRepo repoA) {
        this.repoA = repoA;
    }

    @GetMapping("/artisti")
    public String getMethodName(Model model) {
        model.addAttribute("artisti", repoA.findAll());
        return ("artisti/list");

    }

    @PostMapping("/artisti/new")
    public String createArtista(artisti artisti) {
        repoA.save(artisti);
        return "redirect:/artisti";
    }

    @PostMapping("/artisti/delete")
    public String deleteartisti(Long id) {
        repoA.deleteById(id);
        return "redirect:/artisti";
    }

    @PostMapping("/artisti/modify")
    public String modifyArtisti(Model model, Long id) {
        model.addAttribute("artisti", repoA.getReferenceById(id));

        return ("artisti/edit");
    }

}