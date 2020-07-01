<!DOCTYPE html>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="assets/img/favicon.ico" />

    <title>Contact | Bootstrap to Wordpress</title>

    <!--BOOTSTRAP CORE CSS-->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--FONT AWESOME ICONS-->
    <link
      href="assets/css/font-awesome/css/font-awesome.min.css"
      rel="stylesheet"
    />
    
    <!--CUSTOM CSS-->
    <link href="assets/css/custom.css" rel="stylesheet">

    <!--GOOGLE FONTS-->
    <!-- font-family: 'Nunito', sans-serif;-->
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito&display=swap"
      rel="stylesheet"
    />

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="full-width contact">

      <!--HEADER-->
      <header class="site-header" role="banner">
        <!-- NAVBAR-->
        <div class="navbar-wrapper">
          <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
              <div class="navbar-header">
                <button
                  type="button"
                  class="navbar-toggle"
                  data-toggle="collapse"
                  data-target=".navbar-collapse"
                >
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"
                  ><img src="assets/img/logo.png" alt="Bootstrap To Wordpress"
                /></a>
              </div>
              <!--navbar-header-->
              <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="resources.html">Resources</a></li>
                  <li class="active"><a href="contact.html">Contact</a></li>
                </ul>
              </div>
              <!--navbar-collapse-->
            </div>
            <!--Container-->
          </div>
          <!-- Navbar-->
        </div>
        <!-- Navbar Wrapper-->
      </header>

      <section class="feature-image feature-image-default data-type="background" data-speed="2">
        <h1 class="page-title">Contact</h1>
    </section>

        <!-- MAIN-->
        <div class="container">
            <div class="row" id="primary">
                <div id="content" class="col-sm-12">

                    <section class="main-content">
                        <p class="lead"> 
                        Sailing sailing the kracken Leif Erikson skald Beowulf, viking boats tall blond women lack the table. 
                        Ocean sailing sailing sailing loot viking Beowulf Beowulf. Viking boats swords swords longship terror sailing.</p>

                            <form role="form" class="clearfix">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="contact-name" class="sr-only">Name </label>
                                            <input type="text" class="form-control input-lg" id="contact-name" placeholder="Your Name">
                                        </div> <!-- form group-->
                                    </div> <!-- Col -->

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="contact-email" class="sr-only">Email </label>
                                            <input type="email" class="form-control input-lg" id="contact-email" placeholder="Your Email">
                                        </div> <!-- form group-->
                                    </div> <!-- Col -->

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="contact-words" class="sr-only">Message</label>
                                            <textarea class="form-control input-lg" id="contact-words" placeholder="Your Message" rows="3"></textarea>
                                        </div> <!-- form group-->
                                    </div> <!-- Col -->
                                </div> <!-- ROW -->
                                <input type="submit" class="btn btn-info btn-lg pull-right" value="Get in touch &raquo;"
                            </form>
                    </section>
                </div>
            </div>
        </div>

       <!--SIGN UP-->
       <section id="signup" data-type="background" data-speed="4">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
              <p><a href="#" class="btn btn-lg btn-block btn-success"> Yes, Sign me up!</a></p>
            </div>
          </div>
        </div>
      </section>
  
      <!--FOOTER-->
      <footer>
        <div class="container">
          <div class="col-sm-3">
            <p><a href="/"><img src="assets/img/logo.png" alt="Bootstrap to Wordpress"></a></p>
          </div>
          <div class="col-sm-6">
            <nav>
              <ul class="list-unstyled list-inline">
                <li><a href="">Home</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Resources</a></li>
                <li><a href="">Contact</a></li>
                <li class="signup-link"><a href="">Sign up now</a></li>
              </ul>
            </nav>
          </div> <!-- end col-->
          <div class="col-sm-3">
            <p class="pull-right">&copy; 2020 Isaac P Cooper</p>
          </div>
        </div> <!--container-->
      </footer>
  
      <!--MODAL-->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;<span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subcribe to our mailing list</h4>
           </div> <!--modal-header-->
           <div class="modal-body">
            <p>Simply enter youi name and email! As a thank you for joining us we're going to give you one of our best-selling courses, <em>for free!</em></p>
  
            <form class="form-inline" role="form">
              <div class="form-group">
                <label class="sr-only" for="subscribe-name">Your first name</label>
                <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
              </div> <!--form-group-->
  
              <div class="form-group">
                <label class="sr-only" for="subscribe-email"> and your email</label>
                <input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
              </div><!--form-group-->
  
              <input type="submit" class="btn btn-danger" value="Subscribe!">
            </form>
            <hr>
  
            <p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. 
              <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time</small></p>
           </div> <!--modal-body-->
  
          </div> <!-- Modal Content-->
        </div> <!--modal-dialog-->
      </div> <!--modal-->
  
      <!--BOOTSTRAP CORE JS-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
  
      <script src="assets/js/main.js"></script>
    </body>
  </html>
  
