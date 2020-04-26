
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>Rodella Labs India</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" /> -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- All core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/all.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/colors.css" rel="stylesheet">
    <link href="css/magicscroll.css" rel="stylesheet">
    <link href="css/contact.css" rel="stylesheet">
    <script src="js/magicscroll.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>

<body>

  <div class="navbar-fixed" style="margin-top: 0px;">
    <nav class="add">
    <div class="nav-wrapper">
      <a href="index.html" class="brand-logo center"><p class='rodella fontbody'>rodella</p></a>
      <a href='#' class='sidenav-trigger' data-target='mobile-nav'>
        <i class='material-icons'>menu</i>
      </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class='margin-3'><a href="#contact"><p class='p'>Contact</p></a></li>
        <li class='margin-4'><a href="gallery.html"><p class='p'>Gallery</p></a></li>
    </ul>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li class='margin'><a href="index.html"><p class='p'>About</p></a></li>
        <li class='margin-2'><a href="tech.html"><p class='p'>Technology</p></a></li>
    </ul>
      
    </div>
  </nav>
  <ul class='sidenav' id='mobile-nav' style="margin-top: 20px; margin-left: -100px; text-align: center;">
    <li class='color'><a  href="index.html"><p class='col'>About</p></a></li>
        <li class='color'><a  href="tech.html"><p class='color'>Technology</p></a></li>
     <li class='color'><a href="#contact"><p class='color'>Contact</p></a></li>
        <li class='color'><a href="gallery.html"><p class='color'>Gallery</p></a></li>
  </ul>
  </div>

  <section id="contact" class="section">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <h2 style="color:#3b7f25;text-align: center;">
                    <?php
                        if(isset($_GET['msg'])) echo $_GET['msg']
                        ?>
                        </h2>
                </div>
            </div>
        </div>
    </div>

        
        
</section>


<footer class="footer section" style="background-color: black; border-top: 1px solid white" id="contact" >
    <div class="container"> 
        <div class="row">
            <div class="col-md-4">
                <div class="widget">
                    <a href="index.html" title=""><img src="images/rodella_icon1.png" class="footer-logo" style="margin-left: 5px;" alt=""></a>
                    <h4 class="widget-title">
                        
                    </h4>
                      
                                    
                </div><!-- end widget -->
            </div><!-- end col -->
            <div class="col-md-8 mobmartop30">
                <div class="widget">

                    <div class="widget">
                        <div class="contact-widget">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="widget-title">
                                        <i class="fa fa-map-marker"></i> Lab
                                    </h4>  
                                    <p>1st floor, Composites Technology Center, 
                                    Dept. of Aerospace Engineering, IIT Madras,
                                    Chennai </p>
                                </div><!-- end col -->

                                <div class="col-md-4">
                                    <h4 class="widget-title">
                                        <i class="fa fa-phone"></i> Phone
                                    </h4>  
                                    <p>+91 6380 897 553</p>
                                </div><!-- end col -->

                                <div class="col-md-4">
                                    <h4 class="widget-title">
                                        <i class="fa fa-envelope-open-o"></i>  Email
                                    </h4>  
                                    <p>query@rodellalabs.in</p>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end contact-widget -->
                    </div><!-- end widget -->
                </div><!-- end widget -->
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row">
            <div class="col-md-12 text-center">
                <div class="footer-social">
                    <div itemscope="" itemtype="http://schema.org/Organization">
                        <a class="social-icon" target="_blank" itemprop="sameAs" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="social-icon" target="_blank" itemprop="sameAs" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="social-icon" target="_blank" itemprop="sameAs" href="#"><i class="fa fa-google-plus"></i></a>
                        <a class="social-icon" target="_blank" itemprop="sameAs" href="#"><i class="fa fa-code"></i></a>
                    </div>
                </div>
                <div class="footer-copy">
                    <p>© 2020 All Rights Reserved to <a href="#">Rodella Technologies Private Limited</a> </p>
                </div><!-- end copy -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</footer><!-- end footer -->

<!-- Loader 
    ================================================  -->
    <div class="preloader-background">
        <div class="frame">
            <div class="rounded">
                <div class="dot dot-1"></div>
                <div class="dot dot-2"></div>
                <div class="dot dot-3"></div>
            </div>
        </div>
    </div>
        
<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>
    <script src="js/custom.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        var hsuma = 0;
        $(document).ready(function(){
        $(".next").click(function(){
            hsuma += -100;
            if(hsuma>=-200)
            $(".h-items").animate({marginLeft:hsuma+"%"},"medium");
            else{
            hsuma = 0;
            $(".h-items").animate({marginLeft:hsuma+"%"},"medium");
            }
        });
        
        
        $(".prev").click(function(){
            if(hsuma==0){
            hsuma = -200;
            $(".h-items").animate({marginLeft:hsuma+"%"},",medium");
            }
            else{
            hsuma += 100;
            $(".h-items").animate({marginLeft:hsuma+"%"},"medium");
            }
        });
        });
    </script>

    <script>

         $(document).ready(function(){
          
          $(window).scroll(function(){

            if($(window).scrollTop()>-10){
              $('nav').addClass('add');
            }else{
              $('nav').removeClass('add');
            }

          });

     });

         $(document).ready(function(){
          
          $(window).scroll(function(){

            if($(window).scrollTop()>800){
              $('.sidenav').addClass('colc');
            }else{
              $('.sidenav').removeClass('colc');
            }

          });

     });
        
    

    $(document).ready(function(){
        $('.sidenav').sidenav();
    });

    document.addEventListener("DOMContentLoaded", function(){
       $('.preloader-background').delay(1000).fadeOut();
       $('.preloader-wrapper')
        .delay(1000)
        .fadeOut();
});
  </script>
   

</body>
</html>