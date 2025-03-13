<?php
require_once '../config/config.php'; //je fais appel au fichier config.php
require_once '../recipes-repository.php'; //je fais appel au fichier recipes-repository.php
require_once 'partial/header.php'; //je fais appel au fichier header.php

?>

<?php  // On pourrait aussi faire comme ça pour que le code soit plus lisible et mieux maintenu !! 
      //je crée une fonction pour afficher une erreur 404
  function show404Error()
{
  http_response_code(404);
  echo "<h2>404 : recette non trouvée</h2>";
  echo '<p><a href="/">Retour à la liste des recettes</a></p>';
  exit();
} ?>

<?php //je vérifie si l'index existe dans l'URL
    if (!array_key_exists("index", $_GET)) {   //si l'index n'existe pas dans l'URL
    show404Error();
                             //alors je fais appel à la fonction show404Error
  } else {
    $index = $_GET["index"];  //je récupère l'index dans l'URL
}

// je vérifie si la recette existe dans le tableau $recipes
      if (!array_key_exists($index, $recipes)) { //si l'index n'existe pas dans le tableau de recettes
      show404Error();                           //alors je fais appel à la fonction show404Error
    } else {
// je récupère la recette
      $recipe = $recipes[$index]; 
}?>

<main>
  <h2>Les recettes</h2>
  <article>
    <h2><?php echo $recipes[$index]["title"]; ?></h2>
    <img src="<?php echo $recipes[$index]['image']; ?>" alt="<?php echo $recipe['title']; ?>" />
    <p><?php echo $recipes[$index]["description"]; ?></p>
    <p>Publié le : <?php echo (new DateTime($recipes[$index]["publishedDate"]))->format('Y-m-d H:i:s'); ?></p>
  </article>

  <?php require_once 'partial/footer.php'; ?>
</main>
</body>
</html>