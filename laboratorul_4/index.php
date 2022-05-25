<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>History</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

<form action="prelucrarea2.php" method="post" class="form1">
    <p>Prenumele: <input class="select" type="text" name="name" /></p>
    <p>Vârsta: <input class="select" type="text" name="age" /></p>
    <p><input class="select" type="submit" value="Trimite" /></p>
</form>

<form name="myform" action="prelucrarea4.php" method="get" class="form">
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

<form name="myform" action="prelucrarea1.php" method=“post" class="form2">
    <p> <textarea  class="select" cols="50" rows="8" name="exemplu12" id="ex12">Ce vă interesează în istorie</textarea></p>
    <p> <input class="select" type="submit" name="exemplu10" id="ex10" value="Trimite">&nbsp; </p>
</form>



</body>
</html>