package edu.unict.dmi.wsos.smartedu.repositories;

import org.springframework.data.jpa.repository.JpaRepository;

import edu.unict.dmi.wsos.smartedu.model.Studenti;

public interface studentiRepo extends JpaRepository<Studenti, Long> {

}
