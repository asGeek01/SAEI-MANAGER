<?php 
    session_start();
    $active = "tarifs";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TARIFS -- SAEI-MANAGER</title>
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
    .hideTCoach, .hideTEntrepreneur{
        display: none;
    }
</style>
<body>
    <!-- DEBUT PARTIE: HEADER -->
    <?php require 'header.php'; ?>
    <!-- FIN PARTIE: HEADER -->

    <!-- DEBUT TEXT INTRODUCTIF TARIFS -->
    <div class="container my-5">
        <div class="row">
            <div class="col text-center">
                <h2 class="">LOREM IPSUM DOOR SIT <span class="bg-green py-2 pe-5">AMET.</span></h2>
            </div>
        </div>
        <div class="row my-3">
            <div class="col text-center">
                <p class="w-50 mx-auto my-3">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure possimus quas saepe quos ratione itaque rerum consequuntur aliquid magnam obcaecati.
                </p>
            </div>
        </div>
    </div>
    <!-- FIN TEXT INTRODUCTIF TARIFS -->

    <!-- DEBUT CATEGORIE DE PAIEMENT -->
    <div class="row mx-5">
        <div class="col mx-auto text-center bg-select border-bottom-orange cursor" id="tsaei" onclick="showSection_t('TSAEI')">
            <img src="assets/images/programme.png" alt="LES PROGRAMMES" class="img-fluid d-meme-icone"> 
            SAEI
        </div>
        <div class="col mx-auto text-center bg-gray border-bottom-orange cursor"  id="tcoach"  onclick="showSection_t('TCoach')">
            <img src="assets/images/cohortes.png" alt="LES PROGRAMMES" class="img-fluid d-meme-icone"> 
            COACH
        </div>
        <div class="col mx-auto text-center bg-gray border-bottom-orange cursor" id="tentrepreneur" onclick="showSection_t('TEntrepreneur')">
            <img src="assets/images/coach.png" alt="LES PROGRAMMES" class="img-fluid d-meme-icone"> 
            ENTREPRENEURS
        </div>
    </div>
    <section class="my-4 hideTSAEI mx-5">
        <div class="row">
            <div class="col cadrant-green rounded-4 shadow p-3">
                <h3 class="text-center">VERSION D'ESSAI (SAEI)</h3>
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure possimus quas saepe quos ratione itaque rerum consequuntur aliquid magnam obcaecati.
                </p>
                <p class="my-4 text-center">
                    <a href="start.php">
                        <button class="btn btn-green py-3 col-12">Commencer Gratuitement</button>
                    </a>
                </p>
                <h5 class="my-3">FONCTIONS DISPONIBLES</h5>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
            </div>
            <div class="col cadrant-green rounded-4 shadow p-3 mx-5 mt-5">
                <h3 class="text-center">VERSION STANDARD</h3>
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure possimus quas saepe quos ratione itaque rerum consequuntur aliquid magnam obcaecati.
                </p>
                <h4 class="text-center text-green my-4">100.000 XOF</h4>
                <p class="my-3">
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="collaborateur" class="form-label">Nombre d'Utilisateur(s)</label>
                            <p>
                                Les utilisateurs inclus: <br>
                                Incubé, Coach & Equipe
                            </p>
                            <input type="number" class="form-control" name="collaborateur" id="collaborateur" min="1" value="1">
                        </div>
                        <div>
                            <button class="btn btn-green py-3 col-12">COMMENCER</button>
                        </div>
                        
                    </form>
                </p>
                <h5 class="my-3">FONCTIONS DISPONIBLES</h5>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
            </div>
            <div class="col cadrant-green rounded-4 p-3 shadow">
                <h3 class="text-center">AVANCE</h3>
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure possimus quas saepe quos ratione itaque rerum consequuntur aliquid magnam obcaecati.
                </p>
                <h4 class="text-center text-green my-4">250.000 XOF</h4>
                <p class="my-3">
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="collaborateur" class="form-label">Nombre d'Utilisateur(s)</label>
                            <p>
                                Les utilisateurs inclus: <br>
                                Incubé, Coach & Equipe
                            </p>
                            <input type="number" class="form-control" name="collaborateur" id="collaborateur" min="1" value="1">
                        </div>
                        <div>
                            <button class="btn btn-green py-3 col-12">COMMENCER</button>
                        </div>
                        
                    </form>
                </p>
                <h5 class="my-3">FONCTIONS DISPONIBLES</h5>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
            </div>
        </div>
    </section>
    <section class="my-4 hideTCoach mx-5">
        <div class="row">
            <div class="col cadrant-green rounded-4 shadow p-3">
                <h3 class="text-center">VERSION D'ESSAI (COACH)</h3>
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure possimus quas saepe quos ratione itaque rerum consequuntur aliquid magnam obcaecati.
                </p>
                <p class="my-4 text-center">
                    <a href="start.php">
                        <button class="btn btn-green py-3 col-12">Commencer Gratuitement</button>
                    </a>
                </p>
                <h5 class="my-3">FONCTIONS DISPONIBLES</h5>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
            </div>
            <div class="col cadrant-green rounded-4 shadow p-3 mx-5 mt-5">
                <h3 class="text-center">VERSION STANDARD</h3>
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure possimus quas saepe quos ratione itaque rerum consequuntur aliquid magnam obcaecati.
                </p>
                <h4 class="text-center text-green my-4">100.000 XOF</h4>
                <p class="my-3">
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="collaborateur" class="form-label">Nombre d'Utilisateur(s)</label>
                            <p>
                                Les utilisateurs inclus: <br>
                                Incubé, Coach & Equipe
                            </p>
                            <input type="number" class="form-control" name="collaborateur" id="collaborateur" min="1" value="1">
                        </div>
                        <div>
                            <button class="btn btn-green py-3 col-12">COMMENCER</button>
                        </div>
                        
                    </form>
                </p>
                <h5 class="my-3">FONCTIONS DISPONIBLES</h5>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
            </div>
            <div class="col cadrant-green rounded-4 p-3 shadow">
                <h3 class="text-center">AVANCE</h3>
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure possimus quas saepe quos ratione itaque rerum consequuntur aliquid magnam obcaecati.
                </p>
                <h4 class="text-center text-green my-4">250.000 XOF</h4>
                <p class="my-3">
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="collaborateur" class="form-label">Nombre d'Utilisateur(s)</label>
                            <p>
                                Les utilisateurs inclus: <br>
                                Incubé, Coach & Equipe
                            </p>
                            <input type="number" class="form-control" name="collaborateur" id="collaborateur" min="1" value="1">
                        </div>
                        <div>
                            <button class="btn btn-green py-3 col-12">COMMENCER</button>
                        </div>
                        
                    </form>
                </p>
                <h5 class="my-3">FONCTIONS DISPONIBLES</h5>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
            </div>
        </div>
    </section>
    <section class="my-4 hideTEntrepreneur mx-5">
        <div class="row">
            <div class="col cadrant-green rounded-4 shadow p-3">
                <h3 class="text-center">VERSION D'ESSAI (ENTREPRENEUR)</h3>
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure possimus quas saepe quos ratione itaque rerum consequuntur aliquid magnam obcaecati.
                </p>
                <p class="my-4 text-center">
                    <a href="start.php">
                        <button class="btn btn-green py-3 col-12">Commencer Gratuitement</button>
                    </a>
                </p>
                <h5 class="my-3">FONCTIONS DISPONIBLES</h5>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
            </div>
            <div class="col cadrant-green rounded-4 shadow p-3 mx-5 mt-5">
                <h3 class="text-center">VERSION STANDARD</h3>
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure possimus quas saepe quos ratione itaque rerum consequuntur aliquid magnam obcaecati.
                </p>
                <h4 class="text-center text-green my-4">100.000 XOF</h4>
                <p class="my-3">
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="collaborateur" class="form-label">Nombre d'Utilisateur(s)</label>
                            <p>
                                Les utilisateurs inclus: <br>
                                Incubé, Coach & Equipe
                            </p>
                            <input type="number" class="form-control" name="collaborateur" id="collaborateur" min="1" value="1">
                        </div>
                        <div>
                            <button class="btn btn-green py-3 col-12">COMMENCER</button>
                        </div>
                        
                    </form>
                </p>
                <h5 class="my-3">FONCTIONS DISPONIBLES</h5>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-remove text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
            </div>
            <div class="col cadrant-green rounded-4 p-3 shadow">
                <h3 class="text-center">AVANCE</h3>
                <p class="text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure possimus quas saepe quos ratione itaque rerum consequuntur aliquid magnam obcaecati.
                </p>
                <h4 class="text-center text-green my-4">250.000 XOF</h4>
                <p class="my-3">
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="collaborateur" class="form-label">Nombre d'Utilisateur(s)</label>
                            <p>
                                Les utilisateurs inclus: <br>
                                Incubé, Coach & Equipe
                            </p>
                            <input type="number" class="form-control" name="collaborateur" id="collaborateur" min="1" value="1">
                        </div>
                        <div>
                            <button class="btn btn-green py-3 col-12">COMMENCER</button>
                        </div>
                        
                    </form>
                </p>
                <h5 class="my-3">FONCTIONS DISPONIBLES</h5>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
                <p>
                    <i class="fa fa-check-circle text-green"></i>
                    Lorem ipsum dolor sit amet consectetur.
                </p>
            </div>
        </div>
    </section>
    <!-- FIN CATEGORIE DE PAIEMENT -->


    <!-- DEBUT PARTIE: FOOTER -->
     <?php require 'footer.php'; ?>
    <!-- FIN PARTIE: FOOTER -->
