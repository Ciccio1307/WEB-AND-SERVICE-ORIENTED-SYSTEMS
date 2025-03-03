package edu.unict.dmi.wsos.youtube.repositories;

import org.springframework.data.jpa.repository.JpaRepository;

import edu.unict.dmi.wsos.youtube.model.Genre;

public interface GenreRepo extends JpaRepository<Genre, Long> {

}
