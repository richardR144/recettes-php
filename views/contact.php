<?php
       require_once '../config/config.php'; //je fais appel au fichier config.php
       require_once '../recipes-repository.php'; //je fais appel au fichier recipes-repository.php
       require_once 'partial/header.php'; //je fais appel au fichier header.php
      

?>


<main>

<h1>Connectez-vous !</h1>

<form action="contact-confirmation.php" method="get">  <!--je crée un formulaire qui envoie les données vers la page contact-confirmation.php-->
       <div>
              <label for="email">Email</label>
              <input type="email" id="email" name="email" required>
              <label for="password">Mot de passe</label>
              <input type="password" id="password" name="password" required>
              <label for="message">Message</label>
              <textarea id="message" name="message" required></textarea>
       </div>
              <button type="submit">Envoyer</button>
</form>
</main>
</body>
</html>