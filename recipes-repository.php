<?php

$recipes = [
    [
        "title" => "Apple Pie",  //la clé "title" et la 2 c'est une valeur "apple pie"
        "description" => "A delicious homemade apple pie with a crispy shortcrust pastry.",
        "publishedDate" => "2024-03-01",
        "isPublished" => true,
        "image" => "https://upload.wikimedia.org/wikipedia/commons/4/4b/Apple_pie.jpg"
    ],
    [
        "title" => "Pasta Carbonara",
        "description" => "Tasty pasta with a creamy sauce made of egg yolk, parmesan, and bacon.",
        "publishedDate" => "2024-03-01",
        "isPublished" => true,
        "image" => "https://adc-dev-images-recipes.s3.eu-west-1.amazonaws.com/11874_pate_carbo_6_bd.jpg"
    ],
    [
        "title" => "Chicken Curry",
        "description" => "Tender chicken simmered in a spicy and flavorful curry sauce.",
        "publishedDate" => "2024-03-01",
        "isPublished" => false,
        "image" => "https://www.allrecipes.com/thmb/FL-xnyAllLyHcKdkjUZkotVlHR8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/46822-indian-chicken-curry-ii-DDMFS-4x3-39160aaa95674ee395b9d4609e3b0988.jpg"
    ],
    [
        "title" => "Caesar Salad",
        "description" => "A fresh and crispy salad with grilled chicken, parmesan, and Caesar dressing.",
        "publishedDate" => "2024-03-01",
        "isPublished" => true,
        "image" => "https://www.allrecipes.com/thmb/mXZ0Tulwn3x9_YB_ZbkiTveDYFE=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/229063-Classic-Restaurant-Caesar-Salad-ddmfs-4x3-231-89bafa5e54dd4a8c933cf2a5f9f12a6f.jpg"
    ],
    [
        "title" => "Chocolate Brownie",
        "description" => "A rich and fudgy chocolate brownie, perfect for sweet lovers.",
        "publishedDate" => "2024-03-01",
        "isPublished" => false,
        "image" => "https://thecookiedoughdiaries.com/wp-content/uploads/2024/06/HERO-triple-chocolate-brownies-5-FEATURED.jpg"
    ]
];

function createRecipe ($title, $description, $image){   
    global $recipe; //utiliser la fonction global du tableau $recipe
    $newRecipe = [   //je créais un nouveau tableau associatif pour la nouvel recette
        "title" => $title,  //avec son titre, etc
        "description" => $description,
        "publishedDate" => new DateTime(),  //Date et heure actuelles
        "isPublished" => true,     //la recette est publiée par défaut
        "image" => $image
    ];
    //J'ajoute la nouvelle recette au tableau global $recipes
    array_push($recipes, $newRecipe);
}

?>