package edu.unict.dmi.wsos.pappalardo.repositories;

import org.springframework.data.jpa.repository.JpaRepository;

import edu.unict.dmi.wsos.pappalardo.model.Chiamata;
import edu.unict.dmi.wsos.pappalardo.model.Telefono;

import java.util.List;

public interface ChiamataRepo extends JpaRepository<Chiamata, Long> {

    List<Chiamata> findByTelefonoId(Telefono telefonoId);
}
