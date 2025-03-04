<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>lenskart</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    
      <div class="col-sm-6"> <i class="fa fa-envelope"></i> lenskart@gmail.com 
      </div>
                    
      <div class="col-sm-6"> <i class="fa fa-phone-alt"></i> +09643420312 </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="product-list.php" class="nav-item nav-link">Products</a>
                            <a href="product-detail.php" class="nav-item nav-link">Product Detail</a>
                            <a href="cart.php" class="nav-item nav-link active">Cart</a>
                            <a href="checkout.php" class="nav-item nav-link">Checkout</a>
                            <a href="my-account.php" class="nav-item nav-link">My Account</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Pages</a>
                                
          <div class="dropdown-menu"> <a href="wishlist.php" class="dropdown-item">Wishlist</a> 
            <a href="login.php" class="dropdown-item">Login & Register</a> <a href="contact.php" class="dropdown-item">Contact 
            Us</a> </div>
                            </div>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                                
          <div class="dropdown-menu"> <a href="#" class="dropdown-item">Login</a> 
            <a href="#" class="dropdown-item">Register</a> </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    
      <div class="col-md-3"> 
        <div class="logo"> <a href="index.php"> <img src="image/icon2.png" alt="Logo" height="220" width="350"> 
          </a> </div>
      </div>
                    
      <div class="col-md-6"> 
        <div class="search"> 
          <input type="text" placeholder="Search">
          <button><i class="fa fa-search"></i></button>
        </div>
      </div>
                    
      <div class="col-md-3"> 
        <div class="user"> <a href="wishlist.php" class="btn wishlist"> <i class="fa fa-heart"></i> 
          <span>(0)</span> </a> <a href="cart.php" class="btn cart"> <i class="fa fa-shopping-cart"></i> 
          <span>(0)</span> </a> </div>
      </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Cart</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Cart Start -->
        <div class="cart-page">
            <div class="container-fluid">
                <div class="row">
                    
      <div class="col-lg-8"> 
        <div class="cart-page-inner"> 
          <div class="table-responsive"> 
            <table class="table table-bordered">
              <thead class="thead-dark">
                <tr> 
                  <th>Product</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th>Remove</th>
                </tr>
              </thead>
              <tbody class="align-middle">
                <tr> 
                  <td> <div class="images"> <a href="#"><image src="image/image37.jpg" alt="Image"></a> 
                      <p>spack</p>
                    </div></td>
                  <td>1500</td>
                  <td> <div class="qty"> 
                      <button class="btn-minus"><i class="fa fa-minus"></i></button>
                      <input type="text" value="1">
                      <button class="btn-plus"><i class="fa fa-plus"></i></button>
                    </div></td>
                  <td>1500</td>
                  <td><button><i class="fa fa-trash"></i></button></td>
                </tr>
                <tr> 
                  <td> <div class="image"> <a href="#"><image src="image/image39.jpg" alt="Image"></a> 
                      <p>goggles</p>
                    </div></td>
                  <td>1800</td>
                  <td> <div class="qty"> 
                      <button class="btn-minus"><i class="fa fa-minus"></i></button>
                      <input type="text" value="1">
                      <button class="btn-plus"><i class="fa fa-plus"></i></button>
                    </div></td>
                  <td>1800</td>
                  <td><button><i class="fa fa-trash"></i></button></td>
                </tr>
                <tr> 
                  <td> <div class="image"> <a href="#"><img src="image/imagee.jpg" alt="Image"></a> 
                      <p>lense</p>
                    </div></td>
                  <td>2000</td>
                  <td> <div class="qty"> 
                      <button class="btn-minus"><i class="fa fa-minus"></i></button>
                      <input type="text" value="1">
                      <button class="btn-plus"><i class="fa fa-plus"></i></button>
                    </div></td>
                  <td>2000</td>
                  <td><button><i class="fa fa-trash"></i></button></td>
                </tr>
                <tr> 
                  <td> <div class="img"> <a href="#"><img src="image/image57.jpg" alt="Image"></a> 
                      <p>sports goggles</p>
                    </div></td>
                  <td>2500</td>
                  <td> <div class="qty"> 
                      <button class="btn-minus"><i class="fa fa-minus"></i></button>
                      <input type="text" value="1">
                      <button class="btn-plus"><i class="fa fa-plus"></i></button>
                    </div></td>
                  <td>2500</td>
                  <td><button><i class="fa fa-trash"></i></button></td>
                </tr>
                <tr> 
                  <td> <div class="image"> <a href="#"><img src="image/image33.jpg" alt="Image"></a> 
                      <p>girls metal</p>
                    </div></td>
                  <td>500</td>
                  <td> <div class="qty"> 
                      <button class="btn-minus"><i class="fa fa-minus"></i></button>
                      <input type="text" value="1">
                      <button class="btn-plus"><i class="fa fa-plus"></i></button>
                    </div></td>
                  <td>500</td>
                  <td><button><i class="fa fa-trash"></i></button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
                    
      <div class="col-lg-4"> 
        <div class="cart-page-inner"> 
          <div class="row"> 
            <div class="col-md-12"> 
              <div class="coupon"> 
                <input type="text" placeholder="Coupon Code">
                <button>Apply Code</button>
              </div>
            </div>
            <div class="col-md-12"> 
              <div class="cart-summary"> 
                <div class="cart-content"> 
                  <h1>Cart Summary</h1>
                  <p>Sub Total<span>5000</span></p>
                  <p>Shipping Cost<span>$500</span></p>
                  <h2>Grand Total<span>$5500</span></h2>
                </div>
                <div class="cart-btn"> 
                  <button>Update Cart</button>
                  <button>Checkout</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
                </div>
            </div>
        </div>
        <!-- Cart End -->
        
        <!-- Footer Start -->
        
