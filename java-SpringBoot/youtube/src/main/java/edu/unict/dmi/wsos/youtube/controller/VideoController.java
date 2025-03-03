package edu.unict.dmi.wsos.youtube.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestParam;

import edu.unict.dmi.wsos.youtube.model.Video;
import edu.unict.dmi.wsos.youtube.repositories.GenreRepo;
import edu.unict.dmi.wsos.youtube.repositories.VideoRepo;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;

@Controller
public class VideoController {

    private final VideoRepo repoV;

    private final GenreRepo repoG;

    public VideoController(VideoRepo repoV, GenreRepo repoG) {
        this.repoV = repoV;
        this.repoG = repoG;
    }

    @GetMapping("/video")
    public String getVideos(Model model) {
        model.addAttribute("genre", repoG.findAll());
        model.addAttribute("video", repoV.findAll());

        return ("/video/list");
    }

    @GetMapping("/video/{id}/delete")
    public String getMethodName(@PathVariable Long id) {

        repoV.deleteById(id);
        return "redirect:/video";
    }

    @GetMapping("/video/{id}/edit")
    public String editVideo(@PathVariable Long id, Model model) {
        model.addAttribute("genre", repoG.findAll());
        model.addAttribute("video", repoV.getReferenceById(id));

        return ("video/edit");
    }

    @PostMapping("/video")
    public String newVideo(@ModelAttribute Video video) {
        repoV.save(video);
        return "redirect:/video";
    }

    @GetMapping("/video/new")
    public String newVideo(Model model) {
        model.addAttribute("genre", repoG.findAll());
        model.addAttribute("video", new Video());
        return ("video/edit");

    }

}
