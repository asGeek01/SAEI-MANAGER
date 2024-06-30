<?php
if (isset($_POST['submit'])) {
    // Dossier où les fichiers seront uploadés
    $uploadDir = 'uploads/';
    
    // Vérifie si le dossier existe, sinon le crée
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Chemin complet du fichier uploadé
    $uploadFile = $uploadDir . basename($_FILES['file']['name']);

    // Vérifie le type du fichier
    $fileType = mime_content_type($_FILES['file']['tmp_name']);
    if ($fileType !== 'application/pdf') {
        echo "Erreur : Le fichier doit être un PDF.";
        exit;
    }

    // Déplace le fichier depuis le répertoire temporaire vers le dossier de destination
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        echo "Le fichier a été uploadé avec succès.";
    } else {
        echo "Erreur lors de l'upload du fichier.";
    }
} else {
    echo "Aucun fichier sélectionné.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Upload de fichier PDF</title>
</head>
<body>
    <form action="verif.php" method="post" enctype="multipart/form-data">
        <label for="file">Choisir un fichier PDF :</label>
        <input type="file" name="file" id="file" accept="application/pdf">
        <input type="submit" name="submit" value="Uploader">
    </form>
</body>
</html>
