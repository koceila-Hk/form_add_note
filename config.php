<?php
// Récupérer les données du formulaire
// $nouvelle_tache = $_POST['nouvelle_tache'];


$servername = "localhost";
$username = "root";
$password = "";


try {
  $conn = new PDO("mysql:host=$servername;dbname=gestion tache", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully <br>";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}