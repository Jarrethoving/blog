<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
    <title>Blog</title>
  </head>

  <body>
    <div class="container">
      <div class="navigatie">
        <a href="blogs.php">Home</a>
        <a href="uitloggen.php">uitloggen</a>
      </div>

      <div class="blogposts">
        <?php
          session_start();
          $naam = htmlspecialchars($_POST['naam']);
            // var_dump($_SESSION);
          $bestand = fopen("blogs.txt", "r");

          if(!$bestand){
            echo "Kon geen bestand openen!";

          }

          while(!feof($bestand)) {
            $input = fgets($bestand);
            echo  $input . "\n";
          }

         ?>
       </div>


       <form class="form" method="post">
         <input type="submit" name="maak" value="plaats een blog">
       </form>

       <?php
           // var_dump($_SESSION);
      if(isset($_POST['maak'])) {
          if($_SESSION['STATUS'] == 2) {
              echo
              "
            <script>
              location.href='blogs.html';
            </script>
            ";
        } else {
          echo "<script>alert('Je moet eerst inloggen om een blog te posten.');</script>";
        }
      }
      ?>



<!-- text naar txt file zetten -->
      <?php
      $bestand=fopen("blogs.txt", "ab");
      if(!$bestand){
        echo "Kon geen bestand openen";
      }



      $titel = htmlspecialchars($_POST['titel']);
      $text = htmlspecialchars($_POST['text']);
      // er voor zorgen dat hij alleen post als er input in zit.

      if($text && $titel != ""){
      $input = "<h2>" .$titel ."</h2>" . "<p>" . $text . "</p>" . "\n";
      fwrite($bestand,$input,strlen($input));
      // post variabelen leeg maken
      if(fclose($bestand)) {
      } else {
        echo "Kon bestand niet afsluiten.";
      }
    }
      ?>

    </div>



  </body>
</html>
