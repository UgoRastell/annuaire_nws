<?php
require_once './database&requete.php';

class Student
{
    public string $name;
    public string $lastName;
    public string $age;
    public string $numeroTelephone;
    public string $email;
    public bool $genre;
    public string $adresse;
    public string $speciality;
    public string $diplomeStudent;

    public function __construct(string $prenom, string $nom, string $age_personne, string $numero_de_telephone, string $adresse_mail, string $specialite, string $diplome, bool $genrePerson, string $adressePerson)
    {
        $this->name = $prenom;
        $this->lastName = $nom;
        $this->age = $age_personne;
        $this->numeroTelephone = $numero_de_telephone;
        $this->email = $adresse_mail;
        $this->genre = $genrePerson;
        $this->adresse = $adressePerson;
        $this->speciality = $specialite;
        $this->diplomeStudent = $diplome;
    }

    public function readStudent()
    {  
        $pdo=getPDO();

        $result =sql("SELECT * from photo_student inner join student on photo_id = student_id");
        return $result;
    }

    public function insertStudent()
    {  
        $pdo=getPDO();

        $result =sql("SELECT * from photo_student inner join student on photo_id = student_id");
        return $result;
    }

    public function deleteStudent()
    {  
        $pdo=getPDO();

        $result =sql("SELECT * from photo_student inner join student on photo_id = student_id");
        return $result;
    }

    public function updateStudent()
    {  
        $pdo=getPDO();

        $result =sql("SELECT * from photo_student inner join student on photo_id = student_id");
        return $result;
    }
}