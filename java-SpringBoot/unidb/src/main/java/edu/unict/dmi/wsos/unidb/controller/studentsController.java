package edu.unict.dmi.wsos.unidb.controller;

import java.util.ArrayList;
import java.util.List;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;

import edu.unict.dmi.wsos.unidb.model.materie;
import edu.unict.dmi.wsos.unidb.model.students;
import edu.unict.dmi.wsos.unidb.repositories.materieRepo;
import edu.unict.dmi.wsos.unidb.repositories.studentsRepo;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RequestBody;

@Controller
public class studentsController {

    public studentsController(studentsRepo repoS, materieRepo repoM) {
        this.repoS = repoS;
        this.repoM = repoM;
    }

    private final studentsRepo repoS;
    private final materieRepo repoM;

    @GetMapping("/students")
    public String getMethodName(Model model) {
        model.addAttribute("students", repoS.findAll());
        model.addAttribute("materie", repoM.findAll());
        return ("/students/list");
    }

    @PostMapping("/students/new")
    public String postMethodName(students students) {
        repoS.save(students);
        return "redirect:/students";
    }

    @GetMapping("/students/{id}/delete")
    public String DeleteStudents(@PathVariable Long id) {
        repoS.deleteById(id);
        return "redirect:/students";

    }

    @GetMapping("/students/{id}/modify")
    public String EditStudent(@PathVariable Long id, Model model) {
        model.addAttribute("students", repoS.getReferenceById(id));
        model.addAttribute("materie", repoM.findAll());
        return ("/students/edit");

    }

    @PostMapping("/students/search")
    public String ricercaStudenteString(Model model, Long materieId) {
        materie materiaS = repoM.getReferenceById(materieId);
        model.addAttribute("students", repoS.findByMaterie(materiaS));
        return ("students/list");

    }

}
