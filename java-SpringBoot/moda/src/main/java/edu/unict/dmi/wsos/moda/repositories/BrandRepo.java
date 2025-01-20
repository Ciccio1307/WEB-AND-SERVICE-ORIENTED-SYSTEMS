package edu.unict.dmi.wsos.moda.repositories;

import org.springframework.data.jpa.repository.JpaRepository;

import edu.unict.dmi.wsos.moda.model.Brand;

public interface BrandRepo extends JpaRepository <Brand, Long> {

    
}