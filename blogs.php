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
            var_dump($_SESSION);
          $bestand = fopen("blogs.txt", "r");

          if(!$bestand){
            echo "Kon geen bestand openen!";

          }

          while(!feof($bestand)) {
            $input = fgets($bestand);
            echo $input . "\n";
          }

         ?>
       </div>
       <form class="knop" method="post">
         <input type="submit" name="maak" value="hoi">
       </form>

       <?php
           var_dump($_SESSION);
      if(isset($_POST['maak'])) {
          if($_SESSION['STATUS'] == 2) {
              echo
              "
            <script>
              location.href='blogs.html';
            </script>
            ";
        } else {
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
      $input = '<h2>'.$titel.'</h2>'  . '<p>' .$text. '</p>';
      fwrite($bestand,$input,strlen($input));
      if(fclose($bestand)) {
      } else {
        echo "Kon bestand niet afsluiten.";
      }
      ?>

    </div>



  </body>
</html>
