<?php
       require_once '../config/config.php'; //je fais appel au fichier config.php
       require_once '../recipes-repository.php'; //je fais appel au fichier recipes-repository.php
       require_once 'partial/header.php'; //je fais appel au fichier header.php
      
        $emailSent = $_GET["email"];     //je créais mes variabless et je récupère les données envoyées par le formulaire
        $passwordSent = $_GET["password"]; //
        $messageSent = $_GET["message"];

?>

<main>
    <h1>Merci <?php echo $emailSent; ?> ! </h1>  <!--j'affiche l'email de l'utilisateur-->
    <p><?php echo $passwordSent;?></p>
    <p><?php echo $messageSent;?></p>
    <p>a bien été envoyé à un admin</p>
</main>
</body>
</html>
