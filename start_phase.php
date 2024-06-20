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
<body>
    <section class="container my-5">
        <div class="row">
            <div class="col-12 bg-gray px-4 py-2 rounded-3">
                <div class="row">
                    <div class="col-10 bg-green p-3 rounded-3"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center my-5">
                <h3>DEBUTONS AVEC <span class="text-green">SAEI</span>-<span class="text-orange">MANAGER</span></h3>
            </div>
        </div>
        <div class="row">
            <form action="start_final.php" method="post">
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
                </div>
                <div class="my-3">
                    <label for="phase" class="form-label">Phase d'Accompagnement: </label>
                    <select name="phase" id="phase" class="form-control border border-dark">
                        <option value="Phase de pré-incubation">Phase de pré-incubation</option>
                        <option value="Phase d'incubation">Phase d'incubation</option>
                        <option value="Phase d'accélération">Phase d'accélération</option>
                    </select>
                </div>
                <div class="my-3">
                    <label for="anneeActivite" class="form-label">Année d'Activité(s): </label>
                    <select name="anneeActivite" id="anneeActivite" class="form-control border border-dark">
                        <option value="moins de 5 ans">moins de 5 ans</option>
                        <option value="entre 5 et 10 ans">entre 5 et 10 ans</option>
                        <option value="entre 10 et 15 ans">entre 10 et 15 ans</option>
                        <option value="plus de 15 ans">plus de 15 ans</option>
                    </select>
                </div><?= $_POST['contact'] ?>
                <div class="my-5 text-end">
                    <button class="btn btn-green rounded-0 px-4">SUIVANT</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>