<div class="footer"> 
  <div class="container-fluid"> 
    <div class="row"> 
      <div class="col-lg-3 col-md-6"> 
        <div class="footer-widget"> 
          <h2>Get in Touch</h2>
          <div class="contact-info"> 
            <p><i class="fa fa-map-marker"></i>Shop no G2,GF,Peri plaza Complex Sardar Bagh near alkapuri socity,junagadh,Gujarat 362001</p>
            <p><i class="fa fa-envelope"></i>www.lenskart.com</p>
            <p><i class="fa fa-phone"></i>+09643420312</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6"> 
        <div class="footer-widget"> 
          <h2>Follow Us</h2>
          <div class="contact-info"> 
            <div class="social"> <a href=""><i class="fab fa-twitter"></i></a> 
              <a href=""><i class="fab fa-facebook-f"></i></a> <a href=""><i class="fab fa-linkedin-in"></i></a> 
              <a href=""><i class="fab fa-instagram"></i></a> <a href=""><i class="fab fa-youtube"></i></a> 
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6"> 
        <div class="footer-widget"> 
          <h2>Company Info</h2>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Condition</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6"> 
        <div class="footer-widget"> 
          <h2>Purchase Info</h2>
          <ul>
            <li><a href="#">Pyament Policy</a></li>
            <li><a href="#">Shipping Policy</a></li>
            <li><a href="#">Return Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row payment align-items-center"> 
      <div class="col-md-6"> 
        <div class="payment-method"> 
          <h2>We Accept:</h2>
          <img src="img/payment-method.png" alt="Payment Method" /> </div>
      </div>
      <div class="col-md-6"> 
        <div class="payment-security"> 
          <h2>Secured By:</h2>
          <img src="img/godaddy.svg" alt="Payment Security" /> <img src="img/norton.svg" alt="Payment Security" /> 
          <img src="img/ssl.svg" alt="Payment Security" /> </div>
      </div>
    </div>
  </div>
</div>
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                    <p>Copyright &copy; <a href="contect_1.php">lenskart</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
						<!--/*** This template is free as long as you keep the footer author�s credit link/attribution link/backlink. If you'd like to use the template without the footer author�s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->					
                        <p>Designed By <a href="contect_1.php">PREKSHA JEMI HETVI KHYATI</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
y"   �gŽm��