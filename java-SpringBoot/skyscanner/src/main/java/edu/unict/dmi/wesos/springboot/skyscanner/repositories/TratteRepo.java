package edu.unict.dmi.wesos.springboot.skyscanner.repositories;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;

import edu.unict.dmi.wesos.springboot.skyscanner.model.CompagnieAeree;
import edu.unict.dmi.wesos.springboot.skyscanner.model.Tratte;

public interface TratteRepo extends JpaRepository<Tratte, Long> {

    List<Tratte> findByCompagnieAereeId(CompagnieAeree c);

    List<Tratte> findByDestinazione(String destinazione);

}
