<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function check($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlentities($data);
        return $data;
    }

    $mail = check($_POST['mail']);
    $nomStructure = check($_POST['nom_structure']);
    $typeStructure = check($_POST['type_structure']);
    $pays = check($_POST['pays']);
    $ville = check($_POST['ville']);
    $adresse = check($_POST['adress']);
    $contact = check($_POST['contact']);
    $site = check($_POST['site']);
    $phase = check($_POST['phase']);
    $annee = check($_POST['anneeActivite']);
    $program = isset($_POST['program']) ? check($_POST['program']) : "";
    $cohortes = isset($_POST['cohortes']) ? check($_POST['cohortes']) : "";
    $coach = isset($_POST['coach']) ? check($_POST['coach']) : "";
    $learn = isset($_POST['learn']) ? check($_POST['learn']) : "";
    $motDePasse = sha1(check($_POST['motDePasse']));
    $motDePasse1 = sha1(check($_POST['motDePasse1']));

    if ($motDePasse == $motDePasse1) {
        $cle = rand(100000, 900000);
        require 'ConnectDB.php';
        $connect = DataBase::connect();
        $requete = $connect->prepare("
            INSERT INTO users_saei(nomStructure, typeStructure, pays, ville, adresse, contact, site, phaseAccompagnement, anneeActivite, program, cohortes, coach, learn, cle)
            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ");
        $requete->execute(array($nomStructure, $typeStructure, $pays, $ville, $adresse, $contact, $site, $phase, $annee, $program, $cohortes, $coach, $learn, $cle));

        // Envoi de l'email de confirmation
        $to = $mail;
        $subject = 'Confirmation de votre compte SAEI-MANAGER';
        $message = "
        <html>
        <head>
            <title>Confirmation de votre compte SAEI-MANAGER</title>
        </head>
        <body>
            <p>Bonjour,</p>
            <p>Merci de vous être inscrit sur notre plateforme SAEI-MANAGER.</p>
            <p>Veuillez cliquer sur le lien ci-dessous pour confirmer votre compte :</p>
            <p><a href='http://www.example.com/confirmation.php?cle=" . urlencode($cle) . "&email=" . urlencode($mail) . "'>Confirmer mon compte</a></p>
            <p>Si le lien ne fonctionne pas, copiez et collez l'URL suivante dans votre navigateur :</p>
            <p>http://www.example.com/confirmation.php?cle=" . urlencode($cle) . "&email=" . urlencode($mail) . "</p>
            <p>Merci,</p>
            <p>L'équipe SAEI-MANAGER</p>
        </body>
        </html>
        ";

        // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // En-têtes additionnels
        $headers .= 'From: noreply@saei-manager.com' . "\r\n";

        if (mail($to, $subject, $message, $headers)) {
            echo "Un email de confirmation a été envoyé à " . $mail . ". Veuillez vérifier votre boîte de réception.";
        } else {
            echo "L'envoi de l'email a échoué.";
        }
    } else {
        $error = "Les mots de passe ne sont pas identiques. Veuillez réessayer.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEBUTER -- SAEI-MANAGER</title>
    <!-- Lien CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Lien Bootstrap5 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Lien Font-Awesome -->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">

    <!-- Lien icone WSA -->
    <link rel="icon" href="images/logo.png">
</head>
<style>
    a {
        color: black;
        text-decoration: none;
    }
    .btn-orange {
        background-color: #F76300;
        color: white;
    }
    .btn-green {
        background-color: #00A65A;
        color: white;
    }
    .btn-green:hover {
        background-color: transparent;
        color: #00A65A;
        border: 2px solid #00A65A;
    }
    .btn-orange:hover {
        background-color: transparent;
        color: #F76300;
        border: 2px solid #F76300;
    }
    .text-orange {
        color: #F76300;
    }
    .text-green {
        color: #00A65A;
    }
    .bg-green {
        background-color: #00A65A;
    }
    .border-bottom-orange {
        border-bottom: 2px solid #F76300;
    }
    .border-orange {
        border: 2px solid #F76300;
    }
    .bg-select {
        background-color: #FFFAFA;
    }
    .bg-gray {
        background-color: #D9D9D9;
    }
    .d-meme-icone {
        width: 45px;
        height: 45px;
    }
    .cursor {
        cursor: pointer;
    }
    .cadrant-index {
        border: 10px solid #000000;
        opacity: 0.5;
    }
    .cadrant-green {
        border: 5px solid #00A65A;
        opacity: 0.8;
    }
    .text-justify {
        text-align: justify;
    }
    .hideElement {
        display: none;
    }
</style>
<body class="p-5">
    <section class="container my-5">
        <div class="row">
            <form action="test.php" method="post" id="formulaire">
                <legend class="text-center">CREER VOS IDENTIFIANTS DE CONNEXION</legend>
                <?php if (isset($error)): ?>
                    <p class="alert alert-danger">
                        <?= $error ?>
                    </p>
                <?php endif ?>
                <div class="row hideElement">
                    <div class="my-3">
                        <label for="nom_structure" class="form-label">Nom de la structure: </label>
                        <input type="text" name="nom_structure" value="<?= $_POST['nom_structure'] ?? '' ?>" id="nom_structure" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="type_structure" class="form-label">Type de la structure: </label>
                        <input type="text" name="type_structure" value="<?= $_POST['type_structure'] ?? '' ?>" id="type_structure" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="pays" class="form-label">Pays: </label>
                        <input type="text" name="pays" value="<?= $_POST['pays'] ?? '' ?>" id="pays" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="ville" class="form-label">Ville: </label>
                        <input type="text" name="ville" value="<?= $_POST['ville'] ?? '' ?>" id="ville" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="adress" class="form-label">Adresse: </label>
                        <input type="text" name="adress" value="<?= $_POST['adress'] ?? '' ?>" id="adress" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="contact" class="form-label">Contact: </label>
                        <input type="tel" name="contact" value="<?= $_POST['contact'] ?? '' ?>" id="contact" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="site" class="form-label">Site Internet: </label>
                        <input type="text" name="site" value="<?= $_POST['site'] ?? '' ?>" id="site" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="anneeActivite" class="form-label">Année d'Activité(s): </label>
                        <input type="text" name="anneeActivite" value="<?= $_POST['anneeActivite'] ?? '' ?>" id="anneeActivite" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="phase" class="form-label">Phase d'Accompagnement: </label>
                        <input type="text" name="phase" value="<?= $_POST['phase'] ?? '' ?>" id="phase" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="program" class="form-label">Programme: </label>
                        <input type="text" name="program" value="<?= $_POST['program'] ?? '' ?>" id="program" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="cohortes" class="form-label">Cohortes: </label>
                        <input type="text" name="cohortes" value="<?= $_POST['cohortes'] ?? '' ?>" id="cohortes" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="coach" class="form-label">Coach: </label>
                        <input type="text" name="coach" value="<?= $_POST['coach'] ?? '' ?>" id="coach" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="learn" class="form-label">Learn: </label>
                        <input type="text" name="learn" value="<?= $_POST['learn'] ?? '' ?>" id="learn" class="form-control border border-dark">
                    </div>
                </div>
                <div class="my-3">
                    <label for="mail" class="form-label">Mail: </label>
                    <input type="email" name="mail" id="mail" class="form-control border border-dark" required>
                </div>
                <div class="my-3">
                    <label for="motDePasse" class="form-label">Mot De Passe: </label>
                    <input type="password" name="motDePasse" id="motDePasse" class="form-control border border-dark" required>
                </div>
                <div class="my-3">
                    <label for="motDePasse1" class="form-label">Confirmer le mot de passe: </label>
                    <input type="password" name="motDePasse1" id="motDePasse1" class="form-control border border-dark" required>
                </div>
                <div class="my-5 text-end">
                    <button name="submit1" class="btn btn-green rounded-0 px-4">CREER</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
