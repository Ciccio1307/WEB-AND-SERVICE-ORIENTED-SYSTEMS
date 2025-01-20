package edu.unict.dmi.wsos.moda.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;

import edu.unict.dmi.wsos.moda.model.Abbigliamento;
import edu.unict.dmi.wsos.moda.model.Brand;
import edu.unict.dmi.wsos.moda.repositories.AbbigliamentoRepo;
import edu.unict.dmi.wsos.moda.repositories.BrandRepo;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;



@Controller
public class AbbigliamentoController
{
    private final AbbigliamentoRepo aRepo;
    private final BrandRepo bRepo;


    public AbbigliamentoController(AbbigliamentoRepo aRepo, BrandRepo bRepo) {
        this.aRepo = aRepo;
        this.bRepo = bRepo;
    }

    @GetMapping("/abbigliamento")
    public String getPadroni(Model model) {
        model.addAttribute("abbigliamento",aRepo.findAll());
        model.addAttribute("brand", bRepo.findAll());
        return ("abbigliamento/list");
    }
    @PostMapping("/abbigliamento/new")
    public String creaString(Abbigliamento abbigliamento) {
        aRepo.save(abbigliamento);
        return "redirect:/abbigliamento";
    }


    @GetMapping("/abbigliamento/{id}/delete")
    public String deleteee(@PathVariable Long id) {
        aRepo.deleteById(id);
        return "redirect:/abbigliamento";

    }
    
    @GetMapping("/abbigliamento/{id}/modify")
    public String getMethodName(@PathVariable Long id,Model model) {
        model.addAttribute("abbigliamento", aRepo.getReferenceById(id));
        model.addAttribute("brand", bRepo.findAll());

        return ("abbigliamento/edit");
    }

    @PostMapping("abbigliamento/update")
    public String updaString(Abbigliamento abbigliamento) {
        aRepo.save(abbigliamento);
        return "redirect:/abbigliamento";
    }

    @PostMapping("/abbigliamento/searchId")
    public String postMethodName(@RequestParam Long brand , Model model) {
    Brand brand2 = bRepo.getReferenceById(brand);
    model.addAttribute("abbigliamento",aRepo.findByBrand(brand2));
    model.addAttribute("brand",bRepo.findAll());
            
return("abbigliamento/list");    }
    

    
        
    
    
}