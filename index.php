<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCUEIL -- SAEI-MANAGER</title>
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
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .bg{
        background: linear-gradient(180deg, #FFFFFF, #E0DEDE);
    }
    .hideCohortes, .hideCoach, .hideLearn, .hideSCoach, .hideSEntrepreneur{
        display: none;
    }
    .hideProgram, .hideSAEI{
        display: block;
    }
</style>
<body>
    <!-- DEBUT PARTIE: HEADER -->
    <?php require 'header.php'; ?>
    <!-- FIN PARTIE: HEADER -->

    <!-- DEBUT PARTIE: PRESENTATION -->
    <main class="container-fluid">

        <section class="row mx-auto d-flex justify-content-center">
            <div class="col mt-5 ms-5 py-4 px-5">
                <h1 class="text-start">LOREM IPSUM DOLOR SIT AMET.</h1>
                <p class="my-5">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto saepe iure, itaque in cumque asperiores.
                </p>
                <p>
                    <a href="tarifs.php">
                        <button class="btn btn-orange">COMMENCER</button>
                    </a>
                </p>
            </div>
            <div class="col d-flex justify-content-center">
                <img src="assets/images/header-img.png" alt="Image du Header" class="img-fluid">
            </div>
        </section>

        <section class="row bg p-5">
            <div class="col mx-auto d-flex justify-content-center">
                <img src="assets/images/dashboard.png" alt="Image du Dashboard" class="img-fluid border border-secondary rounded-3 w-75">
            </div> 
        </section>

        <!-- DEBUT PARTIE: FONCTIONNALTES -->
        <section class="my-5">
            <div class="row">
                <div class="col text-center">
                    <h2 class="">LOREM IPSUM DOOR SIT <span class="bg-green py-2 pe-5">AMET.</span></h2>
                </div>
            </div>
            <div class="row my-3">
                <div class="col text-center">
                    <p class="w-50 mx-auto">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure possimus quas saepe quos ratione itaque rerum consequuntur aliquid magnam obcaecati.
                    </p>
                </div>
            </div>
            <div class="row mx-5">
                <div class="col mx-auto text-center bg-select border-bottom-orange cursor" id="program" onclick="showSection('Program')">
                    <img src="assets/images/programme.png" alt="LES PROGRAMMES" class="img-fluid d-meme-icone"> 
                    PROGRAMME
                </div>
                <div class="col mx-auto text-center bg-gray border-bottom-orange cursor"  id="cohortes"  onclick="showSection('Cohortes')">
                    <img src="assets/images/cohortes.png" alt="LES PROGRAMMES" class="img-fluid d-meme-icone"> 
                    COHORTES
                </div>
                <div class="col mx-auto text-center bg-gray border-bottom-orange cursor" id="coach" onclick="showSection('Coach')">
                    <img src="assets/images/coach.png" alt="LES PROGRAMMES" class="img-fluid d-meme-icone"> 
                    COACH & MENTORS
                </div>
                <div class="col mx-auto text-center bg-gray border-bottom-orange cursor" id="learn" onclick="showSection('Learn')">
                    <img src="assets/images/learn.png" alt="LES PROGRAMMES" class="img-fluid d-meme-icone"> 
                    LEARN
                </div>
            </div>
            <section class="my-4 hideProgram">
                <div class="row bg-select rounded-4 p-5 mx-3">
                    <div class="col">
                        <h3>LOREM IPSUM SI DOLOR AMET.</h3>
                        <p class="my-4">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, fugiat laboriosam. Unde officiis autem dolor.
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Elaborer un programme 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Recherche de financement 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Mise en oeuvre du programme 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Suivie et évaluation 
                        </p>
                        <p class="mt-4">
                            <a href="fonctionnalites.php">
                                <button class="btn btn-orange rounded-0">En savoir plus...</button>
                            </a>
                        </p>
                    </div>
                    <div class="col">
                        <img src="assets/images/program-img.jpg" alt="Images de Dashboard" class="img-fluid cadrant-index rounded-4">
                    </div>
                </div>
            </section>
            <section class="my-4 hideCohortes">
                <div class="row bg-select rounded-4 p-5 mx-3">
                    <div class="col">
                        <h3>LOREM IPSUM SI DOLOR AMET. (COHORTES)</h3>
                        <p class="my-4">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, fugiat laboriosam. Unde officiis autem dolor.
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Elaborer un programme 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Recherche de financement 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Mise en oeuvre du programme 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Suivie et évaluation 
                        </p>
                        <p class="mt-4">
                            <a href="fonctionnalites.php">
                                <button class="btn btn-orange rounded-0">En savoir plus...</button>
                            </a>
                        </p>
                    </div>
                    <div class="col">
                        <img src="assets/images/program-img.jpg" alt="Images de Dashboard" class="img-fluid cadrant-index rounded-4">
                    </div>
                </div>
            </section>
            <section class="my-4 hideCoach">
                <div class="row bg-select rounded-4 p-5 mx-3">
                    <div class="col">
                        <h3>LOREM IPSUM SI DOLOR AMET. (COACH)</h3>
                        <p class="my-4">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, fugiat laboriosam. Unde officiis autem dolor.
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Elaborer un programme 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Recherche de financement 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Mise en oeuvre du programme 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Suivie et évaluation 
                        </p>
                        <p class="mt-4">
                            <a href="fonctionnalites.php">
                                <button class="btn btn-orange rounded-0">En savoir plus...</button>
                            </a>
                        </p>
                    </div>
                    <div class="col">
                        <img src="assets/images/program-img.jpg" alt="Images de Dashboard" class="img-fluid cadrant-index rounded-4">
                    </div>
                </div>
            </section>
            <section class="my-4 hideLearn">
                <div class="row bg-select rounded-4 p-5 mx-3">
                    <div class="col">
                        <h3>LOREM IPSUM SI DOLOR AMET. (LEARN)</h3>
                        <p class="my-4">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, fugiat laboriosam. Unde officiis autem dolor.
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Elaborer un programme 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Recherche de financement 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Mise en oeuvre du programme 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Suivie et évaluation 
                        </p>
                        <p class="mt-4">
                            <a href="fonctionnalites.php">
                                <button class="btn btn-orange rounded-0">En savoir plus...</button>
                            </a>
                        </p>
                    </div>
                    <div class="col">
                        <img src="assets/images/program-img.jpg" alt="Images de Dashboard" class="img-fluid cadrant-index rounded-4">
                    </div>
                </div>
            </section>
        </section>
        <!-- FIN PARTIE: FONCTIONNALITES -->

        <!-- DEBUT PARTIE: SOLUTION -->
        <section class="my-5">
            <div class="row">
                <div class="col text-center">
                    <h2 class="">LOREM IPSUM DOOR SIT <span class="bg-green py-2 pe-5">AMET.</span></h2>
                </div>
            </div>
            <div class="row my-3">
                <div class="col text-center">
                    <p class="w-50 mx-auto">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure possimus quas saepe quos ratione itaque rerum consequuntur aliquid magnam obcaecati.
                    </p>
                </div>
            </div>
            <div class="row mx-5">
                <div class="col mx-auto text-center bg-select border-bottom-orange cursor" id="saei" onclick="showSection1('SAEI')">
                    <img src="assets/images/programme.png" alt="LES PROGRAMMES" class="img-fluid d-meme-icone"> 
                    SAEI
                </div>
                <div class="col mx-auto text-center bg-gray border-bottom-orange cursor"  id="scoach"  onclick="showSection1('SCoach')">
                    <img src="assets/images/cohortes.png" alt="LES PROGRAMMES" class="img-fluid d-meme-icone"> 
                    COACH
                </div>
                <div class="col mx-auto text-center bg-gray border-bottom-orange cursor" id="entrepreneur" onclick="showSection1('SEntrepreneur')">
                    <img src="assets/images/coach.png" alt="LES PROGRAMMES" class="img-fluid d-meme-icone"> 
                    ENTREPRENEURS
                </div>
            </div>
            <section class="my-4 hideSAEI">
                <div class="row bg-select rounded-4 p-5 mx-3">
                    <div class="col">
                        <h3>LOREM IPSUM SI DOLOR AMET. (SAEI)</h3>
                        <p class="my-4">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, fugiat laboriosam. Unde officiis autem dolor.
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Elaborer un programme 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Recherche de financement 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Mise en oeuvre du programme 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Suivie et évaluation 
                        </p>
                        <p class="mt-4">
                            <a href="solution.php">
                                <button class="btn btn-orange rounded-0">En savoir plus...</button>
                            </a>
                        </p>
                    </div>
                    <div class="col">
                        <img src="assets/images/program-img.jpg" alt="Images de Dashboard" class="img-fluid cadrant-index rounded-4">
                    </div>
                </div>
            </section>
            <section class="my-4 hideSCoach">
                <div class="row bg-select rounded-4 p-5 mx-3">
                    <div class="col">
                        <h3>LOREM IPSUM SI DOLOR AMET. (COACH)</h3>
                        <p class="my-4">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, fugiat laboriosam. Unde officiis autem dolor.
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Elaborer un programme 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Recherche de financement 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Mise en oeuvre du programme 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Suivie et évaluation 
                        </p>
                        <p class="mt-4">
                            <a href="solution.php">
                                <button class="btn btn-orange rounded-0">En savoir plus...</button>
                            </a>
                        </p>
                    </div>
                    <div class="col">
                        <img src="assets/images/program-img.jpg" alt="Images de Dashboard" class="img-fluid cadrant-index rounded-4">
                    </div>
                </div>
            </section>
            <section class="my-4 hideSEntrepreneur">
                <div class="row bg-select rounded-4 p-5 mx-3">
                    <div class="col">
                        <h3>LOREM IPSUM SI DOLOR AMET. (Entrepreneurs)</h3>
                        <p class="my-4">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, fugiat laboriosam. Unde officiis autem dolor.
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Elaborer un programme 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Recherche de financement 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Mise en oeuvre du programme 
                        </p>
                        <p>
                            <i class="fa fa-caret-right text-orange"></i>
                            Suivie et évaluation 
                        </p>
                        <p class="mt-4">
                            <a href="solution.php">
                                <button class="btn btn-orange rounded-0">En savoir plus...</button>
                            </a>
                        </p>
                    </div>
                    <div class="col">
                        <img src="assets/images/program-img.jpg" alt="Images de Dashboard" class="img-fluid cadrant-index rounded-4">
                    </div>
                </div>
            </section>
        </section>
        <!-- FIN PARTIE: SOLUTION -->

        <!-- DEBUT PARTIE: PAYER POUR COMMENCER -->
        <?php require 'payerCommencer.php'; ?>
        <!-- FIN PARTIE: PAYER POUR COMMENCER -->

    </main>
    <!-- FIN PARTIE: PRESENTATION -->

    <!-- DEBUT PARTIE: FOOTER -->
    <?php require 'footer.php'; ?>
    <!-- FIN PARTIE: FOOTER -->
</body>
</html>
<script>
    //Partie de la fonctionnalite
    const sections = document.querySelectorAll('.hideProgram, .hideCohortes, .hideCoach, .hideLearn');
    const selectProgram = document.getElementById('program');
    const selectCohortes = document.getElementById('cohortes');
    const selectCoach = document.getElementById('coach');
    const selectLearn = document.getElementById('learn');

    function showSection(section) {
        sections.forEach(sec => sec.style.display = 'none');
        document.querySelector('.hide' + section).style.display = 'block';
    }
    // Partie Sélection
    selectProgram.addEventListener('click', function(){
        selectProgram.style.backgroundColor = "#FFFAFA";
        selectCohortes.style.backgroundColor = "#D9D9D9";
        selectCoach.style.backgroundColor = "#D9D9D9";
        selectLearn.style.backgroundColor = "#D9D9D9";
    });
    selectCohortes.addEventListener('click', function(){
        selectCohortes.style.backgroundColor = "#FFFAFA";
        selectProgram.style.backgroundColor = "#D9D9D9";
        selectCoach.style.backgroundColor = "#D9D9D9";
        selectLearn.style.backgroundColor = "#D9D9D9";
    });
    selectCoach.addEventListener('click', function(){
        selectCoach.style.backgroundColor = "#FFFAFA";
        selectProgram.style.backgroundColor = "#D9D9D9";
        selectCohortes.style.backgroundColor = "#D9D9D9";
        selectLearn.style.backgroundColor = "#D9D9D9";
    });
    selectLearn.addEventListener('click', function(){
        selectLearn.style.backgroundColor = "#FFFAFA";
        selectCohortes.style.backgroundColor = "#D9D9D9";
        selectProgram.style.backgroundColor = "#D9D9D9";
        selectCoach.style.backgroundColor = "#D9D9D9";
    });

    //Partie de la solution
    const sections1 = document.querySelectorAll('.hideSAEI, .hideSCoach, .hideSEntrepreneur');
    function showSection1(section) {
        sections1.forEach(sec => sec.style.display = 'none');
        document.querySelector('.hide' + section).style.display = 'block';
    }
    const selectSAEI = document.getElementById('saei');
    const selectSCoach = document.getElementById('scoach');
    const selectEntrepreneurs = document.getElementById('entrepreneur');
    // Partie sélection
    selectSAEI.addEventListener('click', function(){
        selectSAEI.style.backgroundColor = "#FFFAFA";
        selectSCoach.style.backgroundColor = "#D9D9D9";
        selectEntrepreneurs.style.backgroundColor = "#D9D9D9";
    });
    selectSCoach.addEventListener('click', function(){
        selectSCoach.style.backgroundColor = "#FFFAFA";
        selectSAEI.style.backgroundColor = "#D9D9D9";
        selectEntrepreneurs.style.backgroundColor = "#D9D9D9";
    });
    selectEntrepreneurs.addEventListener('click', function(){
        selectEntrepreneurs.style.backgroundColor = "#FFFAFA";
        selectSCoach.style.backgroundColor = "#D9D9D9";
        selectSAEI.style.backgroundColor = "#D9D9D9";
    });
</script>