<?php
include '/api/bd/bd.php';
echo '
<!DOCTYPE html>
<html lang="en">
<head>
  <title>bilbioteca Online v1.0</title>
  <meta charset="utf-8">
  <link rel="icon" href="favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<a href="#" class="pull-left"><img src="logo.png" id="logo" width=30%> libraryNet pHp - 1.0</a>
  <ul class="pagination">
  <li><a href="/librarynet/">Acasa</a></li>
  <li><a href="afisaretoatecartile.php">Vezi toate cartile</a></li>
  <li><a href="inchiriaza.php">Cauta carte</a></li>
  <li><a href="returneaza.php">Returneaza carte</a></li>
  <li><a href="showallunreturned.php">Carti nereturnate</a></li>
  <li><a href="showallrents.php">Toate inchirierile</a></li>
  <li><a href="adauga.php">Adauga carte</a></li>
  <li><a href="editeaza.php">Editeaza carte</a></li>
  <li><a href="sterge.php">Sterge carte</a></li>
</ul>

  </head>
<body>


';





?>