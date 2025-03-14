<?php
       require_once '../config/config.php'; //je fais appel au fichier config.php
       require_once 'partial/header.php'; //je fais appel au fichier header.php
       require_once '../recipes-repository.php';
             
       $message = null;

	if ($_SERVER["REQUEST_METHOD"] === "POST") {

		if (isset($_POST["title"]) &&
			isset($_POST["description"]) &&
			isset($_POST["image"]) &&
			strlen($_POST["title"]) > 3 &&
			strlen($_POST["description"]) > 10 &&
			strlen($_POST["image"]) > 5
		) {
            //ajouter la recette dans le tableau de recette
            $newRecipe = [
                "title" => $_POST["title"],
                "description" => $_POST["description"],
                "publishedDate" => new DateTime(),
                "isPublished" => true,
                "image" => $_POST["image"]
            ];

            array_push($recipes, $newRecipe);
        
			$message = "Recette créée";
		} else {
			$message = "Tous les champs ne sont pas renseignés !";
		}
	}
    
    ?>

    <main>
        <h1>Nouvelle recette</h1>

        <h2><?php echo $message?></h2>

    <div>
        <form action="create-recipe.php" method="post">
    <div>
	<label>titre
		<input type="text" name="title">
	</label>
</div>
<div>
	<label>description
        <input type="text" name="description">
	</label>
</div>
<div>
	<label>image
		<input type="text" name="image">
	</label>
</div>

	<button type="submit">Créez</button>

        <p><?php echo $message; ?></p>

        <?php 
        foreach($recipes as $index => $recipe) { ?>

		<article class="recipe">
			<h2 class="recipe-title"><?php echo $recipe["title"]; ?></h2>
		</article>

	<?php } ?>   

    </main>
</body>
</html>