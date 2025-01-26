package edu.unict.dmi.wsos.canzoni.repositories;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;

import edu.unict.dmi.wsos.canzoni.model.artisti;
import edu.unict.dmi.wsos.canzoni.model.brani;

public interface braniRepo extends JpaRepository<brani, Long> {

    List<brani> findByArtistiId(artisti art);

}
