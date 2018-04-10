 <?php
    
    function connectToDb(){
    try
    {
        

        return $pdo = new PDO('mysql:host=localhost;dbname=stage;charset=utf8', 'root', 'root');    

        
    }
    catch (Exeption $e)
    {
        
        die('Erreur :' . $e->getMessage());
    }
    }
?>