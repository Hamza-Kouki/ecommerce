<!DOCTYPE html>
<?php include("functions/functions.php")?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Online Shop</title>
    <link rel="stylesheet" href="styles/style.css" media="all" />
</head>
<body>
    <!-- Main -->
     <div class="main_wrapper">
         <!-- header -->
            <div class="header_wrapper">
                <img  src="images/logo.png" alt="LOGO">
                <img  src="images/ad_baanner.gif" alt="AD_BAANNER">
            </div>
         <!-- header /-->
         <!-- menubar -->
            <div class="menubar">
              <ul id="menu">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">ALL Products</a></li>
                  <li><a href="#">My Account</a></li>
                  <li><a href="#">Sign Up</a></li>
                  <li><a href="#">Shopping Cart</a></li>
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
                            <!-- <li><a href="#">Laptops</a></li>
                            <li><a href="#">Computers</a></li>
                            <li><a href="#">Mobiles</a></li>
                            <li><a href="#">Cameras</a></li>
                            <li><a href="#">iPads</a></li>
                            <li><a href="#">Tablets</a></li> -->
                            <?php getCats();?>
                        </ul>
                     <!-------------------------------------------------->   
                     <div class="sidebar_title">Brands</div>
                        <ul class="cats">
                        <?php getBrands(); ?>
                                <!-- <li><a href="#">HP</a></li>
                                <li><a href="#">DELL</a></li>
                                <li><a href="#">Motorla</a></li>
                                <li><a href="#">Sony Eracson</a></li>
                                <li><a href="#">LG</a></li>
                                <li><a href="#">Apple</a></li> -->
                            </ul>
                </div>             
                <div id="content_area">This is content area</div>
            </div>
        <!-- content_wrapper /-->
        <!-- footer -->
            <div id="footer">
            <h2>&copy; By &rarr; MOUHEBCOMPANY<h2>
            </div>
        <!-- footer /-->
     </div>
         <!-- Main /-->
</body>
</html>