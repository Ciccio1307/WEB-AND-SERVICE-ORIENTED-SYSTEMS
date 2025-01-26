package edu.unict.dmi.wsos.canzoni.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;

import edu.unict.dmi.wsos.canzoni.model.artisti;
import edu.unict.dmi.wsos.canzoni.model.brani;
import edu.unict.dmi.wsos.canzoni.repositories.artistiRepo;
import edu.unict.dmi.wsos.canzoni.repositories.braniRepo;

@Controller
public class braniController {

    private final braniRepo repoB;
    private final artistiRepo repoA;

    public braniController(braniRepo repoB, artistiRepo repoA) {
        this.repoB = repoB;
        this.repoA = repoA;
    }

    @GetMapping("/brani")
    public String postMethodName(Model model) {
        model.addAttribute("artisti", repoA.findAll());
        model.addAttribute("brani", repoB.findAll());
        return ("brani/list");
    }

    @PostMapping("/brani/new")
    public String postMethodName(brani brani) {
        repoB.save(brani);
        return ("redirect:/brani");
    }

    @PostMapping("/brani/delete")
    public String deleteartisti(Long id) {
        repoB.deleteById(id);
        return "redirect:/brani";
    }

    @PostMapping("/brani/modify")
    public String modifyArtisti(Model model, Long id) {
        model.addAttribute("artisti", repoA.findAll());
        model.addAttribute("brani", repoB.getReferenceById(id));
        return ("brani/edit");
    }

    @PostMapping("/brani/search")
    public String searchArtist(Model model, Long artistiId) {
        model.addAttribute("artisti", repoA.findAll());
        artisti art = repoA.getReferenceById(artistiId);
        model.addAttribute("brani", repoB.findByArtistiId(art));
        return ("brani/list");
    }

}
