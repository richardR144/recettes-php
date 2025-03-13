<?php
require_once '../config/config.php'; //je fais appel au fichier config.php
require_once '../recipes-repository.php'; //je fais appel au fichier recipes-repository.php
require_once 'partial/header.php'; //je fais appel au fichier header.php

?>

<?php  // On pourrait aussi faire comme ça pour que le code soit plus lisible et mieux maintenu !! 
      //je crée une fonction pour afficher une erreur 404
  function show404Error()
{
  http_response_code(404);                                               //je change le code de statut de la réponse HTTP à 404
  echo "<h2>404 : recette non trouvée</h2>";                             //j'affiche un message d'erreur
  echo '<p><a href="index.php">Retour à la liste des recettes</a></p>';  //bon ça me retourne aux dossiers mais pas à la liste des recettes
  exit();  //je sors de la fonction
} ?>

<?php //je vérifie si l'index existe dans l'URL
    if (!array_key_exists("index", $_GET)) {   //si l'index n'existe pas dans l'URL
    show404Error();                            //alors je fais appel à la fonction show404Error
  } else {
    $index = $_GET["index"];                  //je récupère l'index dans l'URL/ $_Get = variable super globale permettant de récupérer un paramètre dans l'url
}                                             //et doit avoir une clé et une valeur et être précédé de "?" pour pouvoir être récupéré

// je vérifie si la recette existe dans le tableau $recipes
      if (!array_key_exists($index, $recipes)) { //si l'index n'existe pas dans le tableau de recettes
      show404Error();                           //alors je fais appel à la fonction show404Error
    } else {
// je récupère la recette de l'index
      $recipe = $recipes[$index]; 
}?>

<main>
  <h2>Les recettes</h2>
  <article>
    <h2><?php echo $recipes[$index]["title"]; ?></h2>
    <img src="<?php echo $recipes[$index]['image']; ?>" alt="<?php echo $recipe['title']; ?>" />
    <p><?php echo $recipes[$index]["description"]; ?></p>
    <p>Publié le : <?php echo (new DateTime($recipes[$index]["publishedDate"]))->format('Y-m-d H:i:s'); ?></p>  <!--je formate la date de publication-->
  </article>

  <?php require_once 'partial/footer.php'; ?>
</main>
</body>
</html>