package edu.unict.dmi.wsos.smartedu.model;

import java.util.ArrayList;
import java.util.List;

import jakarta.persistence.CascadeType;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.OneToMany;

@Entity
public class Studenti {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    Long id;
    String matricola;
    String nominativo;
    @OneToMany(mappedBy = "studentiId", cascade = CascadeType.REMOVE)
    List<Esami> Esami = new ArrayList<>();

    public Studenti() {
    }

    public Studenti(Long id, String matricola, String nominativo) {
        this.id = id;
        this.matricola = matricola;
        this.nominativo = nominativo;
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getMatricola() {
        return matricola;
    }

    public void setMatricola(String matricola) {
        this.matricola = matricola;
    }

    public String getNominativo() {
        return nominativo;
    }

    public void setNominativo(String nominativo) {
        this.nominativo = nominativo;
    }

}
