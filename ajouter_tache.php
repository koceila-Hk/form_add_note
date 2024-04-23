<?php
// Récupérer les données du formulaire
$nouvelle_tache = $_POST['nouvelle_tache'];


include('./config.php');

$stmt = $conn -> prepare("INSERT INTO taches (nom) VALUES (:nom)");
$stmt -> bindParam(":nom", $nouvelle_tache);

if ($stmt->execute()) {
    echo "Nouvelle tâche ajoutée avec succès";
} else {
    echo "non non";
}




