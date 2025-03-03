package edu.unict.dmi.wsos.smartedu.model;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.ManyToOne;

@Entity
public class Esami {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    Long id;
    String nome;
    Integer cfu;

    @ManyToOne
    @JoinColumn(name = "studenti_id")
    Studenti studentiId;

    public Esami() {
    }

    public Esami(Long id, String nome, Integer cfu, Studenti studentiId) {
        this.id = id;
        this.nome = nome;
        this.cfu = cfu;
        this.studentiId = studentiId;
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public Integer getCfu() {
        return cfu;
    }

    public void setCfu(Integer cfu) {
        this.cfu = cfu;
    }

    public Studenti getStudentiId() {
        return studentiId;
    }

    public void setStudentiId(Studenti studentiId) {
        this.studentiId = studentiId;
    }

}
