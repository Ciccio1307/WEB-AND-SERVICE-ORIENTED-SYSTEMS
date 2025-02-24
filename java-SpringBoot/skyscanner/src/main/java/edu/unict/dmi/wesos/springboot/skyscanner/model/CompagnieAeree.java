package edu.unict.dmi.wesos.springboot.skyscanner.model;

import java.util.ArrayList;
import java.util.List;

import jakarta.persistence.CascadeType;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.OneToMany;

@Entity
public class CompagnieAeree {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)

    Long id;
    String description;
    String link;

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getLink() {
        return link;
    }

    public void setLink(String link) {
        this.link = link;
    }

    public CompagnieAeree() {
    }

    public CompagnieAeree(Long id, String description, String link) {
        this.id = id;
        this.description = description;
        this.link = link;
    }

    @OneToMany(mappedBy = "compagnieAereeId", cascade = CascadeType.REMOVE)
    List<Tratte> Tratte = new ArrayList<>();

}
