package edu.unict.dmi.wsos.scuola.model;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.ManyToOne;

@Entity
public class studenti {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    Long id;
    String name;
    Integer eta;
    @ManyToOne
    @JoinColumn(name = "classi_id")
    classi classiId;

    public studenti() {

    }

    public studenti(Long id, String name, Integer eta, classi classiId) {
        this.id = id;
        this.name = name;
        this.eta = eta;
        this.classiId = classiId;
    }

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

    public Integer getEta() {
        return eta;
    }

    public void setEta(Integer eta) {
        this.eta = eta;
    }

    public classi getClassiId() {
        return classiId;
    }

    public void setClassiId(classi classiId) {
        this.classiId = classiId;
    }

}
