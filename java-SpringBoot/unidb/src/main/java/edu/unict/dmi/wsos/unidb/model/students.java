package edu.unict.dmi.wsos.unidb.model;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.ManyToOne;

@Entity
public class students {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    Long id;
    String name;

    String matricola;
    @ManyToOne
    @JoinColumn(name = "materie_Id")
    materie materie;

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getMatricola() {
        return matricola;
    }

    public void setMatricola(String matricola) {
        this.matricola = matricola;
    }

    public materie getMaterie() {
        return materie;
    }

    public void setMaterie(materie materie) {
        this.materie = materie;
    }

    public students() {
    }

    public students(Long id, String name, String matricola, materie materie) {
        this.id = id;
        this.name = name;
        this.matricola = matricola;
        this.materie = materie;
    }
}
