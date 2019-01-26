<?php
  session_start();

  if (isset($_POST['remove'])){
    $itemVal = $_POST['remove'];
    $item = 'item' . $itemVal;
    unset($_SESSION[$item]);
  }
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
          <button class="cart"><a href="checkOut.php">Check Out</a></button>
          <form method="post" action="cart.php" target="_self">

      		<?php

      			$item = 'item';
      			for($i = 1; $i <= 7; $i++){
      				$items = $item . 't' . $i;
      				if (isset($_SESSION[$items])){
      					$imgSrc = 'item' . $i . '.jpg';
      					echo '<img src="' . $imgSrc . '"  width="400px" height="400px" />';
      					echo '<button type="submit" name="remove" value="t' . $i . '">Remove</button><br />';

      				}
      			}

      		?>
      		</form>
        </main>

        <footer>
            <?php include 'modular/footer.php'; ?>
        </footer>
    </body>
</html>
