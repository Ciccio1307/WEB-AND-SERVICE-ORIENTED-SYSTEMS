package com.unict.dmi.wsos.springbot.biblioteca.libri.models;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.Id;
import jakarta.persistence.Table;
@Entity
@Table(name="libri")
public class Libri {
    @Id
    @GeneratedValue
    private long id;
    private String nome_libro;
    private int numero_pagine;

    public long getId() {
        return id;
    }

    public void setId(long id) {
        this.id = id;
    }

    public String getNome_libro() {
        return nome_libro;
    }

    public void setNome_libro(String nome_libro) {
        this.nome_libro = nome_libro;
    }

    public Integer getNumero_pagine() {
        return numero_pagine;
    }

    public void setNumero_pagine(Integer numero_pagine) {
        this.numero_pagine = numero_pagine;
    }


    public Libri(long id, String nome_libro, Integer numero_pagine) {
        this.id = id;
        this.nome_libro = nome_libro;
        this.numero_pagine = numero_pagine;
    }

    public Libri()
    {

    }


    

}

