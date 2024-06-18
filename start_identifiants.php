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
</style>
<body class="p-5">
    <section class="container my-5">
        <div class="row">
            <form action="start_identifiants.php" method="post">
                <legend class="text-center">CREER VOS IDENTIFIANTS DE CONNEXION</legend>
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