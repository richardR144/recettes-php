<?php
require_once '../config/config.php'; //je fais appel au fichier config.php


if (!array_key_exists("email", $_GET) || !array_key_exists("password", $_GET) || !array_key_exists("message", $_GET)) { //je vérifie si les données email, password, message ont bien été envoyées
    header("Location: contact.php", replace: true, response_code: 301); //si les données n'ont pas été envoyées, je redirige l'utilisateur vers la page contact.php
}

$emailSent = $_GET["email"];     //je créais mes variabless et je récupère les données envoyées par le formulaire
$passwordSent = $_GET["password"]; //
$messageSent = $_GET["message"];

require_once 'partial/header.php'; //je fais appel au fichier header.php

?>

<main>
    <h1>Merci <?php echo $emailSent; ?> ! </h1> <!--j'affiche l'email de l'utilisateur-->
    <p><?php echo $passwordSent; ?></p>
    <p><?php echo $messageSent; ?></p>
    <p>a bien été envoyé à un admin</p>
</main>
</body>

</html>