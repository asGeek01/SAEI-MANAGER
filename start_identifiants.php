<!-- Vérification du mail, connexion à la base de donnée et envoie du mail de confirmation -->
<?php
    // session_start();
    // $nomStructure = $typeStructure = $pays = $ville = $adresse = $contact = $site = $phase = $annee = $fonction = null;

    // if(!empty($_POST) && isset($_POST)){
    //     $nomStructure = check($_POST['nom_structure']);
    //     $typeStructure = check($_POST['type_structure']);
    //     $pays = check($_POST['pays']);
    //     $ville = check($_POST['ville']);
    //     $adresse = check($_POST['adress']);
    //     $contact = check($_POST['contact']);
    //     $site = check($_POST['site']);
    //     $phase = check($_POST['phase']);
    //     $annee = check($_POST['anneeActivite']);
    //     $fonction = check($_POST['fonction']);
        
    // }
    
    // require "PHPMailerConfirmed/PHPMailerAutoload.php";

    // function smtpmailer($to, $from, $from_name, $subject, $body){
            // $mail = new PHPMailer();
            // $mail->IsSMTP();
            // $mail->SMTPAuth = true; 
    
            // $mail->SMTPSecure = 'ssl'; 
            // $mail->Host = 'smtp.gmail.com';
            // $mail->Port = 465;  
            // $mail->Username = 'jeanpierrehoundealo03@gmail.com';
            // $mail->Password = 'Jp510850349663@#$23';   
    
            //   $path = 'reseller.pdf';
            //   $mail->AddAttachment($path);
    
            // $mail->IsHTML(true);
            // $mail->From= 'jeanpierrehoundealo03@gmail.com';
            // $mail->FromName=$from_name;
            // $mail->Sender=$from;
            // $mail->AddReplyTo($from, $from_name);
            // $mail->Subject = $subject;
            // $mail->Body = $body;
            // $mail->AddAddress($to);
            // if(!$mail->Send())
            // {
            //     $error ="Please try Later, Error Occured while Processing...";
            //     return $error; 
            // }
            // else 
            // {
            //     $error = "Thanks You !! Your email is sent.";  
            //     return $error;
            // }
        // }
        
        // $to   = '';
        // $from = '';
        // $name = '';
        // $subj = 'PHPMailer 5.2 testing from DomainRacer';
        // $msg = 'This is mail about testing mailing using PHP.';
        
        // $error=smtpmailer($to,$from, $name ,$subj, $msg);

    function check($donnee){
        $donnee = trim($donnee);
        $donnee = stripslashes($donnee);
        $donnee = htmlentities($donnee);
        return $donnee;
    }
?>
<!DOCTYPE html>
<html lang="en">
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
    a{
        color: black;
        text-decoration: none;
    }
    .btn-orange{
        background-color: #F76300;
        color: white;
    }
    .btn-green{
        background-color: #00A65A;
        color: white;
    }
    .btn-green:hover{
        background-color: transparent;
        color: #00A65A;
        border: 2px solid #00A65A;
    }
    .btn-orange:hover{
        background-color: transparent;
        color: #F76300;
        border: 2px solid #F76300;
    }
    .text-orange{
        color: #F76300;
    }
    .text-green{
        color: #00A65A;
    }
    .bg-green{
        background-color: #00A65A;
    }
    .border-bottom-orange{
        border-bottom: 2px solid #F76300;
    }
    .border-orange{
        border: 2px solid #F76300;
    }
    .border-orange{
        border: 2px solid #F76300;
    }
    .bg-select{
        background-color: #FFFAFA;
    }
    .bg-gray{
        background-color: #D9D9D9;
    }
    .d-meme-icone{
        width: 45px;
        height: 45px;
    }
    .cursor{
        cursor: pointer;
    }
    .cadrant-index{
        border: 10px solid #000000;
        opacity: 0.5;
    }
    .cadrant-green{
        border: 5px solid #00A65A;
        opacity: 0.8;
    }
    .text-justify{
        text-align: justify;
    }
    .hideElement{
        display: none;
    }
</style>
<body class="p-5">
    <section class="container my-5">
        <div class="row">
            <form action="start_identifiants.php" method="post">
                <legend class="text-center">CREER VOS IDENTIFIANTS DE CONNEXION</legend>
                <div class="row hideElement">
                    <div class="my-3">
                        <label for="nom_structure" class="form-label">Nom de la structure: </label>
                        <input type="text" name="nom_structure" value="<?= $_POST['nom_structure'] ?>" id="nom_structure" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="type_structure" class="form-label">Type de la structure: </label>
                        <input type="text" name="type_structure" value="<?= $_POST['type_structure'] ?>" id="type_structure" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="pays" class="form-label">Pays: </label>
                        <input type="text" name="pays" value="<?= $_POST['pays'] ?>" id="pays" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="ville" class="form-label">Ville: </label>
                        <input type="text" name="ville" value="<?= $_POST['ville'] ?>" id="ville" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="adress" class="form-label">Adresse: </label>
                        <input type="text" name="adress" value="<?= $_POST['adress'] ?>" id="adress" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="contact" class="form-label">Contact: </label>
                        <input type="tel" name="contact" value="<?= $_POST['contact'] ?>" id="contact" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="site" class="form-label">Site Internet: </label>
                        <input type="text" name="site" value="<?= $_POST['site'] ?>" id="site" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="anneeActivite" class="form-label">Anne d'Activité(s): </label>
                        <input type="text" name="anneeActivite" value="<?= $_POST['anneeActivite'] ?>" id="anneeActivite" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="phase" class="form-label">Phase d'Accompagnement: </label>
                        <input type="text" name="phase" value="<?= $_POST['phase'] ?>" id="phase" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="program" class="form-label">Programme: </label>
                        <input type="text" name="program" value="<?= $_POST['program'] ?>" id="program" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="cohortes" class="form-label">Cohortes: </label>
                        <input type="text" name="cohortes" value="<?= $_POST['cohortes'] ?>" id="cohortes" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="coach" class="form-label">Coach: </label>
                        <input type="text" name="coach" value="<?= $_POST['coach'] ?>" id="coach" class="form-control border border-dark">
                    </div>
                    <div class="my-3">
                        <label for="learn" class="form-label">Learn: </label>
                        <input type="text" name="learn" value="<?= $_POST['learn'] ?>" id="learn" class="form-control border border-dark">
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
                    <button class="btn btn-green rounded-0 px-4">CREER</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>