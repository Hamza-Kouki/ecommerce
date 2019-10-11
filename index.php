<!DOCTYPE html>
<?php include("functions/functions.php")?>
<html lang="en">
<head>
    <meta http-equiv="Cache-control" >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Online Shop</title>
    <link rel="stylesheet" href="styles/style.css?v=1.3" media="all" />
    <script src="functions/functions.js"></script>
</head>
<body>
    <!-- Main -->
     <div class="main_wrapper">
         <!-- header -->
            <div class="header_wrapper">
                <a href="index.php"><img  src="images/logo.png" alt="LOGO"></a>
                <img  src="images/ad_baanner.gif" alt="AD_BAANNER">
            </div>
         <!-- header /-->
         <!-- menubar -->
            <div class="menubar">
              <ul id="menu">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="all_products.php">ALL Products</a></li>
                  <li><a href="customer/my_account.php">My Account</a></li>
                  <li><a href="#">Sign Up</a></li>
                  <li><a href="cart.php">Shopping Cart</a></li>
                  <li><a href="#">Contact Us</a></li>
              </ul>
              <div id="form" action="get" action="results.php" enctype= multipart/form-data>
                  <input type="text" name="user_query" placeholder="Search a Product"/>
                  <input type="submit" name="search" value="search"/>
                  </form>
              </div>
            </div>
         <!-- menubar /-->
         <!-- content_wrapper -->
            <div class="content_wrapper">
                <div id="sidebar">
                    <div class="sidebar_title">Categories</div>
                        <ul class="cats">
                            <?php getCats();?>
                        </ul>
                     <!-------------------------------------------------->   
                     <div class="sidebar_title">Brands</div>
                        <ul class="cats">
                        <?php getBrands(); ?>
                        </ul>
                </div>             
                <div id="content_area">
                    <div id="shopping_cart">
                        <span>
                            Welcome Guset! <b>Shopping Cart </b> - Total Items: Total Price
                            <a href="cart.php">Go to Cart</a>
                        </span>
                    </div>
                    <div id="products_box">
                        <?php getPro();?>
                        <?php getCatPro('index.php'); ?>
                        <?php getBrandPro('index.php'); ?>
                    </div>
                </div>
            </div>
        <!-- content_wrapper /-->
        <!-- footer -->
        <footer>
        <h2>&copy; By &rarr; MOUHEBCOMPANY<h2>
        </footer>
        <!-- footer /-->
         <!-- Main /-->
</body>

</html>