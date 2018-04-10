
<html>
    <head data-brackets-id='2'>
        <title data-brackets-id='3'>Accueil</title>
        <meta data-brackets-id='4' charset = "utf-8">
        <link type="text/css" rel="stylesheet" href="vue/css/style.css"/>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body data-brackets-id='5'>
        <div align ="center">
            <div id="connexion" >
            <form method="post" action="" >
                <table>
                     <tr>
                         <td>
                            <label class= "lableid" for="co_id">Adresse e-mail ou mobile</label>
                        </td>
                        <td>
                            <label class= "lableid" for="co_password">Mot de passe</label>
                        </td>
                        
                       </tr>
                
                    <tr>
                         <td>
                            <input class="w3-border" type="text" placeholder=" Votre login" id= "co_id" name = "co_id">
                        </td>
                        <td>
                            <input class="w3-border" type="password" placeholder=" Votre mot de passe" id= "co_password" name = "co_password">
                        </td>
                        <td>
                            <input  type="submit" id= "button" name ="formConnexion" value="Connexion"/>
                        </td>
                       </tr>
                </table>
                <?php 
                if(!empty($_POST['erreur2'])){
                    echo $_POST['erreur2'];
                }
                ?>
            </form>
            </div>
            <div id="inscription" style="width : 23em">
            
                <form method = "post" action ="">

                    <table >

                        <tr>
                           <td colspan="2">
                                <p >Inscription <br/>
                               C'est gratuit (et ça le restera toujours)<br/> <br/></p>

                            </td>

                       </tr>

                       <tr>
                           <td>
                                <input class="w3-input w3-border w3-round" type="text" placeholder=" Prénom" id= "prenom" name = "prenom">
                            </td>
                            <td>
                                <input class="w3-input w3-border w3-round" type="text" placeholder=" Nom de famille" id= "nom" name = "nom">
                            </td>
                       </tr>
                       <tr>
                           <td colspan="2">
                                <input class="w3-input w3-border w3-round" type="text" placeholder=" Numéro de mobile ou email" id= "id" name = "id">
                            </td>
                       </tr>
                       <tr>
                           <td colspan="2">
                                <input  class="w3-input w3-border w3-round" type="text" placeholder=" Confirmer numéro de mobile ou email" id= "id2" name = "id2">
                            </td>
                       </tr>
                        <tr>
                           <td colspan="2">
                                <input  class="w3-input w3-border w3-round" type="password" placeholder=" Nouveau mot de passe" id= "password" name = "password">
                            </td>
                       </tr>
                        <tr>
                           <td colspan="2">
                                Date de naissance :
                            </td>
                       </tr>
                        <tr>
                           <td colspan="2">
                            <select name="day">

                               <option> Jour</option>
                                <?php
                                    for($i = 1; $i<=31 ; $i++){
                                        echo "<option value= '$i'>". $i ."</option>";
                                    }   
                                ?>

                            </select>
                            <select name="month">
                               <option> Mois</option>
                                <?php
                                    for($i = 1; $i<=12 ; $i++){
                                        echo "<option value= '$i'>". $i ."</option>";
                                    }   
                                ?>
                            </select>
                            <select name="year">
                               <option> Année</option>
                                <?php
                                    for($i = 2018; $i>=1905 ; $i--){
                                        echo "<option value= '$i'>". $i ."</option>";
                                    }   
                                ?>
                            </select>
                            </td>
                       </tr>
                        <tr>
                           <td colspan="2">

                                  <input type="radio" name="gender" value="femme" />
                                <label>Femme</label>

                                  <input type="radio" name="gender" value="homme" />
                               <label>Homme</label>
                            </td>
                       </tr>
                        
                        <tr>
                           <td colspan="2">
                                <p id="texte"> En cliquant sur Créer un compte, vous acceptez nos Conditions et indiquez que vous avez lu notre Politique d’utilisation des données, y compris notre Utilisation des cookies. Vous pourrez recevoir des notifications par texto de la part de Facebook et pouvez vous désabonner à tout moment.</p>
                            </td>
                       </tr>
                        <tr>
                           <td colspan="2">
                                 <input  type="submit" id="button2" name ="formInscription" value="Inscription"/>
                            </td>
                       </tr>
                    </table>
                   
                </form>
                <?php 
                if(!empty($_POST['erreur'])){
                    echo $_POST['erreur'];
                }
                ?>
            </div>
            
        </div>
    
    </body>
</html>