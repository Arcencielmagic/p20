<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Web School Factory P20</title>
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
</head>
<body>
  <div class="col-12 col-md-12">
    <h1>Cours PHP</h1>
    <hr />
    <form method="post" action="">
      <h5>Formulaire</h5>
      <input class=""type="text" name="nom" />
      <button type="submit">Soumettre</button>
    </form>
    <hr />
    <div>
      <p>
        <strong><?php echo 'Données dans $_GET';?><strong><br>
        <pre><?php print_r($_GET)?></pre>
      </p>
      <p>
        <strong><?php echo 'Données dans $_POST';?><strong><br>
        <pre><?php print_r($_POST)?></pre>
      </p>
      <p>
        <strong><?php echo 'Données dans $_REQUEST';?><strong><br>
        <pre><?php print_r($_REQUEST)?></pre>
      </p>
      <p>
        <strong><?php echo 'Données dans $_SERVER';?><strong><br>
        <pre><?php print_r($_SERVER)?></pre>
      </p>
    </div>
  </div>
</body>
</html>