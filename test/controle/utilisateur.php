<?php
include("./modele/utilisateur_db.php");
function connexion_inscription(){
  
    if(empty ($_SESSION['profil'])){
        if(isset($_POST['formInscription'])){
           if(!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['id']) AND !empty($_POST['id2']) AND !empty($_POST['password']) AND $_POST['day']!="Jour" AND $_POST['month']!="Mois" AND $_POST['year']!="Année" AND !empty($_POST['gender'])){

               $prenom = htmlspecialchars($_POST['prenom']);
               $nom = htmlspecialchars($_POST['nom']);
               $id = htmlspecialchars($_POST['id']);
               $id2 = htmlspecialchars($_POST['id2']);
               $password = sha1($_POST['password']);
               $day = htmlspecialchars($_POST['day']);
               $month = htmlspecialchars($_POST['month']);
               $year = htmlspecialchars($_POST['year']);
               $gender = htmlspecialchars($_POST['gender']);
               $gender_id=1;
               $date = $day."/".$month."/".$year;
               if($gender == "femme"){
                   $gender_id=0;
               }
               if(strlen($prenom)<=255){
                   if(strlen($nom)<=255){
                        if($id == $id2){
                            if(filter_var($id,FILTER_VALIDATE_EMAIL) OR preg_match('/[0-9]{10}/',$id) && strlen($id) == 10){
                                $_POST['erreur'] = inscriptiton($prenom, $nom, $id, $password, $date, $gender_id);

                            }else{
                                $_POST['erreur'] = "adresse email ou numero non valide";
                            }
                        }else{
                            $_POST['erreur'] = "les numero ou email ne correspondent pas.";
                        }
                   }else{
                       $_POST['erreur'] = "Le nom ne peut depasser 255 charactere."; 
                   }
               }else{
                  $_POST['erreur'] = "Le prenom ne peut depasser 255 charactere."; 
               }

           }else{
                $_POST['erreur'] = "remplissez toute les cases.";
           }
        }elseif(isset($_POST['formConnexion'])){
            if(!empty($_POST['co_id']) AND !empty($_POST['co_password'])){
                $identifiant = htmlspecialchars($_POST['co_id']);
                $pass = sha1($_POST['co_password']);
                if(Connexion($identifiant, $pass)){
                    $_POST['erreur2'] = "Connexion réussi";
                    header('location: http://localhost/test/?control=utilisateur&action=accueil');
                    exit;
                }else{
                     $_POST['erreur2'] = "Mauvais identifiants";
                }
            }else{
                 $_POST['erreur2'] = "Entrer les informations de connexion.";
            }
        }
    }else{
       header('location: http://localhost/test/?control=utilisateur&action=accueil');
        exit; 
    }

      require("/../vue/accueil.php");  

}
function accueil(){
   require("/../vue/profil.php");
}

function logout(){
    session_destroy();
    header('location: http://localhost/test/');
}
?>