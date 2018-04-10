<?php

include("./modele/connect_db.php");
function inscriptiton($prenom, $nom, $id, $password, $date, $gender_id){
    $pdo = connectToDb();
    $requete1 = $pdo->prepare("SELECT * FROM `users` WHERE `id` LIKE :v");
        $requete1->bindParam(':v',$id);
        $requete1->execute();
        $resultats = $requete1->fetchAll();
    if(count($resultats)==0){
        $requete = $pdo->prepare("INSERT INTO `users` (`name`, `surname`, `id`, `password`, `date`, `gender`) VALUES (?, ?, ?, ?, ?, ?)");
        $requete->bindParam(1,$prenom);
        $requete->bindParam(2,$nom);
        $requete->bindParam(3,$id);
        $requete->bindParam(4,$password);
        $requete->bindParam(5,$date);
        $requete->bindParam(6,$gender_id);
        $requete->execute();
        return "Inscription réussi !";
    }else{
        return "Cette adresse email ou ce numero est deja utilisé.";
    }
    
    
}

function Connexion($identifiant, $pass){
    $pdo = connectToDb();
    $requete2 = $pdo->prepare("SELECT * FROM `users` WHERE `id` LIKE ? AND `password` LIKE ?");
    $requete2->bindParam(1,$identifiant);
    $requete2->bindParam(2,$pass);
    $requete2->execute();
    $resultats = $requete2->fetchAll();
    if(count($resultats)==1){
        $_SESSION['profil']= $resultats;
        return true;
    }else{
        return false;
    }
}
?>