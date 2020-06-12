<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// zadatak2.php
// stranica prima tri parametra pod ključevima
// naziv, adresa i mjesto. Program označava vrijednost pod
// nazivom s h1 oznakom, vrijednost adresa s address oznakom
// te vrijednost mjesto s span oznakom.
// sve tri vrijednosti prikazane su vizualno jedne pokraj drugih
// https://polaznik05.edunova.hr/zadatak2.php?Naziv=whatever&Adresa=adresa&Mjesto=mjesto


$i=$_GET['Naziv'];
$j=$_GET['Adresa'];
$k=$_GET['Mjesto'];

echo '<h1 style="text-align:left;float:">', 'Naziv: ', $i, '</h1>',
'<address style="font-size:33px;"> ',"&nbsp&nbsp"  ,'Adresa: ', $j,  '</address>',
'<span style="font-size:33px;">', "&nbsp&nbsp", 'Mjesto: ' ,  $k , '</span>';

?>
</body>
</html>

