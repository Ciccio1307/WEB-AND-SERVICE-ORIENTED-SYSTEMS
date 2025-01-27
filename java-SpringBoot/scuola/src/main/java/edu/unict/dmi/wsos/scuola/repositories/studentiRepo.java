package edu.unict.dmi.wsos.scuola.repositories;

import org.springframework.data.jpa.repository.JpaRepository;

import edu.unict.dmi.wsos.scuola.model.classi;
import edu.unict.dmi.wsos.scuola.model.studenti;
import java.util.List;

public interface studentiRepo extends JpaRepository<studenti, Long> {
    List<studenti> findByClassiId(classi classiId);
}