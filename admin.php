<?php
require 'php/addproduct.php'
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.6.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="Business Website Templates Free Download">
  <title>Headfoo-Admin-pannel</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
    <!-- navbar section -->
  <section class="menu cid-qIuNheldqe" once="menu" id="menu1-p" data-sortbtn="btn-primary">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top collapsed">
        <div class="navbar-brand">
            <!-- logo icon --> 
            <img src="assets/images/logo.png" alt=""><span>Plug it,Feel it.</span>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown navbar-nav-top-padding" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="#home">
                        Home
                    </a>
                    <a class="nav-link link text-black display-4" href="#about">
                        About
                    </a>
                    <a class="nav-link link text-black display-4" href="#service">
                        Services
                    </a>
                    <a class="nav-link link text-black display-4" href="#contact">
                        Contact us
                    </a>
                </li>		
		
			</ul>
            
        </div>
            <div class="icons-menu">
                <div class="soc-item">
                    <a href="#" >
                    <span class="mbr-iconfont socicon-twitter socicon" style="color: rgb(143, 68, 6);"></span>
                    </a>
                </div>
                <div class="soc-item">
                    <a href="#" >
                    <span class="mbr-iconfont socicon-facebook socicon" style="color: rgb(143, 68, 6);"></span>
                    </a>
                </div>
                <div class="soc-item">
                    <a href="#" >
                    <span class="mbr-iconfont socicon-instagram socicon" style="color: rgb(143, 68, 6);"></span>
                    </a>
                </div>    
            </div>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-white display-4" href="#">logout</a></div>
     
    </nav>
</section>
<!-- navbar section end -->
<!-- heroic section -->
<section class="header3 cid-qIjDinvjPw mbr-fullscreen mbr-parallax-background" id="header3-4" data-sortbtn="btn-primary">
    <div class="container align-left" id="home">
        <div class="row justify-content-center mbr-white">
            <!-- <div class="media-container-column mbr-white col-md-12"> -->
                <div class="mbr-white col-md-12">
                    <h1 class="mbr-section-title mbr-white mbr-fonts-style align-left display-1"><strong>Admin Pannel</strong></h1>
                    
                    <div class="mbr-section-btn align-left"><a class="btn btn-lg btn-white display-4" href="#">Add Product Now</a></div>
                </div>
           
            </div>
        </div>
    
    
</section>
<!-- heroic section end -->



<!-- title section -->
<section class="cid-qIjMfqP1Ii" id="content7-k" data-sortbtn="btn-primary">  
    <div class="container" id="add-product">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 align-center">
                <h2 class="mbr-section-title align-center mbr-fonts-style mbr-bold display-2">Add Product</h2>
            </div>
        </div>
    </div>
</section>
<!-- tittle section end -->

<!-- Add Product Section -->
<section class="features19 cid-qIjES4e5vV" id="features19-5" data-sortbtn="btn-primary">
  
    <div class="container" id="add">
        <h2 class="mbr-section-title align-left mbr-fonts-style display-2">
            Add Product 🔥</h2>
            <div class="container">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" name="name" id="inputtext" placeholder="PRODUCT NAME">
                    </div>
          
                    <div class="form-group col-md-6">
                      <input type="price" class="form-control" name="price" id="inputprice" placeholder="PRODUCT PRICE">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
          
                      <div class="form-group">
                        <label for="">PRODUCT IMAGE</label>
                        <a class="form-control btn-secondary" style=" display: inline-block ; width: auto;" onclick="document.getElementById('getFile').click()">Browser..</a>
                        <input type='file' id="getFile" style="display:none" name="image">
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="submit" class="form-control btn-secondary" name="submit" value="ADD PRODUCT">
                    </div>
                  </div>
              </div>

        
       
    </div>
</section>
<!-- Add Product Section End -->

<!-- ---------------------------------------------------------------------------------------------------------------- -->
<!-- tittle Table -->
<section class="cid-qIjMfqP1Ii" id="content7-k" data-sortbtn="btn-primary">  
    <div class="container" id="data">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 align-center">
                <h2 class="mbr-section-title align-center mbr-fonts-style mbr-bold display-2">Product Table</h2>
            </div>
            
        </div>
    </div>
</section>
<!-- tittle table end -->

<!-- Porduct table -->
<section class="features19 cid-qIjES4e5vV">
  
    <div class="container">
        <h2 class="mbr-section-title align-left mbr-fonts-style display-2">
            Product Table 🔥</h2>
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                <div class="table-responsive ">
                    <table class="table table-hover">
                        <thead>
                            <tr class="bg-warning">
                                <th>#</th>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td  class="align-middle">1</td>
                                <td  class="align-middle">00</td>
                                <td  class="align-middle">Product-1</td>
                                <td  class="align-middle">Image-1</td>
                                <td><div class="mbr-section-btn"><a class="btn btn-sm btn-info   display-4" href="#">Update</a></div></td>
                                <td><div class="mbr-section-btn"><a class="btn btn-sm btn-warning display-4" href="#">Remove</a></div></td>
                            </tr>
                            <tr>
                                <td  class="align-middle">2</td>
                                <td  class="align-middle">10</td>
                                <td  class="align-middle">Product-2</td>
                                <td  class="align-middle">Image-2</td>
                                <td><div class="mbr-section-btn"><a class="btn btn-sm btn-info   display-4" href="#">Update</a></div></td>
                                <td><div class="mbr-section-btn"><a class="btn btn-sm btn-warning display-4" href="#">Remove</a></div></td>
                            </tr>
                            
                        </tbody>
                    
                        
                    </table>
                </div>
            </div>
        
       
    </div>
</section>
<!-- Porduct table End -->




<section class="cid-qIjMDc36tP" id="footer2-l" data-sortbtn="btn-primary">

    <div class="container">
        <div class="row align-center justify-content-center align-items-center">
            <div class="logo-section col-sm-12 col-lg-4">
                <a href="#" style=""><img src="assets/images/logo.png" height="128" alt="business html template" title="" style="height: 3.8rem;">
                Headfoo.</a>

            </div>
            <div class="col-sm-12 col-lg-4 mbr-text mbr-fonts-style mbr-light display-7">
                © 2021 All Rights Reserved Terms of Use and Privacy Policy
            </div>
            <div class="social-media col-sm-12 col-lg-4">
                <ul>
                    <li>
                      <a class="icon-transition" href="#">
                        <span class="mbr-iconfont socicon-facebook socicon"></span>
                      </a>
                    </li>
                    <li>
                      <a class="icon-transition" href="#">
                        <span class="mbr-iconfont socicon-twitter socicon"></span>
                      </a>
                    </li>
                    <li>
                      <a class="icon-transition" href="#">
                        <span class="mbr-iconfont socicon-linkedin socicon"></span>
                      </a>
                    </li>
                    <li>
                      <a class="icon-transition" href="#">
                        <span class="mbr-iconfont socicon-youtube socicon"></span>
                      </a>
                    </li>
                    <li>
                      <a class="icon-transition" href="#">
                        <span class="mbr-iconfont socicon-rss socicon" style=""></span>
                      </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/gallery/player.min.js"></script>
  <script src="assets/gallery/script.js"></script>
  
  
</body>
</html>
<script>
          if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
          }
          </script>