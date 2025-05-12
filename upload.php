<?php
// par ilyes / mistral

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $targetDir = "users/";
    $fileExtension = strtolower(pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION));
    $targetFile = $targetDir . $username . '.' . $fileExtension;
    $uploadOk = 1;

    // Vérifier si le fichier est une image PNG
    if($fileExtension != "png") {
        echo "Désolé, seuls les fichiers PNG sont autorisés.";
        $uploadOk = 0;
    }

    // Vérifier si $uploadOk est défini à 0 par une erreur
    if ($uploadOk == 0) {
        echo "Désolé, votre fichier n'a pas été téléchargé.";
    // Si tout est ok, essayer de télécharger le fichier
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            // Rediriger vers la page d'accueil après le téléchargement réussi
            header("Location: /login.html");
            exit();
        } else {
            echo "Désolé, une erreur s'est produite lors du téléchargement de votre fichier.";
        }
    }
}
?>
