<?php
include('db_connect_files/dbconnection.php');
function getCats(){
    global $con;
    $get_cats = "select * from categories";
    $run_cats = mysqli_query($con, $get_cats);
    while($row_cats = mysqli_fetch_array($run_cats)){
        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];
        echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
      }
}
//================================================================================================================
function getBrands(){
    global $con;
    $get_brands = "select * from brands";
    $run_brands = mysqli_query($con,$get_brands);
    while($row_brands = mysqli_fetch_array($run_brands)){
        $brand_id = $row_brands['brand_id'];
        $brand_title = $row_brands['brand_title'];
        echo "<li><a href='index.php?brand=$brand_id'>$brand_title</a></li>";
    }
//   }
}
//================================================================================================================
function getPro(){
    if((!isset($_GET['cat']))&&(!isset($_GET['brand']))){
        global $con ;
    $get_pro =  "select *  from products order by RAND() LIMIT 0,6";

    $run_pro = mysqli_query($con, $get_pro);

    while($row_pro = mysqli_fetch_array($run_pro)){
        $pro_id = $row_pro['product_id'];
        $pro_cat = $row_pro['product_cat'];
        $pro_brand = $row_pro['product_brand'];
        $pro_title = $row_pro['product_title'];
        $pro_price = $row_pro['product_price'];
        $pro_image = $row_pro['product_image'];

        echo "
        <div id='single_product'>
            <h3>$pro_title</h3>
            <img src='admin_area/product_images/$pro_image' width='180' height='180' />
            <p><b>$ $pro_price</b></p>
            <a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
            
            <a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
        </div>
        ";
    }
   }
  }
// }
//================================================================================================================
function getPro_details(){
        global $con ;
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        else {
            if(isset($_GET['pro_id'])){
                $product_id = $_GET['pro_id'];
                $get_pro =  "select *  from products where product_id='$product_id'";
        
                $run_pro = mysqli_query($con, $get_pro);
            while($row_pro = mysqli_fetch_array($run_pro)){

                $pro_id = $row_pro['product_id'];
                $pro_title = $row_pro['product_title'];
                $pro_price = $row_pro['product_price'];
                $pro_image = $row_pro['product_image'];
                $pro_desc  = $row_pro['product_desc'];
                echo "
                    <div id='single_product'>
                        <h3>$pro_title</h3>
                        <img src='admin_area/product_images/$pro_image' width='180' height='180' />
                        <p><b>$ $pro_price</b></p>
                        <a href='index.php' style='float:left;'>Go Back</a>
                        
                        <a href='index.php><button style='float:right'>Add to Cart</button></a>
                    </div>
                    <div id='single_product_desc'>
                    <p>$pro_desc</p>
                    </div>
                    ";
                }
        }
    }
}
//==================================Display=Product=Using=Categories==============================================
function getCatPro($page){
    global $con ;
    if(isset($_GET['cat'])){
        $cat_id = $_GET['cat'];
    $get_cat_pro =  "select *  from products where product_cat='$cat_id'";
    $run_cat_pro = mysqli_query($con, $get_cat_pro);
    $count_cats = mysqli_num_rows($run_cat_pro);
    if($count_cats!=0){
        while($row_cat_pro = mysqli_fetch_array($run_cat_pro)){
            $pro_id = $row_cat_pro['product_id'];
            $pro_cat = $row_cat_pro['product_cat'];
            $pro_brand = $row_cat_pro['product_brand'];
            $pro_title = $row_cat_pro['product_title'];
            $pro_price = $row_cat_pro['product_price'];
            $pro_image = $row_cat_pro['product_image'];
    
            echo "
            <div id='single_product'>
                <h3>$pro_title</h3>
                <img src='admin_area/product_images/$pro_image' width='180' height='180' />
                <p><b>$ $pro_price</b></p>
                <a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
                
                <a href='$page?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
            </div>
            ";
        }
    }else{
        echo "
        <div class='posAlert'>
            <div class='alert'>
                <span class='closebtn' onclick='hiddiers()'>&times;</span> 
                There is no product in this category!.
            </div>
        </div>
        ";
        exit();
    }
   }
  }
//==================================Display=Product=Using=Brands==============================================
function getBrandPro($page){
    global $con ;
    if(isset($_GET['brand'])){
        $brand_id = $_GET['brand'];
    $get_brand_pro =  "select *  from products where product_brand='$brand_id'";
    $run_brand_pro = mysqli_query($con, $get_brand_pro);
    $count_brands = mysqli_num_rows($run_brand_pro);
    if($count_brands!=0){
        while($row_brand_pro = mysqli_fetch_array($run_brand_pro)){
            $pro_id    = $row_brand_pro['product_id'];
            $pro_cat   = $row_brand_pro['product_cat'];
            $pro_brand = $row_brand_pro['product_brand'];
            $pro_title = $row_brand_pro['product_title'];
            $pro_price = $row_brand_pro['product_price'];
            $pro_image = $row_brand_pro['product_image'];
    
            echo "
            <div id='single_product'>
                <h3>$pro_title</h3>
                <img src='admin_area/product_images/$pro_image' width='180' height='180' />
                <p><b>$ $pro_price</b></p>
                <a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
                
                <a href='$page?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
            </div>
            ";
        }
    }else{
        echo "
        <div class='posAlert'>
            <div class='alert'>
                <span class='closebtn' onclick='hiddiers()'>&times;</span> 
                There is no product associated with this brand!.
            </div>
        </div>
        ";
        exit();
    }
   }
  }
//================================================================================================================
function getPro_all_products(){
    global $con ;
    if((!isset($_GET['cat']))&&(!isset($_GET['brand']))){
    $get_pro =  "select *  from products ";

    $run_pro = mysqli_query($con, $get_pro);

    while($row_pro = mysqli_fetch_array($run_pro)){
        $pro_id = $row_pro['product_id'];
        $pro_cat = $row_pro['product_cat'];
        $pro_brand = $row_pro['product_brand'];
        $pro_title = $row_pro['product_title'];
        $pro_price = $row_pro['product_price'];
        $pro_image = $row_pro['product_image'];

        echo "
        <div id='single_product'>
            <h3>$pro_title</h3>
            <img src='admin_area/product_images/$pro_image' width='180' height='180' />
            <p><b>$ $pro_price</b></p>
            <a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
            
            <a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
        </div>
        ";
    }
   }
  }
// }
//================================================================================================================
function getPro_product_keywords($page){
	global $con ;
    if(isset($_GET['search'])){
        $search_query = $_GET['user_query'];

        $get_pro =  "select *  from products  WHERE  product_keywords like '%$search_query%'";

        $run_pro = mysqli_query($con, $get_pro);

        while($row_pro = mysqli_fetch_array($run_pro)){
            $pro_id = $row_pro['product_id'];
            $pro_cat = $row_pro['product_cat'];
            $pro_brand = $row_pro['product_brand'];
            $pro_title = $row_pro['product_title'];
            $pro_price = $row_pro['product_price'];
            $pro_image = $row_pro['product_image'];

            echo "
            <div id='single_product'>
                <h3>$pro_title</h3>
                <img src='admin_area/product_images/$pro_image' width='180' height='180' />
                <p><b>$ $pro_price</b></p>
                <a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
                
                <a href='$page?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
            </div>
            ";
        }
    }
  }
?>