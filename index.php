<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>History</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <a href="index.php">
        <img src="img/history-title.jpg" class="logoWidth alignLeft" alt="Logotip">
    </a>
    <img src="img/banner.jpg" class="bannerWidth alignLeft" alt="Banner">

    <nav class="menu">
        <ul>
            <li><a href="php2/page-eu.php">Uniunea Europeană</a>
                <ul>
                    <li><a href="php2/page-eu-ist.php">Istoria Uniunii Europene</a>
                    <li><a href="php2/page-eu-sity.php">10 cele mai mari orașe</a>
                </ul>
            <li><a href="php2/page-hu.php">Ungaria</a>
                <ul>
                    <li><a href="php2/page-hu-regat.php">Regatul ungar</a>
                    <li><a href="php2/page-hu-sity.php">Orașele principale din Ungaria</a>
                </ul>
            <li><a href="php2/page-ordin.php">Ordinul Templierilor</a>
                <ul>
                    <li><a href="php2/page-ist-temp.php">Istoria Templierilor</a>
                </ul>
        </ul>
    </nav>

    <h2 class ="test"> <a href="php2/test1.php"> Test </a></h2>

    <h1 class="h">Pagina principală</h1>
    <p class="text textSize">
             Salut tuturor celor care se intereseză de istorie, pe acest site veți putea găsi deferite articole despre diferite evenimente istorice.
        Sunt sigur că fiecare din voi va putea găsi pe site-ul nostru teme pe plac și ne va juta se dezvoltăm mediul istoric pe net. Nu ezitați să lăsaâi
        comentarii și să recomandați site-ul nostru prietenilor, sunt sigur că pe noi ne așteaptă o călătorie captivantă în lumea trecutului. De asemenea
        sunt sigur că vom putea discuta la anumite teme istorice pentru a ne informa unul pe altul, creăând un forum sau o o zonă de desbateri la teme istorice.

    <p class="text textSize">
    Pentru a ne cunoaște mai bine vă propunem să completați câteva formulare.

    <form action="php/prelucrare2.php" method="post" class="form1">
        <p>Prenumele: <input class="select" type="text" name="name" /></p>
        <p>Vârsta: <input class="select" type="text" name="age" /></p>
        <p><input class="select" type="submit" value="Trimite" /></p>
    </form>

    <form name="myform" action="php/prelucrarea4.php" method="get" class="form">
        <p>Alege orașul natal:<br/>
            <select class="select" name="exemplu_select" id="ex_select">
                <option value="Chișinău">Chișinău</option>
                <option value="Bălți">Bălți</option>
                <option value="Edineț" selected="selected">Edineț</option>
                <option value="Căușeni">Căușeni</option>
                <option value="Briceni">Briceni</option>
                <option value="Cahul">Cahul</option>
            </select>
        </p>
        <p> <input class="input" type="submit" name="exemplu10" id="ex10" value="Trimite"></p>
    </form>

    <form name="myform" action="php/prelucrarea1.php" method=“post" class="form2">
        <p> <textarea  class="select" cols="50" rows="8" name="exemplu12" id="ex12">Ce vă interesează în istorie</textarea></p>
        <p> <input class="select" type="submit" name="exemplu10" id="ex10" value="Trimite">&nbsp; </p>
    </form>



</body>
</html>