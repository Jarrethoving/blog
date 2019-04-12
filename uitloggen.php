<?php
// vind Sessie
// einde sessie melden echo "tot ziens" . $_SESSION['USER'];

include 'inloggen.php';

$_SESSION['STATUS'] = 0;
// verwijder sessie

session_destroy();

?>
