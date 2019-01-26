<?php
  session_start();

  if (isset($_POST['item'])){
  				$itemVal = $_POST['item'];
  				$item = 'item' . $itemVal;
  				if (isset($_SESSION[$item])){
  					$_SESSION[$item]++;
  				}
  				else{
  					$_SESSION[$item] = 1;
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
          <button class="cart"><a href="cart.php">Check Cart</a></button>
          <form method="post" target="_self" class="catalog">
            <div class="item">
              <img src="images/item1.jpg" alt="item 1" />
              <button type="submit" name="item" value="Item1">Add to Cart</button>
            </div>
            <div class="item">
              <img src="images/item2.jpg" alt="item 2" />
              <button type="submit" name="item" value="Item2">Add to Cart</button>
            </div>
            <div class="item">
              <img src="images/item3.jpg" alt="item 3" />
              <button type="submit" name="item" value="Item3">Add to Cart</button>
            </div>
            <div class="item">
              <img src="images/item4.jpg" alt="item 4" />
              <button type="submit" name="item" value="Item4">Add to Cart</button>
            </div>
            <div class="item">
              <img src="images/item5.jpg" alt="item 5" />
              <button type="submit" name="item" value="Item5">Add to Cart</button>
            </div>
            <div class="item">
              <img src="images/item6.jpg" alt="item 6" />
              <button type="submit" name="item" value="Item6">Add to Cart</button>
            </div>
            <div class="item">
              <img src="images/item7.jpg" alt="item 7" />
              <button type="submit" name="item" value="Item7">Add to Cart</button>
            </div>
          </form>
        </main>

        <footer>
            <?php include 'modular/footer.php'; ?>
        </footer>
    </body>
</html>
