<?php
if (isset($_COOKIE['username'])) {
    echo "<h1>Cookie 'username' ada. Isinya : " . $_COOKIE['username'] . "</h1>";
} else {
    echo "<h1>Cookie 'username' TIDAK ada : ";
}
if (isset($_COOKIE['namalengkap'])) {
    echo "<h1>Cookie 'namalengkap' ada. Isinya : " . $_COOKIE['namalengkap'] . "</h1>";
} else {
    echo "<h1>Cookie 'namalengkap' TIDAK ada : ";
}
echo "<h1>Klik <a href = 'cookie01.php'> di sini</a> untuk penciptaan cookie</h2>";
