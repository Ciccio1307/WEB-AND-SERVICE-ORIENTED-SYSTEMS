package edu.unict.dmi.wsos.canzoni.model;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.ManyToOne;

@Entity
public class brani {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    Long id;
    String name;
    Integer minutiCanzone;

    @ManyToOne
    @JoinColumn(name = "artisti_id")
    artisti artistiId;

    public brani() {
    }

    public brani(Long id, String name, Integer minutiCanzone, artisti artistiId) {
        this.id = id;
        this.name = name;
        this.minutiCanzone = minutiCanzone;
        this.artistiId = artistiId;
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

    public Integer getMinutiCanzone() {
        return minutiCanzone;
    }

    public void setMinutiCanzone(Integer minutiCanzone) {
        this.minutiCanzone = minutiCanzone;
    }

    public artisti getArtistiId() {
        return artistiId;
    }

    public void setArtistiId(artisti artistiId) {
        this.artistiId = artistiId;
    }

}
