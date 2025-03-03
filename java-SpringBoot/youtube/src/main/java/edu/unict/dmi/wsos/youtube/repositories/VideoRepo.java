package edu.unict.dmi.wsos.youtube.repositories;

import org.springframework.data.jpa.repository.JpaRepository;

import edu.unict.dmi.wsos.youtube.model.Video;

public interface VideoRepo extends JpaRepository<Video, Long> {

}
