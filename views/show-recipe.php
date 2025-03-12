<?php
       require_once '../config/config.php'; //je fais appel au fichier config.php
       require_once '../recipes-repository.php'; //je fais appel au fichier recipes-repository.php
       require_once 'partial/header.php'; //je fais appel au fichier header.php
       require_once 'partial/main.php'; //je fais appel au fichier main.php
       require_once 'partial/footer.php'; //je fais appel au fichier footer.php
?>
	<main>
  <h2>Les recettes</h2>
		<article>
			<h2><?php echo $recipes[0]["title"]; ?></h2>
			<img src="<?php echo $recipes[0]['image']; ?>" alt="<?php echo $recipe['title']; ?>" />
			<p><?php echo $recipes[0]["description"]; ?></p>
      <p>Publié le : <?php echo (new DateTime($recipes[0]["publishedDate"]))->format('Y-m-d H:i:s'); ?></p>
		</article>

	</main>

  </body>
</html>