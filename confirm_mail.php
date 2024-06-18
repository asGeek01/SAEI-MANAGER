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
    .form-control{
        border-radius: 0;
        border: 0;
        border-bottom: 3px solid black;
    }
    .text-underline{
        text-decoration: underline;
    }
</style>
<body class="p-5">
    <section class="container my-5">
        <div class="row d-flex justify-content-center p-5">
            <div class="col-6 mx-auto">
                <form action="start_type.php" method="post">
                    <div class="my-3">
                        <h3>VEUILLEZ CONFIRMER VOTRE MAIL</h3>
                        <p class="mt-3 mb-5">
                            Nous avons envoyer un code au mail suivant: <br>
                            <span class="text-underline">john.doe@gmail.com</span>
                        </p>
                        <input type="number" name="confMail" id="confMail" class="form-control" required>
                    </div>
                    <div class="my-5 text-center">
                        <button class="btn btn-orange rounded-0 px-4">VERIFIER</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>