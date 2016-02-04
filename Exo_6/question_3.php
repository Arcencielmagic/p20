<?php

// Récupération des fonctions
require_once("config.php");
require_once("functions.php");

$acteurs = array_linearize(get_all_items("Acteurs"));

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
    <h1>Question 3</h1>
    <hr />
    <div class="container">
      <ul class="row">
        <?php foreach($acteurs as $acteur): ?>
          <li class="col-md-12"><?php echo $acteur ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</body>
</html>
