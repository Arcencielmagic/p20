<?php include "films.php" ?>
<?php  $like = $_GET["like"];?>

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
    <h1>Cours PHP</h1>
    <hr />
    <form method="get" action="">
      <h5>Filtre</h5>
      <input placeholder="like" type="text" name="like" />
      <button type="submit">Soumettre</button>
    </form>
    <hr />

    <div class="container">
      <div class="row">
        <?php foreach($films as $key => $film) { ?>
          <?php if($film["Like"] > $like) { ?>
            <div class="col-md-3">
              <a href="page_film.php?id=<?php echo $key ?>">
                <img src="<?php echo $film["Poster"] ?>" class="img-mov img-thumbnail">
                <div><?php echo $film["Nom"] ?></div>
                <div class="line2">
                  <?php echo $film["Annee"] ?> (<?php echo $film["Durée"] ?>)<br>
                </div>
              </a>
            </div>
          <?php } ?>
        <?php } ?>
      </div>
    </div>
  </div>
</body>
</html>