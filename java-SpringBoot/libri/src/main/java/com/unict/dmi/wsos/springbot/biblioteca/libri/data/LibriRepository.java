package com.unict.dmi.wsos.springbot.biblioteca.libri.data;

import org.springframework.data.jpa.repository.JpaRepository;

import com.unict.dmi.wsos.springbot.biblioteca.libri.models.Libri;

public interface LibriRepository extends JpaRepository<Libri,Long> {

    
} 
    

