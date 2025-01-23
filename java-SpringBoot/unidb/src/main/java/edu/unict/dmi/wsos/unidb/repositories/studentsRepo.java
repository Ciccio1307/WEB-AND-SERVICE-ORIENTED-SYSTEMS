package edu.unict.dmi.wsos.unidb.repositories;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;

import edu.unict.dmi.wsos.unidb.model.materie;
import edu.unict.dmi.wsos.unidb.model.students;

public interface studentsRepo extends JpaRepository<students, Long> {

    List<students> findByMaterie(materie materiaS);

}
