 <?php
session_start();
 if(isset($_GET['control']) & isset ($_GET['action']))
    {
        $control=$_GET['control'];
        $action=$_GET['action'];
    }
    else
    {
        $control='utilisateur';
        $action='connexion_inscription';
    }
    require('controle/' . $control . '.php');
    $action();
?>