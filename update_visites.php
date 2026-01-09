<?php
// Lire les données envoyées depuis le JS
$data = json_decode(file_get_contents('php://input'), true);
if(isset($data['compteur'])){
    // Écrire le nouveau compteur dans le fichier JSON
    file_put_contents('visites.json', json_encode($data));
}
?>
