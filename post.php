<!DOCTYPE html>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="assets/img/favicon.ico" />

    <title>Blog Post | Bootstrap to Wordpress</title>

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
  
  <body>

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
                  <li><a href="index.php">Home</a></li>
                  <li class="active"><a href="blog.php">Blog</a></li>
                  <li><a href="resources.php">Resources</a></li>
                  <li><a href="contact.php">Contact</a></li>
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
    
      <!--MAIN CONTENT-->
      <div class="container">
          <div class="row" id="primary">
              <div id="content" class="col-sm-8">
                  <article class="post">
                      <header>
                          <h1>Blog Title here</h1>
                          <div class="post-details">
                            <div class="post-details">
                                <i class="fa fa-user"></i> 
                                Isaac Cooper
                                <i class="fa fa-time"></i> 
                                <time>July 20, 2020</time>
                                <i class="fa fa-folder"></i> <a href="">Tutorials</a>, <a href="">Coding</a> 
                                <i class="fa fa-tags"></i> Tagged <a href=""> wordpress</a>, <a href=""> premium</a>, <a href="">another tag</a>, <a href="">yadda</a>
                            <div class="post-comments-badge">
                                <a href=""> <i class="fa fa-comments"></i>168</a>
                            </div> <!--post-comments-badge-->
                            </div> <!--post-details-->
                        </header>
                            <div class="post-image">
                                <img src="assets/img/hero-bg.jpg" alt="Hero Image">
                            </div> <!--Post Image-->
                            <div class="post-body">
                                <p>Whatever chillwave ramps, hell of succulents jianbing yr DIY yuccie asymmetrical tbh plaid. 
                                    IPhone literally actually, lo-fi tote bag next level migas seitan prism slow-carb skateboard umami.
                                    Whatever chillwave ramps, hell of succulents jianbing yr DIY yuccie asymmetrical tbh plaid. 
                                    IPhone literally actually, lo-fi tote bag next level migas seitan prism slow-carb skateboard umami.
                                    Whatever chillwave ramps, hell of succulents jianbing yr DIY yuccie asymmetrical tbh plaid. 
                                    IPhone literally actually, lo-fi tote bag next level migas seitan prism slow-carb skateboard umami.</p>
                                
                                <p>Roof party jianbing pabst hot chicken enamel pin deep v, gochujang jean shorts aesthetic health goth air plant vegan flannel.
                                    hot chicken enamel pin deep v, gochujang jean shorts aesthetic health goth air plant vegan flannel.
                                    hot chicken enamel pin deep v, gochujang jean shorts aesthetic health goth air plant vegan flannel.
                                    hot chicken enamel pin deep v, gochujang jean shorts aesthetic health goth air plant vegan flannel.
                                    hot chicken enamel pin deep v, gochujang jean shorts aesthetic health goth air plant vegan flannel.
                                </p>

                                <h3>Subtitle</h3>
                                <p>Bushwick roof party disrupt poke flexitarian street art af intelligentsia microdosing. 
                                    Yuccie vinyl tacos retro franzen unicorn pop-up cronut squid chillwave chartreuse master cleanse semiotics pok pok swag.
                                    Whatever chillwave ramps, hell of succulents jianbing yr DIY yuccie asymmetrical tbh plaid. 
                                    IPhone literally actually, lo-fi tote bag next level migas seitan prism slow-carb skateboard umami.
                                    Whatever chillwave ramps, hell of succulents jianbing yr DIY yuccie asymmetrical tbh plaid. 
                                    IPhone literally actually, lo-fi tote bag next level migas seitan prism slow-carb skateboard umami.</p>

                                 <h3>Another Subtitle</h3>
                                <p>Bushwick roof party disrupt poke flexitarian street art af intelligentsia microdosing. 
                                    Yuccie vinyl tacos retro franzen unicorn pop-up cronut squid chillwave chartreuse master cleanse semiotics pok pok swag.
                                    Whatever chillwave ramps, hell of succulents jianbing yr DIY yuccie asymmetrical tbh plaid. 
                                    IPhone literally actually, lo-fi tote bag next level migas seitan prism slow-carb skateboard umami.
                                    Whatever chillwave ramps, hell of succulents jianbing yr DIY yuccie asymmetrical tbh plaid. 
                                    IPhone literally actually, lo-fi tote bag next level migas seitan prism slow-carb skateboard umami.</p>
                            </div> <!--Post Body-->
                  </article>
                  <div id="comments">
                      <div class="comments-wrap">
                          <h3>4 Comments</h3>

                          <ol class="comments-list">
                              <li class="comment">
                                  <h4>John Smith <small>&bull; Jul 21, 2020</small></h4>
                                  <div class="comment-body">
                                        <p>Bushwick roof party disrupt poke flexitarian street art af intelligentsia microdosing. 
                                            Yuccie vinyl tacos retro franzen unicorn pop-up cronut squid chillwave chartreuse master cleanse semiotics pok pok swag.
                                            Whatever chillwave ramps, hell of succulents jianbing yr DIY yuccie asymmetrical tbh plaid. 
                                            IPhone literally actually, lo-fi tote bag next level migas seitan prism slow-carb skateboard umami.
                                            Whatever chillwave ramps, hell of succulents jianbing yr DIY yuccie asymmetrical tbh plaid. 
                                            IPhone literally actually, lo-fi tote bag next level migas seitan prism slow-carb skateboard umami.</p>
                                  </div> <!-- COMMENT BODY -->

                                  <ol class="children">
                                      <li class="comment">
                                        <h4>Chris McCooper <small>&bull; Jul 22, 2020</small></h4>
                                        <h4>John Smith <small>&bull; Jul 21, 2020</small></h4>
                                  <div class="comment-body">
                                        <p>Bushwick roof party disrupt poke flexitarian street art af intelligentsia microdosing. 
                                            Yuccie vinyl tacos retro franzen unicorn pop-up cronut squid chillwave chartreuse master cleanse semiotics pok pok swag.
                                            Whatever chillwave ramps, hell of succulents jianbing yr DIY yuccie asymmetrical tbh plaid. 
                                            IPhone literally actually, lo-fi tote bag next level migas seitan prism slow-carb skateboard umami.
                                            Whatever chillwave ramps, hell of succulents jianbing yr DIY yuccie asymmetrical tbh plaid. 
                                            IPhone literally actually, lo-fi tote bag next level migas seitan prism slow-carb skateboard umami.</p>
                                  </div> <!-- COMMENT BODY -->

                                  <ol class="children">
                                      <li class="comment">
                                          <h4>Johnny Dee <small>&bull; Jul 22, 2020</small></h4>
                                          <div class="comment-body">
                                            <p>Bushwick roof party disrupt poke flexitarian street art af intelligentsia microdosing. 
                                                Yuccie vinyl tacos retro franzen unicorn pop-up cronut squid chillwave chartreuse master cleanse semiotics pok pok swag.
                                                Whatever chillwave ramps, hell of succulents jianbing yr DIY yuccie asymmetrical tbh plaid. 
                                                IPhone literally actually, lo-fi tote bag next level migas seitan prism slow-carb skateboard umami.
                                                Whatever chillwave ramps, hell of succulents jianbing yr DIY yuccie asymmetrical tbh plaid. 
                                                IPhone literally actually, lo-fi tote bag next level migas seitan prism slow-carb skateboard umami.</p>
                                    </div> <!-- COMMENT BODY -->
                                    </li>
                                    </ol> <!-- children-->
                                    </li> <!--comment-->
                                  </ol> <!-- children-->
                              </li> <!--comment-->
                              <li class="comment">
                                <h4>John Smith <small>&bull; Jul 21, 2020</small></h4>
                                <div class="comment-body">
                                      <p>Bushwick roof party disrupt poke flexitarian street art af intelligentsia microdosing. 
                                          Yuccie vinyl tacos retro franzen unicorn pop-up cronut squid chillwave chartreuse master cleanse semiotics pok pok swag.
                                          Whatever chillwave ramps, hell of succulents jianbing yr DIY yuccie asymmetrical tbh plaid. 
                                          IPhone literally actually, lo-fi tote bag next level migas seitan prism slow-carb skateboard umami.
                                          Whatever chillwave ramps, hell of succulents jianbing yr DIY yuccie asymmetrical tbh plaid. 
                                          IPhone literally actually, lo-fi tote bag next level migas seitan prism slow-carb skateboard umami.</p>
                                </div> <!-- COMMENT BODY -->
                          </ol> <!-- Comments list-->

                          <div id="leave-comment">
                              <h3>Leave a comment</h3>
                              <form>
                                  <p> Your email address will not be published.
                                      Required fields are marked <span class="required">*</span>
                                  </p>
                                  <p class="comment-form-author">
                                      <label for="author">Name *</label>
                                      <input type="text" id="author">
                                  </p>
                                  <p class="comment-form-email">
                                    <label for="email">Email *</label>
                                    <input type="email id="email">
                                </p>
                                <p class="comment-form-url">
                                    <label for="">Website</label>
                                    <input type="url" id="url">
                                </p>
                                <p class="comment-form-comment">
                                    <label for="comment">Comment *</label>
                                    <textarea id="comment" cols="45" rows="8"></textarea>
                                </p>
                                <p class="form-submit">
                                    <input type="submit" name="submit">
                                </p>

                              </form>
                          </div>
                      </div> <!-- COMMENT WRAP-->
                  </div> <!-- COMMENTS-->



              </div><!-- col -->
      <!-- BLOG CONTENT-->

              <!-- SIDEBAR -->
              <aside class="col-sm-4">
                  
                <div class="widget">
                    <h4> Join Our Mailing List!</h4>
                    <p> Keep up-to-date with the latest news, and we'll <strong>send you something special as a thank you!</strong></p>
                    <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                        Click here to subscribe
                    </button>
                </div> <!--widget-->
                
                <div class="widget">
                      <form role="form" class="search-form">
                          <label for="sidebar-search" class="sr-only"> Search the blog</label>
                          <input type="text" id="sidebar-search" placeholder="Search the blog...">
                      </form>
                </div> <!--widget-->

                <div class="widget">
                      <h4>About Bootstrap to WordPress</h4>
                      <p>I'm baby xOXO ennui roof party, jianbing slow-carb direct trade man braid dreamcatcher polaroid. 
                        Shoreditch pok pok thundercats semiotics franzen selfies seitan crucifix chillwave gochujang craft beer vinyl wolf mixtape copper mug</p>
                </div>

                <div class="widget">
                      <h4>Recent Posts</h4>
                      <ul>
                        <li><a href="">Blog Post #1</a></li>
                        <li><a href="">Blog Post #2</a></li>
                        <li><a href="">Blog Post #3</a></li>
                        <li><a href="">Blog Post #4</a></li>
                        <li><a href="">Blog Post #5</a></li>

                      </ul>
                </div> <!--widget-->

                <div class="widget">
                    <h4>Categories</h4>
                    <ul>
                    <li><a href="">Category #1</a></li>
                        <li><a href="">Category  #2</a></li>
                        <li><a href="">Category  #3</a></li>
                        <li><a href="">Category  #4</a></li>
                        <li><a href="">Category  #5</a></li>
                        <li><a href="">Category  #6</a></li>
                    </ul>
              </div> <!--widget-->

              </aside>
          </div> <!-- row -->
      </div> <!-- container-->



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
      
