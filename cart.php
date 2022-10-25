<?php 

session_start();

require_once("php/CreateDb.php");
require_once("php/component.php");

$db = new CreateDb("Productdb","Producttb");

$conn = new mysqli('localhost','root','','productdb');

/*if(isset($_POST['remove'])){
  
    
    if($_GET['action'] == 'remove'){
        foreach($_SESSION['cart'] as $key => $value){
            if($value["product_id"] == $_GET['id']){
              
              
                //unset($_SESSION['cart'][$key]);
                
                echo "<script>alert('Product has been removed')</script>";
                echo "<script>window.location = 'cart.php'</script>";
            }
        }
        


    }
}*/


if(isset($_POST['del'])){
  $id = $_POST['product_id'];
  $delquery = "DELETE FROM carttb WHERE id=$id";
  $result = mysqli_query($conn,$delquery);
  if($result){
  echo "<script>alert('Product has been removed')</script>";
  echo "<script>window.location = 'cart.php'</script>";
}
else{
  echo "<script>alert('Product not removed')</script>";
  echo "<script>window.location = 'cart.php'</script>";
}
};


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    <?php include "styles/index.css" ?>
   </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    
</head>
<body>
    
  <!--Navigation bar-->
    <nav class="nav navbar navbar-expand-lg">
    
        
       <div class="wrapper" >
        
        
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
                                <a href="error.html" class="dropdown-link">
                                  Accesories

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Alchool

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Art

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Books

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Drink

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Electronics

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Flower & Plants

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Food

                                </a>

                            </li>

                        </ul></div>

                        <div class="row">
                            <header><br></header>
                           <ul class="mega-links">

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Gadgets

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Garden

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Grocery

                                </a>

                            </li>

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Home

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Jewelry

                                </a>

                            </li>

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Kids & Baby

                                </a>

                            </li>

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Men's Fashion

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Mobile

                                </a>

                            </li>

                        </ul></div>

                        <div class="row">
                            <header><br></header>
                        <ul class="mega-links">

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Motorcycles

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Movies

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Music

                                </a>

                            </li>

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Office

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Pets

                                </a>

                            </li>

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Romantic

                                </a>

                            </li>

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Sport

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Toys

                                </a>

                            </li>

                        </ul></div>

                        <div class="row">
                            <header> &nbsp SALE</header>
                        <ul class="mega-links">

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Accessories

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Alchool

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Art

                                </a>

                            </li>

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Books

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Drink

                                </a>

                            </li>

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Electronics

                                </a>

                            </li>

                            <li>
                                <a href="error.html" class="dropdown-link">
                                  Flower & Plants

                                </a>

                            </li>
                            <li>
                                <a href="error.html" class="dropdown-link">
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
        <div class="form-select" aria-label="Default select example">
          <select class="currency">
                <option value="us">US</option>
                <option value="eur">EUR</option>
                <option value="ron">RON</option>
        </select>

        </div>

        </li>
        <li class="select-menu">
        <div class="form-select" aria-label="Default select example">
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
      <li><i id="show-login" class="fa fa-user" style="font-size:20px"></i></li>
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
        <a href="cart.php"  style="text-decoration:none"><i class="fa fa-shopping-bag" style="font-size:20px"></i>
        <!--<span id="cart_count" class="text-warning bg-light" style="color:yellowgreen;text-align: center;border-radius: 3rem;font-size:19px;font-weight:600;">0</span>-->    
       
        
        </a>
       <!-- <span class='badge badge-warning' id='lblCartCount'> 5 </span> -->
        </div>
      
      </li>
    </div>
      
    </div>
    </nav>



    <div class="container-fluid">
        <div class="row px-5">
            <div class="col-md-7">
                <div class="shopping-cart1" style="padding:5% 0";>
                    <h6>MY CART</h6>
                    <hr>
                    <?php 

                    $total = 0;
                    
                 
                   

                  

                   /*while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['id'] == $id){
                                cartElement($row['product_image'],$row['product_name'],$row['product_price'],$row['id']);
                                $total = $total  + (int)$row['product_price'];
                            }
                        }
                    }*/

                    //$result = $db->getcartData();
                    if($result = $db->getcartData()){
                    while($row = mysqli_fetch_assoc($result)){
                      cartElement($row['product_image'],$row['product_name'],$row['product_price'],$row['id']);
                      $total = $total  + (int)$row['product_price'];
                    }
                    
                  }else{
                    echo "<h5>Cart is empty</h5>";
                  }
                    
                    ?>

                </div>

            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25" >

            <div class="pt-4" >
                <h6>PRICE DETAILS</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                    <?php 
                        if(isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<h6>Price ($count items) </h6>";
                        }else{
                            echo "<h6>Price (0 items) </h6>";
                        }
                        
                    ?>
                    <h6>Delivery Charges</h6>
                    <hr>
                    <h6>Amount Payable</h6>
                    <hr>
                    </div>
                    <div class="col-md-6">
                        <h6>
                            $<?php echo $total;?>
                        </h6>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        <h6>$<?php 
                            echo $total;
                        ?></h6>
                        <hr>
                    </div>
                    
                    <form action="checkout.php" method="POST" class="mt-3 formsubmit">
                      <div class="col-md-10 submititems">
                        <label>Name:</label><input class="form-control " type="text" name="name" placeholder="Enter name"><br>
                        <label>Surname:</label><input class="form-control " type="text" name="surname" placeholder="Enter surname"><br>
                        <button class="col-md-10 mt-3 mb-4 btn btn-success" type="submit" name="submit">Submit</button>
                     </div>
                    </form>

                    
                </div>
            </div>

            </div>
            
        </div>
        
    </div>

    <div class="home-page">
      <a href="index.php" style="padding: 0 3%;font-size:20px;font-weight:600;color:yellowgreen;">Go back to home page</a>
    </div>

    <div class="orders-page">
      <a href="orders.php" style="padding: 0 3%;font-size:20px;font-weight:600;color:yellowgreen;top:10px"><i class="fa fa-clipboard" style="color:yellowgreen"></i>  See past orders</a>
    </div>

   <hr>

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
            <a class href="error.html">Alchool</a><br><br>
            <a class href="error.html">Art</a><br><br>
            <a class href="error.html">Books</a><br><br>
            <a class href="error.html">Drinks</a><br><br>
            <a class href="error.html">Electronics</a><br><br>
            

          </div>

        </div>

        <div class="center2 box">
          <h3><br></h3>
          <div class="content">
            <br>
            <br>
            <a class href="error.html">Home</a><br><br>
            <a class href="error.html">Jewelry</a><br><br>
            <a class href="error.html">Kids & Baby</a><br><br>
            <a class href="error.html">Men's Fashion</a><br><br>
            <a class href="error.html">Mobile</a><br><br>
            <a class href="error.html">Motorcycles</a><br><br>
            <a class href="error.html">Movies</a><br><br>
            <a class href="error.html">Music</a><br><br>
            

          </div>

        </div>

        <div class="center3 box">
          <h3><br></h3>
          <div class="content">
            <br>
            <br>
            <a class href="error.html">Sport</a><br><br>
            <a class href="error.html">Toys</a><br><br>
            <a class href="error.html">Travel</a><br><br>
            <a class href="error.html">Women's Fashion</a><br><br>
            

          </div>

        </div>

        <div class="center4 box">
          <h3>ABOUT</h3>
          <div class="content">
            <br>
            <br>
            <a class href="error.html">About us</a><br><br>
            <a class href="error.html">Delivery</a><br><br>
            <a class href="error.html">Testimonials</a><br><br>
            <a class href="error.html">Contact</a><br><br>

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

    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script src="scripts/cookie.js"></script>
    <script src="scripts/popup.js"></script>
    <script src="scripts/error.js"></script>
    <script src="scripts/cart.js"></script>
    <script src="scripts/load.js"></script>
    

    

  
</body>
</html>
