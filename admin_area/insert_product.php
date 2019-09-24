<!DOCTYPE html>
<?php include("../functions/functions.php")?>
<html lang="en">
<head>
    <meta http-equiv="Cache-control" content="no-cache">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserting Product</title>
    <link rel="stylesheet" href="styles/styleAdminArea.css" media="all" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
    <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    <!-- <script src="../functions/tinymce.min.js"></script> -->
    <script>
            tinymce.init({selector:'textarea'});
    </script>
</head>
<body>
    <form id="insert_product_form" action="insert_product.php" method="post" enctype="multipart/form-data">
       <table align="center" border="2">
           <tr align="center">
               <td colspan="8">
                   <h2>Insert New Post Here</h2>
               </td>
           </tr>
           <tr>
              <td align="right"><b>Product Title:</b></td>
               <td>
                   <input type="text" name="product_title" size="50">
               </td>
           </tr>
          <tr>
             <td align="right"><b>Product Category:</b></td>
              <td>
                <select name="product_cat">
                    <option value="">Select  a category</option>
                    <?php insertProductGetCats();?>
                </select>
            </td>
          </tr>
          <tr>
             <td align="right"><b>Product Brand:</b></td>
             <td>
                <select name="product_brand">
                    <option value="">Select  a Brand</option>
                    <?php insertProductGetBrands();?>
                </select>
            </td>
          </tr>
          <tr>
             <td align="right"><b>Product Image:</b></td>
              <td><input type="file" name="product_image"></td>
          </tr>
          <tr>
             <td align="right"><b>Product Price:</b></td>
              <td><input type="text" name="product_price" size="50"></td>
          </tr>
          <tr>
             <td align="right"><b>Product Description:</b></td>
              <td>
                    <textarea name="product_desc"  cols="22" rows="5"></textarea>
                    <!-- <div class="editor">
                            <ul class="button-list">
                                <li>
                                <select name="font" id="font" onchange="changeFont(event)">
                                    <option value="arial">Arial</option>
                                    <option value="arial">Roboto</option>
                                    <option value="Anton">Anton</option>
                                </select>
                                </li>
                                <li>
                                <select name="size" id="size" onchange="changeSize(event)">
                                    <option value="12">12</option>
                                    <option value="14">14</option>
                                    <option value="16">16</option>
                                    <option value="18">18</option>
                                    <option value="20">20</option>
                                    <option value="22">22</option>
                                    <option value="28">28</option>
                                </select>
                                </li>
                                <li class="button" onclick="changeBold()">
                                    <i class="fas fa-bold"></i>
                                </li>
                                <li class="button" onclick="changeItalic()">
                                    <i class="fas fa-italic"></i>
                                </li>
                                <li class="button" onclick="changeUnderlined()">
                                    <i class="fas fa-underline"></i>
                                </li>
                                <li class="button" onclick="leftMe()">
                                    <i class="fas fa-align-left"></i>
                                </li>
                                <li class="button" onclick="centerMe()">
                                    <i class="fas fa-align-center"></i>
                                </li>
                                <li class="button" onclick="rightMe()">
                                    <i class="fas fa-align-right"></i>
                                </li>
                    </ul>
                    <textarea name="text" id="text" rows="15" cols="80" oninput='this.style.height = "";this.style.height = this.scrollHeight + "px"'></textarea>
                    </div> -->
              </td>
          </tr>
          <tr>
             <td align="right"><b>Product Keywords:</b></td>
              <td><input type="text" name="product_keywords" size="50"></td>
          </tr>
          <!------------------------------------------------>
          <tr align="center">
              <td colspan="8">
                  <input type="submit" name="insert_post" value="Insert Now">
              </td>
          </tr>

       </table>
    </form>
</body>

<script src="../js/admin_area_js/jquery-3.3.1.min.js"></script>
<!-- <script src="../js/admin_area_js/script-jquery.js"></script> -->
<script src="../js/admin_area_js/script-js.js"></script>
</html>
<?php  //setData();?>
<?php  setDataToProductTable();?>

