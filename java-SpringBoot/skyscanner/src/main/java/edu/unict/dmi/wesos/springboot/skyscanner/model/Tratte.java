package edu.unict.dmi.wesos.springboot.skyscanner.model;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.ManyToOne;

@Entity
public class Tratte {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    Long id;
    String aereoporto_origine;
    String destinazione;
    Integer distanza;
    @ManyToOne
    @JoinColumn(name = "CompagnieAeree_id")
    CompagnieAeree compagnieAereeId;

    public Tratte() {
    }

    public Tratte(Long id, String aereoporto_origine, String aereoporto_destinazione, Integer distanza,
            CompagnieAeree compagnieAereeId) {
        this.id = id;
        this.aereoporto_origine = aereoporto_origine;
        this.destinazione = aereoporto_destinazione;
        this.distanza = distanza;
        this.compagnieAereeId = compagnieAereeId;
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getAereoporto_origine() {
        return aereoporto_origine;
    }

    public void setAereoporto_origine(String aereoporto_origine) {
        this.aereoporto_origine = aereoporto_origine;
    }

    public String getDestinazione() {
        return destinazione;
    }

    public void setDestinazione(String aereoporto_destinazione) {
        this.destinazione = aereoporto_destinazione;
    }

    public Integer getDistanza() {
        return distanza;
    }

    public void setDistanza(Integer distanza) {
        this.distanza = distanza;
    }

    public CompagnieAeree getCompagnieAereeId() {
        return compagnieAereeId;
    }

    public void setCompagnieAereeId(CompagnieAeree compagnieAereeId) {
        this.compagnieAereeId = compagnieAereeId;
    }

}
