<style>
    a{
        color: black;
        text-decoration: none;
    }
    .activate{
        text-decoration: underline;
        color: #f76300;
        font-weight: bold;
    }
    .activate:hover{
        text-decoration: underline;
        color: #f76300;
        font-weight: bold;
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
<header class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-auto">
                <a href="index.php"><span class="text-success">SAEI</span>-<span class="text-orange">MANAGER</span></a>
            </h2>
        </div>
        <div class="col navbar navbar-expand-lg m-0 p-0">
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav">
                    <li class="nav-item my-lg-auto"><a href="fonctionnalites.php" class="nav-link <?php if($active == "fonctionnalites"): ?> activate <?php endif ?>">FONCTIONNALITES</a></li>
                    <li class="nav-item my-lg-auto"><a href="solution.php" class="nav-link <?php if($active == "solution"): ?> activate <?php endif ?>">SOLUTION</a></li>
                    <li class="nav-item my-lg-auto"><a href="tarifs.php" class="nav-link <?php if($active == "tarifs"): ?> activate <?php endif ?>">TARIFS</a></li>
                    <li class="nav-item my-lg-auto col-2"><a href="propos.php" class="nav-link <?php if($active == "propos"): ?> activate <?php endif ?>">A PROPOS</a></li>
                    <li class="nav-item">
                        <a href="connexion.php" class="nav-link">
                            <button class="btn border border-dark rounded-0">CONNEXION</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="tarifs.php" class="nav-link">
                            <button class="btn btn-orange rounded-0">COMMENCER</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
</header>
<script src="assets/js/bootstrap.min.js"></script>