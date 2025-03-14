<?php
       require_once '../config/config.php'; //je fais appel au fichier config.php
       require_once 'partial/header.php'; //je fais appel au fichier header.php
      
?>

<main>

<p>Achat du livre: Les recettes</p>


<!--je crée un formulaire qui envoie les données vers la page payment-confirmation.php et les données restent cachées de l'utilisateur-->

<div>
<form action="payment-confirmation.php" method="post"> 
	<label>CB number
		<input type="text" name="number">
	</label>
</div>

<div>
	<label>CCV
		<input type="text" name="ccv">
	</label>
</div>

	<input type="submit">

</form>

</main>

</body>
</html>