<?php

// Récupération des fonctions
require_once("config.php");
require_once("functions.php");

$films = get_all_films();

?>

<!DOCTYPE>
<html>
<head>
  <title>PHP - P20</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>.img-mov {height: 300px;} .col-md-3 {margin-bottom: 15px;}</style>
</head>
<body>
  <div class="col-md-12">
    <h1>Question 1</h1>
    <hr />
    <div class="container">
      <div class="row">
        <?php foreach($films as $film): ?>
          <div class="col-md-3">
            <img src="<?php echo $film["Affiche"] ?>" class="img-mov img-thumbnail">
            <div><?php echo $film["Nom"] ?></div>
            <div class="line2">
              <?php echo $film["Année"] ?> (<?php echo $film["Durée"] ?>)<br>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</body>
</html>
