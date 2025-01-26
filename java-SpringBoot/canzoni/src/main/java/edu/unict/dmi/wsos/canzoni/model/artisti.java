package edu.unict.dmi.wsos.canzoni.model;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;

@Entity
public class artisti {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    Long id;
    Integer numeroalbum;
    String name;

    public artisti() {
    }

    public artisti(Long id, Integer numeroalbum, String name) {
        this.id = id;
        this.numeroalbum = numeroalbum;
        this.name = name;
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public Integer getNumeroalbum() {
        return numeroalbum;
    }

    public void setNumeroalbum(Integer numeroalbum) {
        this.numeroalbum = numeroalbum;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

}
