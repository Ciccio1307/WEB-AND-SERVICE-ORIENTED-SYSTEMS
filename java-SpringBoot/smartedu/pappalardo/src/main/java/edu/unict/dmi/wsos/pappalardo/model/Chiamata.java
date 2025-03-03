package edu.unict.dmi.wsos.pappalardo.model;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.ManyToOne;

@Entity
public class Chiamata {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    Long id;
    Integer durata;
    @ManyToOne
    @JoinColumn(name = "telefono_id")
    Telefono telefonoId;

    public Chiamata() {
    }

    public Chiamata(Long id, Integer durata, Telefono telefonoId) {
        this.id = id;
        this.durata = durata;
        this.telefonoId = telefonoId;
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public Integer getDurata() {
        return durata;
    }

    public void setDurata(Integer durata) {
        this.durata = durata;
    }

    public Telefono getTelefonoId() {
        return telefonoId;
    }

    public void setTelefonoId(Telefono telefonoId) {
        this.telefonoId = telefonoId;
    }

}
