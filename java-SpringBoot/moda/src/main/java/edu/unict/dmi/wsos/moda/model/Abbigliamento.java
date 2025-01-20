package edu.unict.dmi.wsos.moda.model;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.ManyToOne;

@Entity
public class Abbigliamento {
    
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    long id;
    String name;
    String tipologiaAbb;
    public Abbigliamento(){}
    
    public long getId() {
        return id;
    }
    public void setId(long id) {
        this.id = id;
    }
    public String getName() {
        return name;
    }
    public void setName(String name) {
        this.name = name;
    }
    public String getTipologiaAbb() {
        return tipologiaAbb;
    }
    public void setTipologiaAbb(String tipologiaAbb) {
        this.tipologiaAbb = tipologiaAbb;
    }
    public Brand getBrand() {
        return brand;
    }
    public void setBrand(Brand brand) {
        this.brand = brand;
    }
    public Abbigliamento(long id, String name, String tipologiaAbb, Brand brand) {
        this.id = id;
        this.name = name;
        this.tipologiaAbb = tipologiaAbb;
        this.brand = brand;
    }
    @ManyToOne
    @JoinColumn(name = "brand_id")
    Brand brand;


    


}
