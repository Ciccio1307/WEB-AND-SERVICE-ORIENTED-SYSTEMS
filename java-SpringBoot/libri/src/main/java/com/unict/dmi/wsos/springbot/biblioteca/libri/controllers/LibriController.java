package com.unict.dmi.wsos.springbot.biblioteca.libri.controllers;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;

import com.unict.dmi.wsos.springbot.biblioteca.libri.data.LibriRepository;
import com.unict.dmi.wsos.springbot.biblioteca.libri.models.Libri;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;



@Controller
public class LibriController {
    

    private final LibriRepository repo;
    
    public LibriController(LibriRepository repo)
    {
        this.repo = repo;

    }

    @GetMapping("/")
    public String index(Model model)
    {
       model.addAttribute("libri", repo.findAll()); 
        return "index";
    }

@PostMapping("/elimina")
public String delete(Long id) {
    repo.deleteById(id);
    return "redirect:/";

}
@PostMapping("/create")
public String create(Libri libro) {
    repo.save(libro);
    return "redirect:/";

}


@PostMapping("/modifica")
public String getProdotto(Model model , Long id ) {
    model.addAttribute("libri", repo.getReferenceById(id)); 
    return "modifica";

}

@PostMapping("/update")
public String update(Libri libro) {
    repo.save(libro);
    return "redirect:/";

}


}
