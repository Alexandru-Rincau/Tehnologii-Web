<?php
$f="<html><head><meta charset='utf-8'></head><body>";
//get parameters from URL
$f=$f."<p>Orașul: ";
$a=$_GET['exemplu_select']."</p>\n";
$f = $f.$a;
$f=$f."</body></html>";
echo $f
?>
