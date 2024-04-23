<?php

include ('./config.php');

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>nom</th></tr>";

try {
  $stmt = $conn->prepare("SELECT id, nom FROM taches");
  $stmt->execute();

  // set the resulting array to associative
   $result = $stmt->fetchAll();
  print_r($result[0]["nom"]);
  
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

$conn = null;
echo "</table>";
?>