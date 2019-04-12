<?php
  session_start();

$email = htmlspecialchars($_POST['e-mail']);
$wachtwoord = htmlspecialchars($_POST['wachtwoord']);
$bestand=fopen("gebruikers.txt","r");

if(!$bestand){
  echo "Kon geen bestand openen!";
}
while(!feof($bestand))
{
  $account = fgets($bestand);
  $account = explode("*", $account);

  if($account[1] == $email && $account[2] == $wachtwoord){
    $_SESSION["USER"] = $email;
    $_SESSION["STATUS"] = 2;

    echo
    "
    <script>
      alert('U bent ingelogd als $email. ');
      location.href='blogs.php';
    </script>
    ";
  }
}

    echo
    "
    <script>
      alert('Wachtwoord of gebruikersnaam ongeldig.');
      location.href='index.html';
    </script>
    ";







 ?>
