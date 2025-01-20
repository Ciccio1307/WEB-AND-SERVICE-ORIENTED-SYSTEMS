 package edu.unict.dmi.wsos.moda.repositories;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;

import edu.unict.dmi.wsos.moda.model.Abbigliamento;
import edu.unict.dmi.wsos.moda.model.Brand;

public interface AbbigliamentoRepo extends JpaRepository <Abbigliamento , Long> {

    List <Abbigliamento> findByBrand(Brand brand2);

     
}