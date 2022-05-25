<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>History</title>
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<script src="../js/scripts.js"></script>
<a href="../index.php">
    <img src="../img/history-title.jpg" class="logoWidth alignLeft" alt="Logotip">
</a>
<img src="../img/banner.jpg" class="bannerWidth alignLeft" alt="Banner">

<nav class="menu">
    <ul>
        <li><a href="../php2/page-eu.php">Uniunea Europeană</a>
            <ul>
                <li><a href="page-eu-ist.php">Istoria Uniunii Europene</a>
                <li><a href="../php2/page-eu-sity.php">10 cele mai mari orașe</a>
            </ul>
        <li><a href="../php2/page-hu.php">Ungaria</a>
            <ul>
                <li><a href="../php2/page-hu-regat.php">Regatul ungar</a>
                <li><a href="../php2/page-hu-sity.php">Orașele principale din Ungaria</a>
            </ul>
        <li><a href="../php2/page-ordin.php">Ordinul Templierilor</a>
            <ul>
                <li><a href="page-ist-temp.php">Istoria Templierilor</a>
            </ul>
    </ul>
</nav>

<div class="quiz" id="quiz">
    <div class="quiz-quest" id="quest"></div>
    <div class="quiz-ind" id="ind">1/10</div>

    <div class="quiz-res" id="res">
        <div class="quiz-res-item">
            <div class="quiz-res-item-quest">Întrebarea 1</div>
            <ul class="quiz-res-item-answ">
                <li>Raspuns 1</li>
                <li>Raspuns 1</li>
            </ul>
        </div>
    </div>



    <div class="quiz-contr">
        <button class="btn-next" id="btn-next" disabled>Next</button>
        <button class="btn-restart" id="btn-restart">Restart</button>
    </div>
</div>
</body>
</html>