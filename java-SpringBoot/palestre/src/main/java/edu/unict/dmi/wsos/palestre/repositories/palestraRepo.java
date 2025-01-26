package edu.unict.dmi.wsos.palestre.repositories;

import org.springframework.data.jpa.repository.JpaRepository;

import edu.unict.dmi.wsos.palestre.model.palestra;

public interface palestraRepo extends JpaRepository<palestra, Long> {

}