</body>
</html>
<script>
    const sections1 = document.querySelectorAll('.hideTSAEI, .hideTCoach, .hideTEntrepreneur');
    const selectTSAEI = document.getElementById('tsaei');
    const selectTCoach = document.getElementById('tcoach');
    const selectTEntrepreneur = document.getElementById('tentrepreneur');

    function showSection_t(section) {
        sections1.forEach(sec => sec.style.display = 'none');
        document.querySelector('.hide' + section).style.display = 'block';
    }

    // Partie sélection
    selectTSAEI.addEventListener('click', function(){
        selectTSAEI.style.backgroundColor = "#FFFAFA";
        selectTCoach.style.backgroundColor = "#D9D9D9";
        selectTEntrepreneur.style.backgroundColor = "#D9D9D9";
    });
    selectTCoach.addEventListener('click', function(){
        selectTCoach.style.backgroundColor = "#FFFAFA";
        selectTSAEI.style.backgroundColor = "#D9D9D9";
        selectTEntrepreneur.style.backgroundColor = "#D9D9D9";
    });
    selectTEntrepreneur.addEventListener('click', function(){
        selectTEntrepreneur.style.backgroundColor = "#FFFAFA";
        selectTCoach.style.backgroundColor = "#D9D9D9";
        selectTSAEI.style.backgroundColor = "#D9D9D9";
    });
</script>