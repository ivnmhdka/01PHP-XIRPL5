<?php
$value = 'achmatim';
$value2 = 'Achmad Solichin';

setcookie("usename", $value);
setcookie("namalengkap", $value2, time() + 3600);

echo "<h1>ini halaman pergeseran cookie</h1>";
echo "<h1>Klik <a href = 'cookie02.php'> di sini</a> untuk pemeriksaan cookie</h2>";
