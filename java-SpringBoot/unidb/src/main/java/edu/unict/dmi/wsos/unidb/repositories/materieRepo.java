package edu.unict.dmi.wsos.unidb.repositories;

import org.springframework.data.jpa.repository.JpaRepository;

import edu.unict.dmi.wsos.unidb.model.materie;

public interface materieRepo extends JpaRepository<materie, Long> {

    Object findByCfu(materie materie);
}
