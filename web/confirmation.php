<?php
  session_start();

  $address = htmlspecialchars($_POST["address"]);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Shopping</title>
        <link rel="stylesheet" type="text/css" href="css/shopping.css">
    </head>
    <body>
        <header>
            <?php include 'modular/header.php'; ?>
        </header>

        <main>
          <?php

            $toast = 'toaster';
              for($i = 1; $i <= 6; $i++){
                $items = $item . 't' . $i;
                if (isset($_SESSION[$items])){
                  $imgSrc = 'toaster' . $i . '.png';
                  echo '<img src="' . $imgSrc . '"  width="128px" height="128px" />';
                  echo '<br>';

                }

              }
            echo "<h2> Shipping to address <br />";
            echo $address;
            echo "<br /> Thank you for your purchase</h2>";

           ?>
        </main>

        <footer>
            <?php include 'modular/footer.php'; ?>
        </footer>
    </body>
</html>
