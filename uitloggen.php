<?php
    session_start();
// vind Sessie
echo "tot ziens" . $_SESSION['USER'];

$_SESSION['STATUS'] = 0;
// verwijder sessie

session_destroy();

?>
