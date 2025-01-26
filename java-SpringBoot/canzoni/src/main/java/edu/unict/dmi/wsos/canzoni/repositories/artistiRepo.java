package edu.unict.dmi.wsos.canzoni.repositories;

import org.springframework.data.jpa.repository.JpaRepository;

import edu.unict.dmi.wsos.canzoni.model.artisti;

public interface artistiRepo extends JpaRepository<artisti, Long> {

}