<!DOCTYPE html>
<html lang="en" ng-app="myWork">

<head>
    
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Eben Kempen | Portfolio</title>
    
    <link rel="shortcut icon" href="images/face.png"/>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/progess-bar.css" rel="stylesheet">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
    
    
    <!--Javascript-->
    <script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script src="js/jquery2.js"></script>
    <script src="js/jquery3.js"></script>

</head>
    
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <?php include_once("php/analytics.php") ?>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="images/Untitled-3.png"  height="70px" id="nav_logo"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#what_i_do">What I Do</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#work">Work</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Intro -->
    <section id="intro" class="intro-section">
        <div class="col-lg-12">
            <img src="images/Untitled-2.png" id="main_logo" width="200px" height="200px">
        </div>
    </section>

    <!-- About -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="section_headers">About Me</h1>
                    <img src="images/face.png" id="face" class="fadeIn">
                    <h3 id="about_hi" class="fadeIn">Hi there</h3>
                    <p id="about_me" class="fadeIn">My name is Eben Kempen. I am a student studying Interactive Design and Development. I am facinated by technology and have a passion for web design and to create websites.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- What I do -->
    <section id="what_i_do" class="what_i_do-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="section_headers">What I Do</h1>
                    <p class="what_i_do">
                <img src="images/html_graph.png" class="what_i_do_images fadeIn" height="100px" width="125px"/> 
                <img src="images/css_graph.png" class="what_i_do_images fadeIn" height="100px" width="125px"/> 
                <img src="images/java_graph.png" class="what_i_do_images fadeIn" height="100px" width="125px"/>
                <img src="images/jsl_graph.png" class="what_i_do_images fadeIn" height="100px" width="125px"/> 
                <img src="images/php_graph.png" class="what_i_do_images fadeIn" height="100px" width="125px"/>  
                    </p>
                    <h3 class="section_headers fadeIn">Programs</h3>
                    <p class="what_i_do">
                <img src="images/photoshop.png" class="what_i_do_images_programs fadeIn" height="100px" width="100px"/> 
                <img src="images/dreamweaver.png" class="what_i_do_images_programs fadeIn" height="100px" width="100px"/> 
                <img src="images/illustrator.png" class="what_i_do_images_programs fadeIn" height="100px" width="100px"/>
                <img src="images/indesign.png" class="what_i_do_images_programs fadeIn" height="100px" width="100px"/> 
                <img src="images/android.png" class="what_i_do_images_programs fadeIn" height="100px" width="100px"/>  
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Work -->
    <section id="work" class="work-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="section_headers">Work</h1>
                    <div ng-controller="ProjectController as projectCtrl">
                        <ul class="myProjects col-lg-3 fadeIn" ng-repeat="project in projectCtrl.info.projects">
                            <li><h4 class="project_title">{{project.title}}</h4>
                            <a ng-href="{{project.href}}">
                                <img ng-src="images/{{project.image}}" height="100px" width="100px" class="project_image">
                                </a></li>
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="section_headers">Contact</h1>
                    <form role="form" id="contactForm" data-toggle="validator" class="shake">
                    <div class="row">
                        <div class="form-group col-sm-6 fadeIn">
                            <label for="name" class="h4">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-sm-6 fadeIn">
                            <label for="email" class="h4">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group fadeIn">
                        <label for="message" class="h4">Message</label>
                        <textarea id="message" class="form-control" rows="5" placeholder="Message" required></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-lg-12">
                    <button type="submit" id="form-submit" class="fadeIn">Submit</button>
                        <div class="border_top_2"></div>
                    </div>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </form>
                </div>
            </div>
        </div>
    </section>
    
    <section id="footer" class="footer-section">
        <div class="footer">
            <div class="row">
                <div class="social_icons col-lg-12">
                    <a href="https://www.facebook.com/eben.kempen"><img src="images/social/facebook.png" width="50px" height="50px" id="facebook"/></a>
                    <a href="https://twitter.com/EbenKempen"><img src="images/social/twitter.png" width="50px" height="50px" id="twitter"/></a>
                    <a href="https://www.behance.net/Kempen"><img src="images/social/behance.png" width="50px" height="50px" id="behance"/></a>
                    <a href="https://www.linkedin.com/profile/view?id=AAIAABAfnnQB7y00BXS8kE04eCSpPRgfzZWw9gc&trk=nav_responsive_tab_profile_pic"><img src="images/social/linkedin.png" width="50px" height="50px" id="linkedin"/></a>
                    <p>© 2015, Eben Kempen. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/fade-in.js"></script>
    <script type="text/javascript" src="js/validator.min.js"></script>
    <script type="text/javascript" src="js/form-scripts.js"></script>
        
        

    <!-- Bootstrap Core JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    
        

</body>

</html>
