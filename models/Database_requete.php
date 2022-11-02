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
        $sql="SELECT * from student";
        $stmt = $this->connexionDB()->query($sql);
        
        foreach($stmt->fetchAll() as $row)
        {
            $id = $row['student_id'];
            echo "
            <div class=personne>
            <div class=photo_student>
              <img src=./assets/profil_student/".$row['photo_student'].">
            </div>
            <div class=text>
              <strong><p class=nomPrenom> Prénom et nom : <a id=btn-info href=infos_student.php?id=$id>".$row['student_prenom'] . " " . $row['student_nom']."</p></a></strong>
              <p class=email> Adresse mail : ".$row['student_email']."</p>
              <p class=numeroTelephone>Numéro de télephone : ".$row['student_numero_telephone']."</p>
              <hr class=solid>
            </div>
          </div>";
        }
    }

    public function getSoloStudent()
    {
        $id= $_REQUEST['id'];
        $sql="SELECT * from student WHERE student_id=$id";
        $stmt = $this->connexionDB()->query($sql);
        
        foreach($stmt->fetchAll() as $row)
        {
            echo "
            <br>
            <br>
            <br>
            <div class=container>
              <div class=card>
              <div class=row g-0>
                <div class=col-md-3 align-items-center>
                  <img src=./assets/profil_student/".$row['photo_student']." class=img-fluid rounded-start>
                </div>
                <div class=col-md-8>
                  <div class=card-body>
                    <h5 class=card-title>".$row['student_prenom']."</h5>
                    <p class=card-text>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <br>
                    <br>
                  </div>
                </div>
              </div>
            </div>
          ";
        }
    }

    public function addStudents()
    {
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $age = $_POST['age'];
        $genre = $_POST['genre'];
        $diplome = $_POST['diplome'];
        $email = $_POST['email'];
        $adresse = $_POST['adresse'];
        $telephone = $_POST['telephone'];
        $specialite = $_POST['specialite'];
        $image = $_FILES['image']['name'];

        
        $sql="INSERT INTO student(student_prenom, student_nom, student_age, student_genre, student_diplome, student_email, student_adresse, student_numero_telephone, student_speciality, photo_student) 
              VALUES ('$prenom','$nom','$age','$genre','$diplome','$email','$adresse','$telephone','$specialite', '$image')";
        $stmt = $this->connexionDB()->query($sql);

        
    }

    public function deleteStudents()
    {
        $id= $_REQUEST['id'];
        $sql="DELETE FROM student WHERE student_id = $id";
        $stmt = $this->connexionDB()->query($sql);
        header('Location:http://localhost/annuaire_nws/');
    }

    public function updateStudents()
    {
      $id= $_REQUEST['id'];
      $prenom = $_POST['prenom'];
      $nom = $_POST['nom'];
      $age = $_POST['age'];
      $genre = $_POST['genre'];
      $diplome = $_POST['diplome'];
      $email = $_POST['email'];
      $adresse = $_POST['adresse'];
      $telephone = $_POST['telephone'];
      $specialite = $_POST['specialite'];
      $image = $_FILES['image']['name'];

      $id= $_REQUEST['id'];
      $sql="UPDATE student SET student_prenom='$prenom',student_nom='$nom ',student_age='$age',student_genre='$genre',student_diplome='$diplome',student_email='$email',student_adresse='$adresse',student_numero_telephone='$telephone',student_speciality='$specialite',photo_student='$image' WHERE student_id = $id";
      $stmt = $this->connexionDB()->query($sql);

    }

    public function searchStudents()
    {
      $ok = '0';
        $recherche = htmlspecialchars($_POST['chercher']);
        $sql="SELECT * FROM student WHERE student_prenom LIKE '%$recherche%';";
        $stmt = $this->connexionDB()->query($sql);

        if ($stmt) {
         while ($etudiant = $stmt->fetch()) 
         {
          echo "
            <br>
            <br>
            <br>
            <div class=container>
              <div class=card>
              <div class=row g-0>
                <div class=col-md-3 align-items-center>
                  <img src=./assets/profil_student/".$etudiant['student_prenom']." class=img-fluid rounded-start>
                </div>
                <div class=col-md-8>
                  <div class=card-body>
                    <h5 class=card-title>".$etudiant['student_prenom']."</h5>
                    <p class=card-text>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <br>
                    <br>
                  </div>
                </div>
              </div>
            </div>
          ";
         }
        }else {
          echo 'aucun etudiant trouvé';
          echo $etudiant['student_prenom'];
        }
    
    }

    public function filterStudents()
    {
      
    }
}

