<?php 
$resultats = array();
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['mot']))
{
    $mot = $_POST['mot'];
    $fp = fopen('chansons.txt', 'r') or die('Ouverture en lecture de "' . FICHIER . '" impossible !');
while (!feof($fp)) {
    $ligne = fgets($fp, 1024);
    if (preg_match('|\b' . preg_quote($_POST['mot']) . '\b|i', $ligne)) {
        $resultats[] = $ligne;
    }
}
fclose($fp);

}

else{
    $mot = null;
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Imagine Dragons</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="Style/bonusw5.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
<body>

<section class="header">
    <video autoplay loop muted>
        <source src="Ressource/Extrait Ennemy 2.mp4" type="video/mp4">
    </video>
    <a href="accueil.html"><img src="Ressource/Imagine-Dragons-Logo.png" alt="logo"></a>
    <section class="header-right">
        <a href="biographie.html">Biographie</a>
        <a href="discographie.html">Discographie</a>
        <a href="bonusw5.html">Chercher un titre</a>
        <a href="titre+.html">Ajouter un titre</a>
    </section>
</section>

<section class="form">
<h2>Recherche d'une chanson</h2>
    <form method="post"> 
      <input type="text" name="mot" class="search" placeholder="Recherchez ici !">
      <button type="submit" name="submit">Rechercher</button>
    </form>
</section>

<section class="result">
    <?php
        if ($mot ?? die) {
            echo "<h3>" . $mot . " a été trouvé ! </h3>" ;
        } else {
            echo("<h3> Ce nom n'est pas présent ! </h3>");
        }
    ?>
</section>

</body>
</html>