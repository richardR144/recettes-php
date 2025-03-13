<?php
    require_once('../config/config.php');
  
        $number = $_POST["number"];  //je récupère les données envoyées par le formulaire avec la méthode POST
        $ccv = $_POST["ccv"];        //idem

        if ($number === "123" && $ccv === "321") 
        {
	        $message = "Achat payé";

        } 
        else 
        {
	    $message = "Carte refusée, veuillez réessayer";
  }

        require_once('partial/header.php');
?>

    <main>
        <p><?php echo $message; ?></p>

    </main>
</body>
</html>