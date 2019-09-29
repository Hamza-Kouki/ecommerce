var product_title = document.forms["insert_product_form"]["product_title"]
, product_cat = document.forms["insert_product_form"]["product_cat"]
, product_brand = document.forms["insert_product_form"]["product_brand"]
, product_image = document.forms["insert_product_form"]["product_image"]
, product_price = document.forms["insert_product_form"]["product_price"]
, product_desc = document.forms["insert_product_form"]["product_desc"]
, product_keywords = document.forms["insert_product_form"]["product_keywords"];

function validateForm() {
    if ( product_title.value == "") {
        product_title.style.background = "rgba(245, 0, 0, 0.55)";
        addFlash("“Product Title”");
    return false;
    }
            //-------
    else  if (product_cat.value == "") {
        product_cat.style.background = "rgba(245, 0, 0, 0.55)";
        addFlash("“Product Categories”");
      return false;
      }
            //-------
            else  if (product_brand.value == "") {
                product_brand.style.background = "rgba(245, 0, 0, 0.55)";
                addFlash("“Product Brand”");
              return false;
              }
            //-------
            else if (product_image.value == "") {
                product_image.style.background = "rgba(245, 0, 0, 0.55)";
                addFlash("“Product Image”");
              return false;
              }
            //-------
      else if (product_price.value == "") {
        product_price.style.background = "rgba(245, 0, 0, 0.55)";
        addFlash("“Product Price");
      return false;
      }
            //-------
            else if (product_desc.value == "") {
                product_desc.style.background = "rgba(245, 0, 0, 0.55)";
                addFlash("“Product Description”");
              return false;
              }
            //-------
            else if (product_keywords.value == "") {
                product_keywords.style.background = "rgba(245, 0, 0, 0.55)";
                addFlash("“Product Keywords”");
              return false;
              }

  }
function removeAlert(){
    document.querySelector('.alert').remove();
  }
function addFlash(message){
    var new_div = document.createElement("div");
    new_div.setAttribute("class", "alert" );
    //-------------------------
    var spa = document.createElement("span");
    spa.setAttribute("class", "closebtn" );
    d = document.createElement('i'); d.innerHTML = '&times;';
    spa.appendChild( document.createTextNode(d.innerHTML));
    //----------------------------------------------
    var new_br = document.createElement("br");
    //------------------------------------------------------
    var new_strong = document.createElement("strong");
    
    new_strong.appendChild( document.createTextNode( "the field " + message + " is must not be empty."));
    //-----------------------------------------------------
    document.querySelector('.allalerts').appendChild( new_div );
    document.querySelector('.alert').appendChild(spa);
    document.querySelector('.alert').appendChild(new_br);
    document.querySelector('.alert').appendChild(new_strong);
    //-------------------------
    document.querySelector('.alert').style.display = 'block';
    document.querySelector('.alert').style.animation = 'hide 10s forwards';
    setTimeout(removeAlert, 11000);
  }
function sweetAlert(){
  if(product_title.value!=""&&product_cat.value!=""
  &&product_brand.value!=""&&product_image.value!=""
  &&product_price.value!=""&&product_desc.value!=""
  &&product_keywords.value!=""){
    Swal.fire(
      'Good job!',
      'success'
    );
  }
}