<html>
<head>
<title>Contoh Pemakaian Variabel</title>
</head>
<body bgcolor="#00FFFF">
<?php
$program['web']="PHP BerType";// associative cthay
$a_index[0]="array index";
$cth['contoh'][0]="Belajar PHP<br>";
$cth['contoh'][1]="Mudah Dan Menyenangkan";
//Type asosiatif dan indexed(multidimensi)
echo"$program[web]$a_index[0]<br>";
echo"{$cth['contoh'][0]}{$cth['contoh'][1]}"; ?>
</body>
</html>