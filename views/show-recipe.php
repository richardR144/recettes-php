<?php
       require_once '../config/config.php'; //je fais appel au fichier config.php
       require_once '../recipes-repository.php'; //je fais appel au fichier recipes-repository.php
       require_once 'partial/header.php'; //je fais appel au fichier header.php
      

       $index = $_GET['index']; //je créais une variable index qui récupère l'index de la recette
       var_dump($index); //je vérifie que l'index est bien récupéré
?>
	<main>
  <?php if (!array_key_exists($index, $recipes)) { ?>

<h2>404 : recette non trouvée</h2>

<?php } else { ?>

  <h2>Les recettes</h2>
		<article>
			<h2><?php echo $recipes[$index]["title"]; ?></h2>
			<img src="<?php echo $recipes[$index]['image']; ?>" alt="<?php echo $recipe['title']; ?>" />
			<p><?php echo $recipes[$index]["description"]; ?></p>
      <p>Publié le : <?php echo (new DateTime($recipes[$index]["publishedDate"]))->format('Y-m-d H:i:s'); ?></p>
		</article>
<?php } ?>
    <?php require_once 'partial/footer.php'; ?>
	</main>
</body>
</html>
