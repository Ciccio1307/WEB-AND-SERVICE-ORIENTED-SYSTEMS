package edu.unict.dmi.wsos.pappalardo.model;

import java.util.ArrayList;
import java.util.List;

import jakarta.persistence.CascadeType;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.OneToMany;

@Entity
public class Telefono {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    Long id;
    String numeroTelefono;
    String nominativo;
    @OneToMany(mappedBy = "telefonoId", cascade = CascadeType.REMOVE)
    List<Chiamata> Chiamata = new ArrayList<>();

    public Telefono() {

    }

    public Telefono(Long id, String numeroTelefono, String nominativo) {
        this.id = id;
        this.numeroTelefono = numeroTelefono;
        this.nominativo = nominativo;
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getNumeroTelefono() {
        return numeroTelefono;
    }

    public void setNumeroTelefono(String numeroTelefono) {
        this.numeroTelefono = numeroTelefono;
    }

    public String getNominativo() {
        return nominativo;
    }

    public void setNominativo(String nominativo) {
        this.nominativo = nominativo;
    }

}
