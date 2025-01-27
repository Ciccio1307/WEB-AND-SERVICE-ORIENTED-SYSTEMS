package edu.unict.dmi.wsos.scuola.model;

import java.util.ArrayList;
import java.util.List;

import jakarta.persistence.CascadeType;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.OneToMany;

@Entity
public class classi {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    Long id;

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public Integer getAnno() {
        return anno;
    }

    public void setAnno(Integer anno) {
        this.anno = anno;
    }

    public String getSezione() {
        return sezione;
    }

    public void setSezione(String sezione) {
        this.sezione = sezione;
    }

    Integer anno;
    String sezione;

    public classi() {
    }

    public classi(Long id, Integer anno, String sezione) {
        this.id = id;
        this.anno = anno;
        this.sezione = sezione;
    }

    @OneToMany(mappedBy = "classiId", cascade = CascadeType.REMOVE)
    List<studenti> studenti = new ArrayList<>();
}
