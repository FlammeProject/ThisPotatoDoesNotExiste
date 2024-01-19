<?php
if (isset($_GET['dossier'])) {
    $dossier = $_GET['dossier'];
    $fichiers = scandir($dossier);
    $fichiers = array_filter($fichiers, function($fichier) {
        return pathinfo($fichier, PATHINFO_EXTENSION) === 'png';
    });

    echo json_encode(array_values($fichiers));
} else {
    echo json_encode([]);
}
?>
