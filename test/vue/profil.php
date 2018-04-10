
<html>
    <head data-brackets-id='2'>
        <title data-brackets-id='3'>Accueil</title>
        <meta data-brackets-id='4' charset = "utf-8">
    </head>
    <body data-brackets-id='5'>
        <?php
        $nom = $_SESSION['profil'][0]['surname'];
        $prenom = $_SESSION['profil'][0]['name'];
        if($_SESSION['profil'][0]['gender'] == '0'){
            $genre = "Mme.";
        }else{
            $genre = "M.";
        }
           echo "<h1> Bonjour ". $genre. " ". $nom . " " . $prenom . "</h1>"
        
        ?>
        
        <a href="http://localhost/test/?control=utilisateur&action=logout"> déconnexion </a>
    
    </body>
</html>