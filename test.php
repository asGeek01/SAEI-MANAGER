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
    .hideCohortes, .hideCoach, .hideLearn{
        display: none;
    }
    .hideProgram{
        display: block;
    }
    .cursor{
        cursor: pointer;
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
                    <button class="btn btn-orange">COMMENCER</button>
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
            <!-- DEBUT PARTIE: FONCTIONNALTES -->
            <div class="row mx-5">
                <div class="col mx-auto text-center bg-gray border-orange cursor" onclick="showSection('Program')">
                    <img src="assets/images/programme.png" alt="LES PROGRAMMES" class="img-fluid d-meme-icone"> 
                    PROGRAMME
                </div>
                <div class="col mx-auto text-center bg-gray border-orange cursor" onclick="showSection('Cohortes')">
                    <img src="assets/images/cohortes.png" alt="LES COHORTES" class="img-fluid d-meme-icone"> 
                    COHORTES
                </div>
                <div class="col mx-auto text-center bg-gray border-orange cursor" onclick="showSection('Coach')">
                    <img src="assets/images/coach.png" alt="LES COACHS" class="img-fluid d-meme-icone"> 
                    COACH & MENTORS
                </div>
                <div class="col mx-auto text-center bg-gray border-orange cursor" onclick="showSection('Learn')">
                    <img src="assets/images/learn.png" alt="LEARN" class="img-fluid d-meme-icone"> 
                    LEARN
                </div>
            </div>
            <section class="my-4 hideProgram">
                <div class="row mx-5 mb-5">
                    <div class="col bg-gray rounded-3 me-5 p-4">
                        <h3 class="text-center mb-3">ELABORER UN PROGRAMME</h3>
                        <p>
                            <i class="fa fa-circle text-orange"></i>
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                        <p>
                            <i class="fa fa-circle text-orange"></i>
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                        <p>
                            <i class="fa fa-circle text-orange"></i>
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                        <p>
                            <i class="fa fa-circle text-orange"></i>
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                        <p class="text-end">
                            <button class="btn btn-orange rounded-0">En savoir plus</button>
                        </p>
                    </div>
                </div>
            </section>
            <section class="my-4 hideCohortes">
                <div class="row mx-5 mb-5">
                    <div class="col bg-gray rounded-3 me-5 p-4">
                        <h3 class="text-center mb-3">ELABORER UN PROGRAMME (COHORTES)</h3>
                        <p>
                            <i class="fa fa-circle text-orange"></i>
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                        <p>
                            <i class="fa fa-circle text-orange"></i>
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                        <p>
                            <i class="fa fa-circle text-orange"></i>
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                        <p>
                            <i class="fa fa-circle text-orange"></i>
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                        <p class="text-end">
                            <button class="btn btn-orange rounded-0">En savoir plus</button>
                        </p>
                    </div>
                </div>
            </section>
            <section class="my-4 hideCoach">
                <div class="row mx-5 mb-5">
                    <div class="col bg-gray rounded-3 me-5 p-4">
                        <h3 class="text-center mb-3">ELABORER UN PROGRAMME (COACH)</h3>
                        <p>
                            <i class="fa fa-circle text-orange"></i>
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                        <p>
                            <i class="fa fa-circle text-orange"></i>
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                        <p>
                            <i class="fa fa-circle text-orange"></i>
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                        <p>
                            <i class="fa fa-circle text-orange"></i>
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                        <p class="text-end">
                            <button class="btn btn-orange rounded-0">En savoir plus</button>
                        </p>
                    </div>
                </div>
            </section>
            <section class="my-4 hideLearn">
                <div class="row mx-5 mb-5">
                    <div class="col bg-gray rounded-3 me-5 p-4">
                        <h3 class="text-center mb-3">ELABORER UN PROGRAMME (LEARN)</h3>
                        <p>
                            <i class="fa fa-circle text-orange"></i>
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                        <p>
                            <i class="fa fa-circle text-orange"></i>
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                        <p>
                            <i class="fa fa-circle text-orange"></i>
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                        <p>
                            <i class="fa fa-circle text-orange"></i>
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                        <p class="text-end">
                            <button class="btn btn-orange rounded-0">En savoir plus</button>
                        </p>
                    </div>
                </div>
            </section>
        </section>

    </main>
    <!-- FIN PARTIE: PRESENTATION -->

    <!-- DEBUT PARTIE: FOOTER -->

    <!-- FIN PARTIE: FOOTER -->
</body>
</html>
<script src="assets/js/fonctionnalites.js"></script>
<script>
    //Les variables pour manipuler l'affichage des informations
    const sections = document.querySelectorAll('.hideProgram, .hideCohortes, .hideCoach, .hideLearn');

    function showSection(section) {
        sections.forEach(sec => sec.style.display = 'none');
        document.querySelector('.hide' + section).style.display = 'block';
    }
</script>
