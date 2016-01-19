<?php include "films.php" ?>
<?php $film = $films[$_GET["id"]] ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Web School Factory P20</title>
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

  <style>
    .img-mov {height: 300px;}
    .col-md-3 {margin-bottom: 15px;}
  </style>
</head>
<body>
  <div class="col-12 col-md-12">
    <h1>Cours PHP </h1>
    <hr />
    Retour à la page d'accueil: <a href="index.php">Accueil</a>
    <hr />
    <div class="container">
      <div class="row">
        <h4>Movie - <?php echo $film["Nom"] ?></h4>
        <hr>
        <div class="container">
          <div class="row">
              <div class="col-md-8">
                <img src="<?php echo $film["Poster"] ?>" class="img-thumbnail">
              </div>
              <div class="col-md-4">
                <h4><strong><?php echo $film["Nom"] ?></strong> <span class="line2">(<?php echo $data["Like"] ?> Likes)</span></h4>
                <div class="line2">
                  <?php echo $film["Annee"] ?> (<?php echo $film["Durée"] ?>)<br>
                </div>
                <hr>
                <h5><strong>Réalisateur</strong></h5>
                <div><div class="line2"><?php echo $film["Réalisateur"] ?></div></div>
                <h5><strong>Acteurs</strong></h5>
                <div><div class="line2"><?php echo join($film["Acteurs"], ", ") ?></div></div>
                <hr>
                <h5><strong>Genres</strong></h5>
                <div><div class="line2"><?php echo join($film["Genres"], ", ") ?></div></div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>