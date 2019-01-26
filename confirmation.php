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

            <button class="cart"><a href="browse.php">Continue Shopping</a></button>
          <?php

            $toast = 'toaster';
              for($i = 1; $i <= 6; $i++){
                $toasters = $toast . 't' . $i;
                if (isset($_SESSION[$toasters])){
                  $imgSrc = 'toaster' . $i . '.png';
                  echo '<img src="' . $imgSrc . '"  width="100px" height="100px" /> <br />';

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
