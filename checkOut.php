<?php
  session_start();

  $item = 'item';
  for($i = 1; $i <= 6; $i++){
    $items = $item . 't' . $i;
    if (isset($_SESSION[$items])){
      $imgSrc = 'item' . $i . '.png';
      echo '<img src="' . $imgSrc . '"  width="100px" height="100px" /><br />';

    }
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
          <form method="post" action="confirmation.php" target="_self">
      			<textarea cols="50" rows="4" name="address"
            placeholder="Please Type Address Here"></textarea>
      			<br>
      			<input type="submit" value="Check Out" />
      		</form>
        </main>

        <footer>
            <?php include 'modular/footer.php'; ?>
        </footer>
    </body>
</html>
