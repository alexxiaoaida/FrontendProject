<?php

//start session

session_start();

require_once('php/CreateDb.php');
require_once('./php/component.php');

$database2 = new CreateDb("Productdb","Producttb");

if(isset($_POST['add'])){
  //print_r($_POST['product_id']);

  if(isset($_SESSION['cart'])){

    $item_array_id = array_column($_SESSION['cart'],'product_id');

    if(in_array($_POST['product_id'],$item_array_id)){
      echo "<script> alert('Product is already added in the cart')</script>";
      echo "<script>window.location = 'productpage.php'</script>";

    }else{

      $count = count($_SESSION['cart']);
      $item_array = array(
        'product_id' => $_POST['product_id']
      );

      $_SESSION['cart'][$count] = $item_array;
      

    }
    //print_r($_SESSION['cart']);

  }else{
    $item_array = array(
      'product_id' => $_POST['product_id']
    );

    //Create new session variable
    $_SESSION['cart'][0] = $item_array;
    print_r($_SESSION['cart']);


  }


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    
    
</head>
<body>
    

    <!--Navigation bar-->
    <nav class="nav">
    
        
        <div class="wrapper">
         <a class="navbar-brand" href="index.php">
             <div class="logo-image">
                 <img src="images/nobgLogo.png" class="img-fluid" alt="img" style="max-width: 10rem; max-height: 5em">
         
             </div>
         </a>
 
         
         <ul class="nav-list">
          
 
             <div class="nav-links">
             
             <li class="hover-services"><a href="#" class="desktop-item">SERVICES</a>
               <input type="checkbox" id="showMega">
               <label for="showMega" class="mobile-item">SERVICES</label>
               
 
                     <div class="dropdown-content">
                         <div class="content">
 
                             <div class="row">
                                 <header> &nbsp PRODUCT CATEGORIES</header>
                                  <ul class="mega-links">
                             
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Accesories
 
                                 </a>
 
                             </li>
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Alchool
 
                                 </a>
 
                             </li>
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Art
 
                                 </a>
 
                             </li>
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Books
 
                                 </a>
 
                             </li>
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Drink
 
                                 </a>
 
                             </li>
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Electronics
 
                                 </a>
 
                             </li>
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Flower & Plants
 
                                 </a>
 
                             </li>
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Food
 
                                 </a>
 
                             </li>
 
                         </ul></div>
 
                         <div class="row">
                             <header><br></header>
                            <ul class="mega-links">
 
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Gadgets
 
                                 </a>
 
                             </li>
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Garden
 
                                 </a>
 
                             </li>
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Grocery
 
                                 </a>
 
                             </li>
 
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Home
 
                                 </a>
 
                             </li>
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Jewelry
 
                                 </a>
 
                             </li>
 
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Kids & Baby
 
                                 </a>
 
                             </li>
 
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Men's Fashion
 
                                 </a>
 
                             </li>
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Mobile
 
                                 </a>
 
                             </li>
 
                         </ul></div>
 
                         <div class="row">
                             <header><br></header>
                         <ul class="mega-links">
 
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Motorcycles
 
                                 </a>
 
                             </li>
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Movies
 
                                 </a>
 
                             </li>
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Music
 
                                 </a>
 
                             </li>
 
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Office
 
                                 </a>
 
                             </li>
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Pets
 
                                 </a>
 
                             </li>
 
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Romantic
 
                                 </a>
 
                             </li>
 
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Sport
 
                                 </a>
 
                             </li>
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Toys
 
                                 </a>
 
                             </li>
 
                         </ul></div>
 
                         <div class="row">
                             <header> &nbsp SALE</header>
                         <ul class="mega-links">
 
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Accessories
 
                                 </a>
 
                             </li>
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Alchool
 
                                 </a>
 
                             </li>
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Art
 
                                 </a>
 
                             </li>
 
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Books
 
                                 </a>
 
                             </li>
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Drink
 
                                 </a>
 
                             </li>
 
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Electronics
 
                                 </a>
 
                             </li>
 
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Flower & Plants
 
                                 </a>
 
                             </li>
                             <li>
                                 <a href="pages/error.html" class="dropdown-link">
                                   Food
 
                                 </a>
 
                             </li>
 
                         </ul></div>
                         
                         <div class="row">
                             <img src="images/imgnav.jpg" alt="">
                         </div>
 
                     </div>
                     </div>
 
                    
                  
           </li>
       
         </li>
         <li><a href="#">COMPANY</a></li>
         <li><a href="#">LIBRARY</a></li>
         <li><a href="#">CONTACT US</a></li>
       
         <li class="select-menu">
         <div class="custom-select">
           <select class="currency">
                 <option value="us">US</option>
                 <option value="eur">EUR</option>
                 <option value="ron">RON</option>
         </select>
 
         </div>
 
         </li>
         <li class="select-menu">
         <div class="custom-select">
           <select class="currency">
                 <option value="EN">EN</option>
                 <option value="RO">RO</option>
                 <option value="FR">FR</option>
         </select>
 
         </div>
 
         </li>
     </div>
  
 
     <div class="icon-menu">
       <li><a href=""><i class="fa fa-search" style="font-size:20px"></i></a></li>
       <li><a href="pages/login.html"><i class="fa fa-user" style="font-size:20px"></i></a></li>
       <li>
        <div >
        <a href="forum.php"><i class="fa fa-plus" style="font-size:23px"></i></a>
        </div>
      </li>
 
 
       
       <li>
         <div >
         <a href=""><i class="fa fa-heart" style="font-size:20px"></i></a>
         </div>
       </li>
     
       <li>
       <div >
        <a href="cart.php" class="nav-item nav-link active" style="text-decoration:none"><i class="fa fa-shopping-bag" style="font-size:20px"></i>
        <!--<span id="cart_count" class="text-warning bg-light" style="color:yellowgreen;text-align: center;border-radius: 3rem;font-size:19px;font-weight:600;">0</span>-->    
      
        
        </a>
       <!-- <span class='badge badge-warning' id='lblCartCount'> 5 </span> -->
        </div>
       
       </li>
     </div>
       
     </div>
     </nav>


     <!--Main display product section-->
     <section class="container sproduct">
        <div class="big-container">
            <div class="small-container1">
                <img class="img-fluid" src="images/pdp-images/13.jpg" alt="" id="MainImg">
                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="images/pdp-images/13.jpg" alt="" width="70%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/pdp-images/11.jpg" alt="" width="70%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/pdp-images/15.jpg" alt="" width="70%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/pdp-images/17.jpg" alt="" width="70%" class="small-img">
                    </div>
                </div>
            </div>

            <div class="small-container2">
                <h2>299.5$</h2>
                <select>
                    <option>Select color</option>
                    <option>Black</option>
                    <option>Blue</option>
                   
                </select>

                <br>
                <input type="number" value="1">
                <button class="buy-btn add-to-cart">Add to cart</button>

                <br>

                <p>Lorem Ipsum is simply dummy text of the printing <br>
                    and typesetting industry. Lorem Ipsum has been the <br>
                    industry's standard dummy text ever since the 1500s, <br>
                    when an unknown printer took a galley of type and  <br>
                    scrambled it to make a type specimen book. It has <br>
                    survived not only five centuries, but also the leap  <br>
                    into electronic typesetting, remaining essentially  <br>
                    unchanged. It was popularised in the 1960s with the  <br>
                    release of Letraset sheets containing Lorem Ipsum  <br>
                    passages, and more recently with desktop publishing <br>
                    software like Aldus PageMaker including versions of <br>
                    Lorem Ipsum.</p> <br>


                    <div class="content">
                        <a href="https://www.facebook.com/"><span class="fa fa-facebook " style="font-size:28px;color:grey" >&nbsp</span></a>
                        <a href="https://plus.google.com/"><span class="fa fa-google-plus" style="font-size:28px;color:grey">&nbsp</span></a>
                        <a href="https://twitter.com/"><span class="fa fa-twitter" style="font-size:28px;color:grey">&nbsp</span></a>
                        <a href="https://pinterest.com/"><span class="fa fa-pinterest" style="font-size:28px;color:grey">&nbsp</span></a>
                      </div>
            
            </div>
        </div>

     </section>


     <!--Tab container-->
     <div class="tabContainer">
      <div class="buttonContainer">
        <button onclick="showPanel(0,'#282828')">Description</button>
        <button onclick="showPanel(1,'#282828')">Additional content</button>
        <button onclick="showPanel(2,'#282828')">Reviews(3)</button>
       
      </div>
      <div class="tabPanel"><p>
        It is a long established fact that a reader will be
        distracted by the readable content of a page when 
        looking at its layout. The point of using Lorem 
        Ipsum is that it has a more-or-less normal 
        distribution of letters, as opposed to using <br>
        'Content here, content here', making it look 
        like readable English. Many desktop publishing 
        packages and web page editors now use Lorem 
        Ipsum as their default model text, and a search 
        for 'lorem ipsum' will uncover many web sites <br>
        still in their infancy. Various versions have 
        evolved over the years, sometimes by accident, 
        sometimes on purpose (injected humour and the like).<br><br><br>
        It is a long established fact that a reader will be
        distracted by the readable content of a page when 
        looking at its layout. The point of using Lorem 
        Ipsum is that it has a more-or-less normal 
        distribution of letters, as opposed to using <br>
        'Content here, content here', making it look 
        like readable English. Many desktop publishing 
        packages and web page editors now use Lorem 
        Ipsum as their default model text, and a search 
        for 'lorem ipsum' will uncover many web sites <br>
        still in their infancy. Various versions have 
        evolved over the years, sometimes by accident, 
        sometimes on purpose (injected humour and the like).
        
      </p>
      </div>
      <div class="tabPanel">
        <p>
          It is a long established fact that a reader will be
          distracted by the readable content of a page when 
          looking at its layout. The point of using Lorem 
          Ipsum is that it has a more-or-less normal 
          distribution of letters, as opposed to using <br>
          'Content here, content here', making it look 
          like readable English. Many desktop publishing 
          packages and web page editors now use Lorem 
          Ipsum as their default model text, and a search 
          for 'lorem ipsum' will uncover many web sites <br>
          still in their infancy. Various versions have 
          evolved over the years, sometimes by accident, 
          sometimes on purpose (injected humour and the like).<br><br><br>
          It is a long established fact that a reader will be
          distracted by the readable content of a page when 
          looking at its layout. The point of using Lorem 
          Ipsum is that it has a more-or-less normal 
          distribution of letters, as opposed to using <br>
          'Content here, content here', making it look 
          like readable English. Many desktop publishing 
          packages and web page editors now use Lorem 
          Ipsum as their default model text, and a search 
          for 'lorem ipsum' will uncover many web sites <br>
          still in their infancy. Various versions have 
          evolved over the years, sometimes by accident, 
          sometimes on purpose (injected humour and the like).
          
        </p>
      </div>
      <div class="tabPanel">
        <p>
          It is a long established fact that a reader will be
          distracted by the readable content of a page when 
          looking at its layout. The point of using Lorem 
          Ipsum is that it has a more-or-less normal 
          distribution of letters, as opposed to using <br>
          'Content here, content here', making it look 
          like readable English. Many desktop publishing 
          packages and web page editors now use Lorem 
          Ipsum as their default model text, and a search 
          for 'lorem ipsum' will uncover many web sites <br>
          still in their infancy. Various versions have 
          evolved over the years, sometimes by accident, 
          sometimes on purpose (injected humour and the like).<br><br><br>
          It is a long established fact that a reader will be
          distracted by the readable content of a page when 
          looking at its layout. The point of using Lorem 
          Ipsum is that it has a more-or-less normal 
          distribution of letters, as opposed to using <br>
          'Content here, content here', making it look 
          like readable English. Many desktop publishing 
          packages and web page editors now use Lorem 
          Ipsum as their default model text, and a search 
          for 'lorem ipsum' will uncover many web sites <br>
          still in their infancy. Various versions have 
          evolved over the years, sometimes by accident, 
          sometimes on purpose (injected humour and the like).
          
        </p>
      </div>
      
     </div>

     <!--Popular items section-->
     <section id="product1" class="section-p1">
        <h2>Popular items</h2>
        <hr>
        <div class="pro-container">
        <?php
         $result = $database2->getData();
         while($row = mysqli_fetch_assoc($result)){
          component3($row['product_name'],$row['product_price'],$row['product_image'],$row['id']);
      }
   
    ?>
        </div>
    </section>

    <!--Footer section-->
     <footer>
        <div class ="main-content">
          <div class="left box">
            <p>&copy Copyright <script>document.write(new Date().getFullYear())</script> <br> All Rights reserved.</p>
            <br>
            <h3>CONTACT</h3>
            <br>
            <div class="content">
  
              <p>Headquarters:<br> 5600, Blvd. des Galeries, Bur 530 <br> Quèbec, Quèbec G2K 2H6 <br><br> <a href="mailto:contact@osf-global.com">contact@osf-global.com</a> <br><br> <a href="tel:+1 (888) 548-4344">+1 (888) 548-4344</a></p>
            </div>
  
          </div> 
  
          <div class="center box">
            <h3>CATEGORIES</h3>
            <div class="content">
              <br>
              <br>
              <a class href="pages/error.html">Alchool</a><br><br>
              <a class href="pages/error.html">Art</a><br><br>
              <a class href="pages/error.html">Books</a><br><br>
              <a class href="pages/error.html">Drinks</a><br><br>
              <a class href="pages/error.html">Electronics</a><br><br>
              
  
            </div>
  
          </div>
  
          <div class="center2 box">
            <h3><br></h3>
            <div class="content">
              <br>
              <br>
              <a class href="pages/error.html">Home</a><br><br>
              <a class href="pages/error.html">Jewelry</a><br><br>
              <a class href="pages/error.html">Kids & Baby</a><br><br>
              <a class href="pages/error.html">Men's Fashion</a><br><br>
              <a class href="pages/error.html">Mobile</a><br><br>
              <a class href="pages/error.html">Motorcycles</a><br><br>
              <a class href="pages/error.html">Movies</a><br><br>
              <a class href="pages/error.html">Music</a><br><br>
              
  
            </div>
  
          </div>
  
          <div class="center3 box">
            <h3><br></h3>
            <div class="content">
              <br>
              <br>
              <a class href="pages/error.html">Sport</a><br><br>
              <a class href="pages/error.html">Toys</a><br><br>
              <a class href="pages/error.html">Travel</a><br><br>
              <a class href="pages/error.html">Women's Fashion</a><br><br>
              
  
            </div>
  
          </div>
  
          <div class="center4 box">
            <h3>ABOUT</h3>
            <div class="content">
              <br>
              <br>
              <a class href="pages/error.html">About us</a><br><br>
              <a class href="pages/error.html">Delivery</a><br><br>
              <a class href="pages/error.html">Testimonials</a><br><br>
              <a class href="pages/error.html">Contact</a><br><br>
  
            </div>
  
          </div>
  
          
  
  
  
  
          <div class="right box">
            <div class="content">
              <a href="https://www.facebook.com/"><span class="fa fa-facebook " style="font-size:32px;color:grey" >&nbsp</span></a>
              <a href="https://plus.google.com/"><span class="fa fa-google-plus" style="font-size:36px;color:grey">&nbsp</span></a>
              <a href="https://twitter.com/"><span class="fa fa-twitter" style="font-size:36px;color:grey">&nbsp</span></a>
              <a href="https://pinterest.com/"><span class="fa fa-pinterest" style="font-size:36px;color:grey">&nbsp</span></a>
            </div>
  
          </div>
        </div>
        
  
  
      </footer>

      <!--scripts-->
      <script src="scripts/cart.js"></script>
      <script src="scripts/productcart.js"></script>
      <script src="scripts/tab.js"></script>

      <!--Script for displaying smaller images in the Main product section-->
      <script>
        var MainImg = document.getElementById('MainImg');
        var smallimg = document.getElementsByClassName('small-img');

        smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;
        }

        smallimg[1].onclick = function(){
            MainImg.src = smallimg[1].src;
        }

        smallimg[2].onclick = function(){
            MainImg.src = smallimg[2].src;
        }

        smallimg[3].onclick = function(){
            MainImg.src = smallimg[3].src;
        }
      </script>
     
</body>
</html>