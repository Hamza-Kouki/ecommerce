<?php
$con = mysqli_connect('localhost','root','','ecommerce');

    function insertProductGetCats(){
        global $con;
        $get_cats = "select * from categories";
        $run_cats = mysqli_query($con, $get_cats);
        while($row_cats = mysqli_fetch_array($run_cats)){
            $cat_id = $row_cats['cat_id'];
            $cat_title = $row_cats['cat_title'];
            echo "<option value=$cat_id>$cat_title</option>";
          }
    }

function insertProductGetBrands(){
    global $con;
    $get_brands = "select * from brands";
    $run_brands = mysqli_query($con,$get_brands);
    while($row_brands = mysqli_fetch_array($run_brands)){
        $brand_id = $row_brands['brand_id'];
        $brand_title = $row_brands['brand_title'];
        echo "<option value=$brand_id>$brand_title</option>";
      }
}

function setDataToProductTable(){
    global $con;
    if(isset ($_POST['insert_post'])) {

    // Getting the text data from the fields
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $product_brand = $_POST['product_brand'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];
    
    // Getting the image from the field
    // $product_image = $_FILES['product_image']['name'];
    // move_uploaded_file($product_image_tmp,"../admin_area/product_images/$product_title.jpg");

    $product_image = $product_title .'.jpg'; // New unique file name
    move_uploaded_file($_FILES["product_image"]["tmp_name"], "../admin_area/product_images/$product_image");
    
    $insert_product = "insert into products (product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords) values ('$product_cat','$product_brand',' $product_title','$product_price','$product_desc','$product_image','$product_keywords')" or die ();
       
    $insert_pro = mysqli_query($con ,$insert_product);
            // if($insert_pro){
            //     echo "<script>alert('Product Has been inserted!')</script>";
            //     echo "<script>windows.open('insert_product.php','_self')</script>";
            // }
        }
}
?>