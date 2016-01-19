<?php 

function send_email(){
  $destinataire = $_POST["destinataire"];
  $emetteur = $_POST["emetteur"];
  $objet = $_POST["objet"];
  $message = $_POST["message"];
  $headers = 'From: '. $emetteur . "\r\n" .
      'Reply-To: '. $emetteur . "\r\n" .
      'X-Mailer: PHP/' . phpversion();
  mail($destinataire, $objet, $message, $headers);
}

if($_SERVER["REQUEST_METHOD"] == 'POST') {
  // send_email();
}
?>

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
    <h1>Cours PHP - Formulaire</h1>
    <div class="col-12 col-md-12 row">
    <hr />
    <div class="col-6 col-md-6 row">
      <form method="post" action="">
        <h5>Contact</h5>
        <input placeholder="Destinataire" class="form-control" type="text" name="destinataire" /><br />
        <input placeholder="Émetteur" class="form-control" type="text" name="emetteur" /><br />
        <input placeholder="Objet" class="form-control" type="text" name="objet" /><br />
        <textarea rows="5" placeholder="Message" class="form-control" type="text" name="message" /></textarea><br />
        <button class="form-control" type="submit">Soumettre</button>
      </form>
    </div>
    </div>
    <div class="col-12 col-md-12 row">
      <hr />
    </div>
  </div>
</body>
</html>