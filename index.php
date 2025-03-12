<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<?php

$recipes = [
    [
        "title" => "Apple Pie",
        "description" => "A delicious homemade apple pie with a crispy shortcrust pastry.",
        "publishedDate" => "2024-03-01",
        "isPublished" => true,
        "image" => "https://upload.wikimedia.org/wikipedia/commons/4/4b/Apple_pie.jpg"
    ],
    [
        "title" => "Pasta Carbonara",
        "description" => "Tasty pasta with a creamy sauce made of egg yolk, parmesan, and bacon.",
        "publishedDate" => "2024-02-15",
        "isPublished" => true,
        "image" => "https://adc-dev-images-recipes.s3.eu-west-1.amazonaws.com/11874_pate_carbo_6_bd.jpg"
    ],
    [
        "title" => "Chicken Curry",
        "description" => "Tender chicken simmered in a spicy and flavorful curry sauce.",
        "publishedDate" => "2024-03-05",
        "isPublished" => false,
        "image" => "https://www.allrecipes.com/thmb/FL-xnyAllLyHcKdkjUZkotVlHR8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/46822-indian-chicken-curry-ii-DDMFS-4x3-39160aaa95674ee395b9d4609e3b0988.jpg"
    ],
    [
        "title" => "Caesar Salad",
        "description" => "A fresh and crispy salad with grilled chicken, parmesan, and Caesar dressing.",
        "publishedDate" => "2024-01-25",
        "isPublished" => true,
        "image" => "https://www.allrecipes.com/thmb/mXZ0Tulwn3x9_YB_ZbkiTveDYFE=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/229063-Classic-Restaurant-Caesar-Salad-ddmfs-4x3-231-89bafa5e54dd4a8c933cf2a5f9f12a6f.jpg"
    ],
    [
        "title" => "Chocolate Brownie",
        "description" => "A rich and fudgy chocolate brownie, perfect for sweet lovers.",
        "publishedDate" => "2024-02-28",
        "isPublished" => false,
        "image" => "https://thecookiedoughdiaries.com/wp-content/uploads/2024/06/HERO-triple-chocolate-brownies-5-FEATURED.jpg"
    ]
];


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Recettes en php</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="about.php">A propos</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav> 
</header>
<main>
    
 <h1>Liste des recettes</h1> 
 
 <?php 
 //je parcoursle tableau de recettes et si la recette est publiée, j'affiche les informations de la recette
foreach ($recipes as $recipe) {   
    if ($recipe["isPublished"] === true) { ?>  
        <article class="recipe">
            <h2><?php echo $recipe["title"]; ?></h2>
            <img src="<?php echo $recipe["image"]; ?>" alt="<?php echo $recipe["title"]; ?>">
            <p><?php echo $recipe["description"]; ?></p>
            <p><?php echo $recipe["publishedDate"]; ?></p>
            <p><?php echo (new DateTime($recipe["publishedDate"]))->format('Y-m-d H:i:s'); ?></p> <!--je formate la date de publication-->
    </article>
<?php
    }
}
?>
</main>
</body> 
</html>
