package edu.unict.dmi.wsos.palestre.model;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.ManyToOne;

@Entity
public class iscritti {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    Long id;
    String name;
    Integer age;
    Integer weight;

    public iscritti() {
    }

    public iscritti(Long id, String name, Integer age, Integer weight, palestra palestraId) {
        this.id = id;
        this.name = name;
        this.age = age;
        this.weight = weight;
        this.palestraId = palestraId;
    }

    @ManyToOne
    @JoinColumn(name = "palestra_id")
    palestra palestraId;

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

    public Integer getAge() {
        return age;
    }

    public void setAge(Integer age) {
        this.age = age;
    }

    public Integer getWeight() {
        return weight;
    }

    public void setWeight(Integer weight) {
        this.weight = weight;
    }

    public palestra getPalestraId() {
        return palestraId;
    }

    public void setPalestraId(palestra palestraId) {
        this.palestraId = palestraId;
    }
}
