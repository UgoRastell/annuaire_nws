<?php


class Database {
	private $host="localhost";
    private $user="root";
    private $password="";
    private $dbName="annuaire_nws";

    protected function connexionDB()
    {
        $db = new PDO('mysql:host=localhost;dbname=annuaire_nws','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $db;
    }
}

class Students extends Database
{
    public function getAllStudents()
    {
        $sql="SELECT * from photo_student inner join student on photo_id = student_id";
        $stmt = $this->connexionDB()->query($sql);
        
        foreach($stmt->fetchAll() as $row)
        {
            $id = $row['student_id'];
            echo "
            <div class=personne>
            <div class=photo_student>
              <img src=./assets/profil_student/".$row['photo_directory'].">
            </div>
            <div class=text>
              <strong><p class=nomPrenom> Prénom et nom : <a id=btn-info href=infos_student.php?id=.$id>".$row['student_prenom'] . " " . $row['student_nom']."</p></a></strong>
              <p class=email> Adresse mail : ".$row['student_email']."</p>
              <p class=numeroTelephone>Numéro de télephone : ".$row['student_numero_telephone']."</p>
              <hr class=solid>
            </div>
          </div>";
        }
    }

    public function getSoloStudent()
    {
        $id=$_REQUEST['id'];
        $sql="SELECT * from photo_student inner join student on photo_id = $id";
        $stmt = $this->connexionDB()->query($sql);
        
        foreach($stmt->fetchAll() as $row)
        {
            echo "
            <div class=personne>
            <div class=photo_student>
              <img src=./assets/profil_student/".$row['photo_directory'].">
            </div>
            <div class=text>
              <strong><p class=nomPrenom> Prénom et nom : <a id=btn-info href=infos_student.php?id=.$id>".$row['student_prenom'] . " " . $row['student_nom']."</p></a></strong>
              <p class=email> Adresse mail : ".$row['student_email']."</p>
              <p class=numeroTelephone>Numéro de télephone : ".$row['student_numero_telephone']."</p>
              <hr class=solid>
            </div>
          </div>";
        }
    }

    public function deleteStudents()
    {

    }

    public function updateStudents()
    {
        
    }

    public function Students()
    {
        
    }
}

