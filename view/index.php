
<?php
    require_once 'libs/model.php';
    require_once 'admin/class/message.class.php';
    $message=new message;
    $error=[];


    if (isset($_POST['submit']))
    {
        if (isset($_POST['name'])&& !empty($_POST['name'])) 
        {
            $name = $message->escapestring($_POST['name']);
        }
        else
        {
            $error[0] = "Phone No. Must Be Provided";
        }
      
        
        if (isset($_POST['phone'])&& !empty($_POST['phone'])) 
        {
            $phone = $message->escapestring($_POST['phone']);
        }
        else
        {
            $error[0] = "Phone No. Must Be Provided";
        }
       
        
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        }

         if (isset($_POST['message'])&& !empty($_POST['message'])) {
            $message = $_POST['message'];
        }
        else
        {
            $error[0] = "Message must be provided";
        }
      
        
        if (count($error)==0)
        {
            $message->name = $name;
            $message->phone = $phone;
            $message->email = $email;
            $message->message = $message;
            
            $ask = $contact->insertmessage();
            if ($ask==1)
            {
                echo "<script>alert('inserted successfully')</script>";
            }
            else
            {
                echo "<script>alert('Failed to insert')</script>";
            }

        }
    }
?>



<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from thunder-team.com/void/designer.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 May 2018 03:05:22 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Void is a personal portfolio template for individuals availabe in themeforest.net" />
		<meta name="keywords" content="portfolio template, personal portfolio, CV template" />
		<meta name="robots" content="index, follow" />
		<title>Arjun Vision</title>
    
    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="view/css/bootstrap.min.css" />
		<link rel="stylesheet" href="view/css/void-designer.css" />
		<link rel="stylesheet" href="view/css/ionicons.min.css" />
    <link rel="stylesheet" href="view/css/font-awesome.min.css" />

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="view/media/fav.png"/>
	</head>
  
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  
    <!-- Preloader -->
    <div class="preloader">
      <div class="sk-cube-grid">
        <div class="sk-cube sk-cube1"></div>
        <div class="sk-cube sk-cube2"></div>
        <div class="sk-cube sk-cube3"></div>
        <div class="sk-cube sk-cube4"></div>
        <div class="sk-cube sk-cube5"></div>
        <div class="sk-cube sk-cube6"></div>
        <div class="sk-cube sk-cube7"></div>
        <div class="sk-cube sk-cube8"></div>
        <div class="sk-cube sk-cube9"></div>
      </div>
    </div>
  
    <!-- Navigation
    ================================================= -->
    <header id="header" class="on-scroll">
      <nav class="navbar navbar-default navbar-fixed-top nav-center-aligned">
        <div class="container-fluid">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="menu-sign">Menu <img src="view/media/designer/menu.png" alt="" /></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a class="page-scroll" href="#intro"><span>01</span>Intro</a></li>
              <li><a class="page-scroll" href="#about"><span>02</span>About</a></li>
              <li><a class="page-scroll" href="#services"><span>03</span>Services</a></li>
              <li><a class="page-scroll" href="#skills"><span>04</span>Skills</a></li>
              <li><a class="page-scroll" href="#folio"><span>05</span>Portfolio</a></li>
              <li><a class="page-scroll" href="#testimonials"><span>06</span>Testimonials</a></li>
              <li><a class="page-scroll" href="#timeline"><span>07</span>Timeline</a></li>
              <li><a class="page-scroll" href="#footer"><span>08</span>Contact</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    
    <!-- Intro Section
    ================================================= -->
    <section id="intro">
      <div class="overflow-h">
        <div class="container-fluid">
          <ul id="scene" class="scene border fill">
            <li class="layer expand-width" data-depth="0.15"><img src="view/media/designer/intro-layer-1.png" alt="" class="img-responsive" /></li>
            <li class="layer expand-width" data-depth="0.25"><img src="view/media/designer/intro-layer-2.png" alt="" class="img-responsive" /></li>
            <li class="layer expand-width" data-depth="0.00"><div class="yellow-box"></div></li>
            <li class="layer expand-width" data-depth="0.40"><img src="view/media/designer/intro-layer-3.png" alt="" class="img-responsive" /></li><!-- Photo Section -->
            <li class="layer expand-width" data-depth="0.55"><img src="view/media/designer/intro-layer-4.png" alt="" class="img-responsive" /></li>
            <li class="layer expand-width" data-depth="0.65">
              <div class="my-info" data-parallax='{"y": 100}'>
                <h3>
                  <?php 
                  foreach ($this->intro as $i) {?>
                  <?php
                  echo $i->description ?>
                 <?php } ?>
                </h3>
                <h1 class="name">
                <?php 
                foreach ($this->intro as $i) {?>
                <?php
                echo $i->username ?>
                <?php } ?>
                </h1>
              </div>
            </li>
            <li class="layer expand-width" data-depth="1.40"><img src="view/media/designer/intro-layer-5.png" alt="" class="img-responsive" /></li>
          </ul>
        </div>
      </div>
    </section>
    
   <!-- About Me
    ================================================= -->
    <section id="about">
    	<div class="container wrapper">
    		<div class="row">
    			<div class="col-md-5">
            <div class="photo-block">
            
              <!--Parallax-->
              <ul class="element-scroll-parallax hidden-sm hidden-xs">
                <li data-parallax='{"rotateZ": 600, "smoothness": 200}'><img src="view/media/designer/about-spots.png" alt="" /></li>
              </ul><!--Parallax end-->
               <?php foreach ($this->about as $a) { ?>
            	<div class="photo">
                <img src="view/media/designer/gradient-circle.png" alt="" class="photo-frame" />
                <img src="<?php echo base_url().'admin/images/'.$a->image ?>" style="height: 330px ;" alt="It's Me" class="my-photo img-circle" />
              </div>
            	<ul class="social-link list-inline">
                <li><a href="<?php echo $a->fb_link ?>"><img src="view/media/designer/social/facebook.png" alt="" /></a></li>
                <li><a href="<?php echo $a->twt_link ?>"><img src="view/media/designer/social/twitter.png" alt="" /></a></li>
                <li><a href="<?php echo $a->insta_link ?>"><img src="view/media/designer/social/insta.png" alt="" /></a></li>
              </ul>
              <?php } ?>
            </div>
          </div>
    			<div class="col-md-7">
            <div class="text-me">
              <div class="headline">
              	<h2>About <span class="yellow">Me</span></h2>
              </div>
              <p>
               <?php 
                foreach ($this->about as $a) {?>
                <?php
                echo $a->description ?>
                <?php } ?>
             </p>
              <ul class="list-inline actions">
              	<li><button class="btn btn-primary">Hire Me</button></li>
              	<li><button class="btn btn-secondary">Folio</button></li>
              </ul>
            </div>
          </div>
    		</div>
    	</div>
    </section>

    <!-- Services
    ================================================= -->
    <section id="services">
      
      <!--Services Background-->
      <div class="service-background hidden-sm hidden-xs">
        <div class="violate"></div>
        <div class="dark"></div>
      </div><!--Background ends-->
      
      <!--Section Parallax-->
      <ul class="element-scroll-parallax hidden-sm hidden-xs">
      	<li data-parallax='{"x": -150, "y": 500, "perspective": 500}'><img src="view/media/designer/service-1.png" alt="" /></li>
        <li data-parallax='{"y": -300, "rotateY": 300}'><img src="view/media/designer/service-2.png" alt="" /></li>
        <li><img src="view/media/designer/texts.png" alt="" /></li>
        <li data-parallax='{"y": 200}'><img src="view/media/designer/circle-fill.png" alt="" /></li>
      </ul><!--Parallax end-->
      
      <div class="container wrapper">
        <div class="row">
          <div class="service-contents">
            <div class="col-md-4">
              <div class="headline">
                <h2 class="white">services</h2>
              </div>
              <p class="white">
                <?php 
                foreach ($this->services as $s) {?>
                <?php
                echo $s->services ?>
                <?php } ?>
              </p>
            </div>
            <div class="col-md-6 col-md-offset-2">
              <div class="service-item">
              	<span class="service-icon"><i class="icon ion-ios-browsers-outline"></i></span>
              	<div class="item-info">
              		<h3 class="white">UI/UX design</h3>
              		<p class="grey">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
              	</div>
              </div>
              <div class="service-item">
              	<span class="service-icon"><i class="icon ion-ios-lightbulb-outline"></i></span>
              	<div class="item-info">
              		<h3 class="white">Branding</h3>
              		<p class="grey">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
              	</div>
              </div>
              <div class="service-item">
              	<span class="service-icon"><i class="icon ion-ios-camera-outline"></i></span>
              	<div class="item-info">
              		<h3 class="white">Photography</h3>
              		<p class="grey">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
              	</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Skills
    ================================================= -->
    <?php 
      foreach ($this->skillsdetail as $s) {
        
      
    ?>
    <section id="skills">
    	<div class="container wrapper">
        <div class="row">
        	<div class="col-md-4 col-md-offset-1">
            <div class="photo-skills">
              <img src="<?php echo base_url().'admin/images/'.$s->image ?>" alt="" class="img-responsive img-skills" />
            </div>
          </div>
        	<div class="col-md-6">
            <div class="headline">
              <h2><span class="yellow">My</span> Skills</h2>
            </div>
            <p><?php echo $s->description ?></p>
            <div class="skillset">
              <div class="skillbar" data-percent="<?php echo $s->html5 ?>">
                <div class="title">HTML 5</div>
                <div class="count-bar">
                  <div class="count"></div>
                </div>
              </div>
              <div class="skillbar" data-percent="<?php echo $s->css4 ?>">
                <div class="title">CSS 4</div>
                <div class="count-bar">
                  <div class="count"></div>
                </div>
              </div>
              <div class="skillbar" data-percent="<?php echo $s->jquery ?>">
                <div class="title">jQuery</div>
                <div class="count-bar">
                  <div class="count"></div>
                </div>
              </div>
              <div class="skillbar" data-percent="<?php echo $s->php ?>">
                <div class="title">PHP</div>
                <div class="count-bar">
                  <div class="count"></div>
                </div>
              </div>
              <div class="skillbar" data-percent="<?php echo $s->photoshop ?>">
                <div class="title">Photoshop</div>
                <div class="count-bar">
                  <div class="count"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php } ?>
    

     <!-- Testimonials Section
    ================================================= -->
    <section id="testimonials">
    
      <!--Section Parallax-->
      <ul class="element-scroll-parallax hidden-sm hidden-xs">
        <li data-parallax='{"y": 200}'><img src="view/media/designer/testimonial-1.png" alt="" /></li>
        <li data-parallax='{"y": -400, "rotateY": 300}'><img src="view/media/designer/testimonial-2.png" alt="" /></li>
        <li data-parallax='{"y": 400, "rotateZ": 300}'><img src="view/media/designer/testimonial-3.png" alt="" /></li>
        <li data-parallax='{"y": -500}'><img src="view/media/designer/testimonail-4.png" alt="" /></li>
      </ul><!--Parallax End-->
      
      <div class="container wrapper white-bg">
        <div class="headline">
          <h2>Feedback</h2>
        </div>
        
        <!--Testimonial Carousel-->
        <div id="carousel-testimonials" class="carousel slide" data-ride="carousel">
          <?php 
                foreach ($this->testimonial as $t) { ?>
               
          <div class="carousel-inner">
            
            <div class="item active">
              <div class="testimonial-client">
                <div class="client-photo">
                  <img src="<?php echo base_url().'admin/images/'.$t->image ?>" alt="client" class="img-circle" />
                  <span class="quote"><i class="icon ion-quote"></i></span>
                </div>
                <h3> <?php echo $t->name ?></h3>
                <p class="text-muted"> <span class="orange"><?php echo $t->post ?></span></p>
              </div>
              <blockquote><?php echo $t->description ?></blockquote>
            </div>
             <?php } ?>
          
          <!--Carousel Indicator-->
          <ol class="carousel-indicators carousel-indicators-set">
            <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-testimonials" data-slide-to="1"></li>
            <li data-target="#carousel-testimonials" data-slide-to="2"></li>
          </ol>
        </div>
      </div>
    </section>
    <!-- Portfolio Section
    ================================================= -->
    <section id="folio">
    	<div class="container wrapper">
        <div class="headline">
          <h2><span class="yellow">My</span> Recent Projects</h2>
        </div>

        
        <!--Portfolio Menu-->
       <!--
        <ul class="folio-menu list-inline">
          <li class=" fil-cat" data-rel="all">All</li>
          <li class=" fil-cat" data-rel="web">Websites</li>
          <li class=" fil-cat" data-rel="flyers">Flyers</li>
          <li class=" fil-cat" data-rel="bcards">Business Cards</li>
        </ul> 
      -->
        
        <!--Portfolio Thumbnails-->
        <div id="portfolio">
          <div class="tile scale-anm web all">
            <img src="view/media/designer/portfolio/1.jpg" alt="" data-toggle="modal" data-target=".project-1" />
          </div>
          <div class="tile scale-anm web all">
            <img src="view/media/designer/portfolio/2.jpg" alt="" data-toggle="modal" data-target=".project-2" />
          </div>
          <div class="tile scale-anm flyers all">
            <img src="view/media/designer/portfolio/3.jpg" alt="" data-toggle="modal" data-target=".project-3" />
          </div>
          <div class="tile scale-anm web all">
            <img src="view/media/designer/portfolio/4.jpg" alt="" data-toggle="modal" data-target=".project-4" />
          </div>
          <div class="tile scale-anm bcards all">
            <img src="view/media/designer/portfolio/5.jpg" alt="" data-toggle="modal" data-target=".project-5" />
          </div>
          <div class="tile scale-anm web flyers all">
            <img src="view/media/designer/portfolio/6.jpg" alt="" data-toggle="modal" data-target=".project-6" />
          </div>
          <div class="tile scale-anm flyers all">
            <img src="view/media/designer/portfolio/7.jpg" alt="" data-toggle="modal" data-target=".project-7" />
          </div>
          <div class="tile scale-anm bcards all">
            <img src="view/media/designer/portfolio/8.jpg" alt="" data-toggle="modal" data-target=".project-8" />
          </div>
          <div class="tile scale-anm bcards all">
            <img src="view/media/designer/portfolio/9.jpg" alt="" data-toggle="modal" data-target=".project-9" />
          </div>
        </div>
        
        <!--Portfolio Modals-->
        <div class="modal fade project-1" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <img src="view/media/designer/portfolio/1.jpg" alt="" class="img-responsive" />
            </div>
          </div>
        </div>
        <div class="modal fade project-2" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <img src="view/media/designer/portfolio/2.jpg" alt="" class="img-responsive" />
            </div>
          </div>
        </div>
        <div class="modal fade project-3" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <img src="view/media/designer/portfolio/3.jpg" alt="" class="img-responsive" />
            </div>
          </div>
        </div>
        <div class="modal fade project-4" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <img src="view/media/designer/portfolio/4.jpg" alt="" class="img-responsive" />
            </div>
          </div>
        </div>
        <div class="modal fade project-5" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <img src="view/media/designer/portfolio/5.jpg" alt="" class="img-responsive" />
            </div>
          </div>
        </div>
        <div class="modal fade project-6" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <img src="view/media/designer/portfolio/6.jpg" alt="" class="img-responsive" />
            </div>
          </div>
        </div>
        <div class="modal fade project-7" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <img src="view/media/designer/portfolio/7.jpg" alt="" class="img-responsive" />
            </div>
          </div>
        </div>
        <div class="modal fade project-8" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <img src="view/media/designer/portfolio/8.jpg" alt="" class="img-responsive" />
            </div>
          </div>
        </div>
        <div class="modal fade project-9" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <img src="view/media/designer/portfolio/9.jpg" alt="" class="img-responsive" />
            </div>
          </div>
        </div><!--Portfolio Modals End-->

      </div>
    </section>
    
    <!-- Testimonials Section
    ================================================= -->
    <section id="testimonials">
    
      <!--Section Parallax-->
      <ul class="element-scroll-parallax hidden-sm hidden-xs">
      	<li data-parallax='{"y": 200}'><img src="view/media/designer/testimonial-1.png" alt="" /></li>
        <li data-parallax='{"y": -400, "rotateY": 300}'><img src="view/media/designer/testimonial-2.png" alt="" /></li>
        <li data-parallax='{"y": 400, "rotateZ": 300}'><img src="view/media/designer/testimonial-3.png" alt="" /></li>
        <li data-parallax='{"y": -500}'><img src="view/media/designer/testimonail-4.png" alt="" /></li>
      </ul><!--Parallax End-->
      
      <div class="container wrapper white-bg">
        <div class="headline">
          <h2>Feedback</h2>
        </div>
        
        <!--Testimonial Carousel-->
         <?php 
                foreach ($this->testimonial as $t) 
          { ?>
        <div id="carousel-testimonials" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            
            <div class="item active">
              <div class="testimonial-client">
                <div class="client-photo">
                  <img src="<?php echo base_url().'admin/images/'.$t->image ?>" alt="client" class="img-circle" />
                  <span class="quote"><i class="icon ion-quote"></i></span>
                </div>
                <h3><?php echo $t->name ?></h3>
                <p class="text-muted"> <span class="orange"><?php echo $t->post ?></span></p>
              </div>
              <blockquote><?php echo $t->description ?></blockquote>
            </div>

            <?php }  ?>
          
          <!--Carousel Indicator-->
          <ol class="carousel-indicators carousel-indicators-set">
            <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-testimonials" data-slide-to="1"></li>
            <li data-target="#carousel-testimonials" data-slide-to="2"></li>
          </ol>
        </div>
      </div>
    </section>
    
    <!-- Timline Section
    ================================================= -->
    <section id="timeline">
    	<div class="container wrapper">
        <div class="headline">
          <h2>Timeline</h2>
        </div>
        <div class="timeline-contents">
          <div class="event-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="duration duration-left">2016 - 2017</div>
              </div>
              <div class="col-sm-6">
                <div class="event event-description-right">
                  <h4>UI/UX Designer at Envato</h4>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                </div>
              </div>
            </div>
          </div>
          <div class="event-item">
            <div class="row">
              <div class="col-sm-6 col-sm-push-6">
                <div class="duration duration-right">2014 - 2016</div>
              </div>
              <div class="col-sm-6 col-sm-pull-6">
                <div class="event event-description-left">
                  <h4>Web Desinger at Void</h4>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                </div>
              </div>
            </div>
          </div>
          <div class="event-item">
            <div class="row">
              <div class="col-sm-6">
                <div class="duration duration-left">2012 - 2014</div>
              </div>
              <div class="col-sm-6">
                <div class="event event-description-right">
                  <h4>Project Manager at Group7</h4>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                </div>
              </div>
            </div>
          </div>
          <div class="event-item marginless">
            <div class="row">
              <div class="col-sm-6 col-sm-push-6">
                <div class="duration duration-right">2008 - 2012</div>
              </div>
              <div class="col-sm-6 col-sm-pull-6">
                <div class="event event-description-left">
                  <h4>Studied at Oxford</h4>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Footer
    ================================================= -->
    <footer id="footer">
    
      <!--Footer Parallax-->
      <ul class="element-scroll-parallax hidden-sm hidden-xs">
      	<li data-parallax='{"y": 400, "rotateY": 300, "rotateZ": -400}'><img src="view/media/designer/footer-l-1.png" alt="" /></li>
        <li data-parallax='{"y": -600, "rotateZ": -300}'><img src="view/media/designer/footer-l-2.png" alt="" /></li>
        <li data-parallax='{"x": 700}'><img src="view/media/designer/footer-l-3.png" alt="" /></li>
      </ul><!--Parallax End-->
      
    	<div class="container wrapper">
    		<div class="row">
    			<div class="col-md-7">
            <div class="headline">
              <h2 class="white">Contact <span class="yellow">Me</span></h2>
            </div>
            
            <!--Contact Form-->
            <form class="contact-form" method="post">
              <div class="form-group">
                <input id="contact-name" type="text" name="name" class="form-control" placeholder="Enter your name *" required="required" data-error="Name is required.">
              </div>
              <div class="form-group">
                <input id="contact-email" type="text" name="email" class="form-control" placeholder="Enter your email *" required="required" data-error="Email is required.">
              </div>
              <div class="form-group">
                <input id="contact-phone" type="text" name="phone" class="form-control" placeholder="Enter your phone *" required="required" data-error="Phone is required.">
              </div>
              <div class="form-group">
                <textarea id="form-message" name="message" class="form-control" placeholder="Leave a message for us *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
              </div>
            </form>
            
            <button class="btn btn-secondary" name="submit" >Send message</button>
          </div>
    			<div class="col-md-5">
          
            <!--Contact Information-->
            <div class="contact-info">
              <div class="contact-detail">
                <?php foreach ($this->contactdetail as $c) { ?>
                <div class="reach">
                	<h4 class="white">CALL ME</h4>
                	<p><?php echo $c->phone ?></p>
                </div>
                <div class="reach">
                	<h4 class="white">EMAIL ME</h4>
                	<p><?php echo $c->email ?></p>
                </div>
                <div class="reach">
                	<h4 class="white">ADDRESS</h4>
                	<p><?php echo $c->address ?></p>
                </div>
                <?php } ?>
              </div>
              <ul class="list-inline social-icons">
              	<li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
    		</div>
    	</div>
    </footer>
    
    <!--Buy button-->
   <!-- <a href="https://themeforest.net/cart/add_items?item_ids=19679120&amp;ref=thunder-team" target="_blank" class="btn btn-buy"><span class="italy">Buy with:</span><img src="view/media/envato_logo.png" alt="" /><span class="price">Only $19!</span></a>-->
    
    <!-- Scripts
    ================================================= -->
    <script src="view/js/jquery-3.1.1.min.js"></script>
    <script src="view/js/bootstrap.min.js"></script>
    <script src="view/js/plugins/parallax.hover.js"></script>
    <script src="view/js/plugins/jquery.parallax-scroll.js"></script>
    <script src="view/js/plugins/jquery.appear.js"></script>
    <script src="view/js/plugins/jquery.easing.min.js"></script>
    <script src="view/js/plugins/scrolling-nav.js"></script>
    <script src="view/js/void.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-89866258-1', 'auto');
      ga('send', 'pageview');

    </script>
    
  </body>

<!-- Mirrored from thunder-team.com/void/designer.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 May 2018 03:05:54 GMT -->
</html>