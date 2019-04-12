<?php

function printtxt(){
  $bestand=fopen("blogs.txt", "r");
  if(!$bestand){
    echo "Kon geen bestand openen!";

  } while(!feof($bestand)){
    $input = fgets($bestand);
    echo '<div class="input">' . trim($input) . '</div>';
    }
}


function profile(){
  $bestand=(fopen"uploads")
}
 ?>
