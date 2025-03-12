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
 //je parcours le tableau de recettes et si la recette est publiée, j'affiche les informations de la recette
foreach ($recipes as $recipe) {   
    if ($recipe["isPublished"] === true) { ?>  
        <article class="recipe">
            <h2><?php echo $recipe["title"]; ?></h2>
            <img src="<?php echo $recipe["image"]; ?>" alt="<?php echo $recipe["title"]; ?>">
            <p><?php echo $recipe["description"]; ?></p>
            <p>Publié le :<?php echo (new DateTime($recipe["publishedDate"]))->format('Y-m-d H:i:s'); ?></p> <!--je formate la date de publication-->
            <a href="show-recipe.php">Voir la recette</a>  
        </article>
<?php
    }
}
?>
</main>
</body> 
</html>
