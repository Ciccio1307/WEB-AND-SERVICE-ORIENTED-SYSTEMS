package edu.unict.dmi.wsos.youtube.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestParam;

import edu.unict.dmi.wsos.youtube.model.Genre;
import edu.unict.dmi.wsos.youtube.repositories.GenreRepo;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;

@Controller
public class GenreController {

    private final GenreRepo repoG;

    public GenreController(GenreRepo repoG) {
        this.repoG = repoG;
    }

    @GetMapping("/genre")
    public String getGenre(Model model) {

        model.addAttribute("genre", repoG.findAll());

        return ("/genre/list");

    }

    @PostMapping("/genre")
    public String newGenre(@ModelAttribute Genre genre) {
        repoG.save(genre);
        return "redirect:/genre";
    }

    @GetMapping("/genre/{id}/delete")
    public String deleteGenre(@PathVariable Long id) {
        repoG.deleteById(id);
        return "redirect:/genre";
    }

    @GetMapping("/genre/{id}/edit")
    public String getMethodName(@PathVariable Long id, Model model) {

        model.addAttribute("genre", repoG.getReferenceById(id));
        return ("/genre/edit");
    }

    @GetMapping("/genre/new")
    public String getNewGenre(Model model) {

        model.addAttribute("genre", new Genre());
        return ("/genre/edit");
    }
}