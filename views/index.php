<?php
       require_once '../config/config.php'; //je fais appel au fichier config.php
       require_once '../recipes-repository.php'; //je fais appel au fichier recipes-repository.php
       require_once 'partial/header.php'; //je fais appel au fichier header.php
       require_once 'partial/main.php'; //je fais appel au fichier main.php
       require_once 'partial/footer.php'; //je fais appel au fichier footer.php

?>


<main>
    
<h2>Les recettes</h2>
 
 <?php 
 
foreach ($recipes as $index => $recipe) {   //je parcours le tableau de recettes et je récupère l'index et la recette
    if ($recipe["isPublished"] === true) { ?>  <!--si la recette est publiée alors j'affiche les informations de la recette-->
        <article class="recipe">
            <h2><?php echo $recipe["title"]; ?></h2>   <!--j'affiche le titre de la recette-->
            <img src="<?php echo $recipe["image"]; ?>" alt="<?php echo $recipe["title"]; ?>"> <!--j'affiche l'image de la recette-->
            <p><?php echo $recipe["description"]; ?></p>  <!--j'affiche la description de la recette-->
            <p>Publié le :<?php echo (new DateTime($recipe["publishedDate"]))->format('Y-m-d H:i:s'); ?></p> <!--je formate la date de publication-->
            <a href="show-recipe.php?index=<?php echo $index; ?>">Voir la recette</a>   <!--je crée un lien pour voir la recette-->
        </article>
<?php
    }
}
?>
</main>
</body> 
</html>
