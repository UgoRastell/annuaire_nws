<?php

class Person
{
    public string $name;
    public string $lastName;
    public int $age;
    public string $numeroTelephone;
    public string $email;

    public function __construct(string $prenom, string $nom, int $age_personne, string $numero_de_telephone, string $adresse_mail)
    {
        $this->name = $prenom;
        $this->lastName = $nom;
        $this->age = $age_personne;
        $this->numeroTelephone = $numero_de_telephone;
        $this->email = $adresse_mail;
    }
}

class Student extends Person
{
    public string $speciality;
    public string $last_diplome;

    public function __construct(string $prenom, string $nom, int $age_personne, string $numero_de_telephone, string $adresse_mail, string $specialite, string $lastDiplome)
    {
        parent::__construct($prenom, $nom, $age_personne, $numero_de_telephone, $adresse_mail);
        $this->speciality = $specialite;
        $this->last_diplome = $lastDiplome;
    }
}