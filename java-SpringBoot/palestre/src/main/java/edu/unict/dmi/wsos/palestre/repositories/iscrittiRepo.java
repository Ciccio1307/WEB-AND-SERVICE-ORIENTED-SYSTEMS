package edu.unict.dmi.wsos.palestre.repositories;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;

import edu.unict.dmi.wsos.palestre.model.iscritti;
import edu.unict.dmi.wsos.palestre.model.palestra;

public interface iscrittiRepo extends JpaRepository<iscritti, Long> {

    List<iscritti> findByPalestraId(palestra palestra);

}