package edu.unict.dmi.wsos.moda.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;

import edu.unict.dmi.wsos.moda.model.Brand;
import edu.unict.dmi.wsos.moda.repositories.BrandRepo;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestParam;

@Controller
public class BrandController

{

    private final BrandRepo repo;

    public BrandController(BrandRepo repo) {
        this.repo = repo;
    }

    @GetMapping("/brand")
    public String getBrand(Model model) {
        model.addAttribute("brand", repo.findAll());
        return ("brand/list");
    }

    @GetMapping("/brand/{id}/delete")
    public String delete(@PathVariable Long id) {
        repo.deleteById(id);
        return "redirect:/brand";
    }

    @GetMapping("/brand/{id}/modify")
    public String delete(@PathVariable Long id, Model model) {
        model.addAttribute("brand", repo.getReferenceById(id));
        return ("brand/edit");
    }

    @PostMapping("brand/new")
    public String creString(Brand brand) {
        repo.save(brand);
        return "redirect:/brand";
    }

}