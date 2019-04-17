<?php
    session_start();
// vind Sessie
echo "tot ziens " . $_SESSION['USER'] . "<br>";


$_SESSION['STATUS'] = 0;
// verwijder sessie

session_destroy();

?>
<br>
<a href="index.html">inloggen</a>
