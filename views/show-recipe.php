<?php
       require_once '../config/config.php'; //je fais appel au fichier config.php
       require_once '../recipes-repository.php'; //je fais appel au fichier recipes-repository.php
       require_once 'partial/header.php'; //je fais appel au fichier header.php
       require_once 'partial/main.php'; //je fais appel au fichier main.php
       require_once 'partial/footer.php'; //je fais appel au fichier footer.php

       $index = $_GET['index']; //je créais une variable index qui récupère l'index de la recette
?>
	<main>
  <h2>Les recettes</h2>
		<article>
			<h2><?php echo $recipes[$index]["title"]; ?></h2>
			<img src="<?php echo $recipes[$index]['image']; ?>" alt="<?php echo $recipe['title']; ?>" />
			<p><?php echo $recipes[$index]["description"]; ?></p>
      <p>Publié le : <?php echo (new DateTime($recipes[$index]["publishedDate"]))->format('Y-m-d H:i:s'); ?></p>
		</article>

	</main>

  </body>
</html>