<?php

include ('./config.php');

try {
  $stmt = $conn->prepare("SELECT * FROM taches");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  print_r($result);
  
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

?>