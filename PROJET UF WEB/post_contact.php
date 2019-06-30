<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors' , TRUE);
$errors= []; //tableau d erreurs pour vérifier qeu tout va pour procéder a l envois 


if(!array_key_exists('name', $_POST ) || $_POST['name'] == ''){

    $errors['name'] = "Vous n'avez pas renseigné votre nom";
    
}


if(!array_key_exists('email', $_POST ) ||$_POST['email'] == '' || !filter_var($_POST ['email'], FILTER_VALIDATE_EMAIL)){

    $errors['email '] = "Vous n'avez pas renseigné un email valide";
}



if(!array_key_exists('message', $_POST ) ||$_POST['message'] == ''){

    $errors['message'] = "Vous n'avez pas renseigné votre message";
    
}





if(!empty($errors)){                //en cas d erreur renvois vers la page precedente 
    
    $_SESSION['errors'] = $errors;
     $_SESSION['inputs'] = $_POST;
}else{  
     include("bdd.php");
        try{
        $sql = $pdo->prepare("INSERT INTO contact(`name`, `email`, `message`) VALUE (:nom, :email, :mess)");
        $sql->execute(array(':nom' => $_POST["name"], ':mess' => $_POST["message"], ':email' => $_POST["email"]));
        //var_dump($_POST);
        
    } catch (PDOException $e){
        echo $e->getCode() . "<br/>";
        echo $e->getMessage() . "<br/>";
    }
$_SESSION['Success'] = 1;  //indiquer a l utilisateur que tout c'est bien passé 
$message = ($_POST['message']);
$headers = "FROM:".$_POST['email']." ";
$to = 'contact@hugo-cozzolino.fr';
$subject = "NAME ".$_POST['name']." ";

htmlspecialchars($message);
htmlspecialchars($headers);
mail( $to, $headers, $message , $subject );
}
header('Location: index.php#contact');


?>

