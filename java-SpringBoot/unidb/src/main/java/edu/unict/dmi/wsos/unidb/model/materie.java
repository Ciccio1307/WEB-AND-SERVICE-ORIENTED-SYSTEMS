package edu.unict.dmi.wsos.unidb.model;

import java.util.ArrayList;
import java.util.List;

import jakarta.persistence.CascadeType;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.OneToMany;

@Entity
public class materie {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    Long id;
    String name;

    public materie(Long id, String name, int cfu) {
        this.id = id;
        this.name = name;
        this.cfu = cfu;
    }

    @OneToMany(mappedBy = "materie", cascade = CascadeType.ALL, orphanRemoval = true)
    private List<students> students = new ArrayList<>();

    public materie() {
    }

    int cfu;

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

    public int getCfu() {
        return cfu;
    }

    public void setCfu(int cfu) {
        this.cfu = cfu;
    }

}
