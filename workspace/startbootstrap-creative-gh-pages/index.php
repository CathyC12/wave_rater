<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: welcome.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wave Rater</title>

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    
    <!-- List of css's -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="css/creative.min.css" rel="stylesheet">
    <link href="css/event_page.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/imghover.css">
    <link rel="stylesheet" href="css/geolocation.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <link rel="shortcut icon" href="assets/ico/logoicon16.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/logoicon144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/logoicon114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/logoicon72.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/logoicon57.png">
    
    
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/creative.min.js"></script>
    <script src="javascript/jquery-1.11.2.min.js"></script>
    <script src="javascript/jquery.validate.min.js"></script>
    <script src="javascript/register.js"></script>
    



</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Wave Rater</a>
                </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#login">Login</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#event">Events</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#watersport">Water Sports</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#geo">Beaches of Ireland</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="jumbotron" style="opacity:0.6; filter: alpha(opacity=60); border-radius:25px; border:2px solid #4169E1; padding:20px;">
                    <div class="container">
                        <h1 style="color:black">Welcome to Wave Rater</h1>
                        <h2 style="color:#000080; font-weight:300">Your Source for the best Beaches in Ireland </h2>
                        <hr>
                        <p style="color: #000080; font-weight:300">Information about Wave Rater and what they can find in the website. They can login and view the events and the main function is to review and rate beaches depending on the watersport associated with it and also they cna use GEO Location to find the nearest beach depending on their location.</p>
                    </div>
            </div>
        </div> 
    </header>
     <section class="bg-primary" id="login">
        <div class="container ">
            <div class="row" >
                <div id="loginStuff">
                        <div class="col-sm-5">
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Login to our site</h3>
                                        <p>Enter username and password to log on:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-key"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="" method="post" class="login-form" name="formLogin" >
                                    <div id="errorBox"></div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-username">Username</label>
                                            <input type="text" name="uname" placeholder="Username..." class="form-username form-control" id="uname">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="password">Password</label>
                                            <input type="password" name="upass" placeholder="Password..." class="form-password form-control" id="upass">
                                        </div>
                                        <button  type="submit" class="btn" name="submit" value=" Login " >Sign in!</button>
                                        <span><?php echo $error; ?></span>
                                    </form>
                                </div>
                            </div>
                             <div class="social-login">
                                <h3>...or login with:</h3>
                                <div class="social-login-buttons">
                                    <a class="btn btn-link-1 btn-link-1-facebook" href="#">
                                        <i class="fa fa-facebook"></i> Facebook
                                    </a>
                                    <a class="btn btn-link-1 btn-link-1-twitter" href="#">
                                        <i class="fa fa-twitter"></i> Twitter
                                    </a>
                                    <a class="btn btn-link-1 btn-link-1-google-plus" href="#">
                                        <i class="fa fa-google-plus"></i> Google Plus
                                    </a>
                                </div>
                            </div>
           
                        </div>
                           
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                            
                        <div class="col-sm-5">
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Sign up now</h3>
                                        <p>Fill in the form below to get instant access:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action = "form.php" method ="POST" class="registration-form" id="register-form">                          
                                    <div class="form-body">
         
                                  <div class="alert alert-info" id="message" style="display:none;">
                                  You have registered!
                                  </div>
                                  

                                        <div class="form-group">
                                            <label class="sr-only" for="form-last-name">Username</label>
                                            <input  type="text" class="form-control" placeholder="Username" name="uname">
                                            <span class="help-block" id="error"></span>
                                        </div>

                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label class="sr-only" for="form-last-name">Password</label>
                                            <input   id="password" type="password" class="form-control" placeholder="Password" name="upass">
                                            <span class="help-block" id="error"></span>
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label class="sr-only" for="form-last-name">Password</label>
                                            <input  type="password" class="form-control" placeholder="Retype Password">
                                            <span class="help-block" id="error"></span>
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-email">Email</label>
                                            <input type="text" class="form-control" placeholder="Email" name="uemail">
                                            <span class="help-block" id="error"></span>
                                        </div>
                                       
                                        <button  class="btn"  type="submit"  name = "FormSubmission" value="Submit">Sign me up!</button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
            </div><!-- end of row-->
    </section>


     <section id="event">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <hr>
                    <h2 class="section-heading">Events</h2>
                    <p> Check out the latest events that are happening right now. From surf competition to diving lessons. Check them out below.</p>
                    <hr class="primary">
                </div>
            </div>
        <div class="row-fluid">
        <div class="span12">
            <div class="carousel slide" id="myCarousel">
                    <div class="carousel-inner">
                        <div class="item active">
                                <ul class = "thumbnails">
                                    <li class="span3">
                                       <div class ="row">
                                            <div align = "left" class="col-lg-4">
                                            <a href="http://seasessions.com/"><img src="./img/event1.png" sizes="260x140" alt="SeaSession.com"></a>
                                        </div>
                                        
                                            <div class="caption col-lg-8">
                                                <h4>SeaSession </h4>
                                                <p>Sea Sessions is one of Ireland’s most highly respected small festivals and is widely recognised as being the country’s premier music, camping and surfing lifestyle event.</p>
                                                <p>The Festival sells out to capacity crowds each year and continues to grow in popularity. In 2016 the festival sold out over 3 weeks in advance. Sea Sessions has played host to such luminaries as Paul Weller, Tinie Tempah, Bastille, Seasick Steve, Example and Gavin James to name but a few.</p>
                                                <a class="btn btn-mini" href="http://seasessions.com/">&raquo; Click for tickets</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="span3">
                                       <div class = "row">
                                        <div align = "center" class="col-lg-4">
                                            <a href="http://www.irishsurfing.ie/"><img src="./img/event2.png" sizes="260x140" alt="SeaSession.com" alt=""></a>
                                        </div>
                                        <div class="caption col-lg-8">
                                            <h4>Surfing Intervarsities 2016</h4>
                                            <p>Irish Surfing is delighted to announce that the Irish Surfing Intervarsities 2016 will take place in Strandhill, Co Sligo on the 5/6 March in association with Sligo IT Surf Club. Six titles will be awarded in Men's Surf, Women's Surf, Bodyboard, Longboard and SUP along with the coveted overall club title. The event is open to any full time student studying at a university, IT and other third level colleges on the island of Ireland and is expected to attract over 150 students from surf clubs representing 15 or more third level colleges. The Irish Surfing Intervarsities has been an annual event on the Irish Surfing calendar since the late nineties.</p>
                                            <a class="btn btn-mini" href="http://www.irishsurfing.ie/blog/232-irish-surfing-intervarsities-2016.html">&raquo; Read More</a>
                                        </div>
                                        </div>
                                    </li>
                                    <li class="span3">    
                                       <div class = "row">
                                         <div align = "right" class="col-lg-4">
                                            <a href="#"><img src="./img/event2.png" sizes="260x140" alt="SeaSession.com"></a>
                                        </div>
                                        <div class="caption col-lg-8">
                                            <h4>50th Anniversary Irish Surfing Association</h4>
                                            <p>The 50th Anniversary Celebration of the Irish Surfing Association will take place at the 48th Irish Inter County Surfing Championships scheduled for Rossnowlagh, Donegal on the 15 - 16 October. </p>
                                            <a class="btn btn-mini" href="http://www.irishsurfing.ie/blog/277-celebration-50th-anniversary-irish-surfing-association-and-48th-irish-inter-county-surfing-championships.html">&raquo; Read More</a>
                                        </div>
                                      </div>
                                    </li>
                                </ul>
                          </div><!-- /Slide1 --> 
                        <div class="item">
                                <ul class="thumbnails">
                                    <li class="span3">
                                    <div class ="row">
                                        <div align = "left" class="col-lg-4">
                                            <a href="#"><img src="./img/event4.jpg" sizes="260x140" alt="wwkc.net"></a>
                                        </div>
                                        <div class="caption col-lg-8">
                                            <h4>Kayaking Beginners Course 2016</h4>
                                            <p>When you learn to kayak on a Wild Water Kayak Club Beginners’ Course, you get much more than just the course. You also become a member of Ireland’s largest and most diverse paddle sports club, with opportunities to try out all the paddling disciplines such as adventure kayaking, marathon and wild water racing, canoe polo, slalom and open canoeing . The course fee doesn’t just cover the 6 weeks course. It’s an introduction to the club and we provide continuous training to encourage you to progress in kayaking.</p>
                                            <a class="btn btn-mini" href="http://www.wwkc.net/learn/">&raquo; Click to register</a>
                                        </div>
                                        </div>
                                    </li>
                                    <li class="span3">
                                     <div class ="row">
                                        <div align = "left" class="col-lg-4">
                                            <a href="#"><img src="./img/event5.png" sizes="260x140" alt="www.totalexperience.ie"></a>
                                        </div>
                                        <div class="caption col-lg-8">
                                            <h4>Wacko on the Jacko</h4>
                                            <p>THE ULTIMATE WHITE WATER RACING EVENT. Individual Timed Trial From Trooperstown To Jacksons. Individual Boater Cross Heats Of Four With The Winner Progressing. Extreme Slalom Team Race On the Lead In Rapid</p>
                                            <a class="btn btn-mini" href="http://www.totalexperience.ie/web/wacko-on-the-jacko-adventure-race/">&raquo; Click to register</a>
                                        </div>
                                        </div>
                                    </li>
                                    <li class="span3">
                                     <div class ="row">
                                        <div align = "left" class="col-lg-4">
                                            <a href="#"><img src="./img/event6.png" sizes="260x140" alt="salmonleapcanoeclub"></a>
                                        </div>
                                        <div class="caption col-lg-8">
                                            <h4>Salmon Leap Canoe Club Events</h4>
                                            <p>Salmon Lep Canoe Club has event from nationa championships to international events. Ranging from Junior to Professional level.</p>
                                            <a class="btn btn-mini" href="http://www.salmonleapcanoeclub.com/events/">&raquo; Check out for more events</a>
                                        </div>
                                        </div>
                                    </li>
                                  
                                </ul>
                          </div><!-- /Slide2 --> 
                        <div class="item">
                            <ul class="thumbnails">
                                <li class="span3">
                                    <div class ="row">
                                        <div align = "left" class="col-lg-4">
                                            <a href="www.divegalway.com"><img src="./img/event7.png" sizes="260x140" alt="DiveGalway"></a>
                                        </div>
                                        <div class="caption col-lg-8">
                                            <h4>Dive Galway</h4>
                                            <p>The Discover Scuba Diving program, [DSD]. This is really the best and only way to find out if you would like Scuba Diving. It is also what we recommend to all first timers. DSD's can be done in the sea at Salthill beach weather permitting or at Leisureland Pool Tuesday or Friday nights 8.30pm to 11pm.</p>
                                            <a class="btn btn-mini" href="http://www.divegalway.com/index.php?option=com_content&view=article&id=84&Itemid=471">&raquo; Click to apply</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class ="row">
                                        <div align = "left" class="col-lg-4">
                                            <a href="http://www.dingledolphin.com"><img src="./img/event8.png" sizes="260x140" alt="dingle dolphin"></a>
                                        </div>
                                        <div class="caption col-lg-8">
                                            <h4>Fungie Dolphin Tours</h4>
                                            <p>Dingle Boatmen’s Association comprises 6 passenger boats (fully licenced by the Department of the Marine and manned by experienced and qualified crews). The boats leave Dingle Pier at regular intervals during the day, every day, all year round (weather permitting) on a 1 hour trip to see Fungie wild and free in his natural habitat</p>
                                            <a class="btn btn-mini" href="http://www.dingledolphin.com/tours/">&raquo; See for more details</a>
                                        </div>
                                        </div>
                                </li>
                                <li class="span3">
                                         <div class ="row">
                                            <div align = "left" class="col-lg-4">
                                                <a href="https://wildatlanticwildlife.ie/"><img  src="./img/event9.jpg" sizes="260x140" alt="wildatlanticwhildlife"></a>
                                            </div>
                                            <div class="caption col-lg-8">
                                                <h4>West Cork Sailing and Powerboat Centre</h4>
                                                <p>Discover the beauty of Ireland’s coastline and wildlife from the sea and explore islands, harbours, headlands, beaches and bays from a whole new perspective.  Join us sailing, kayaking, snorkeling and hiking along the Wild Atlantic Way. Sail away on a liveaboard sailing trip for only €450. Step on board Jessy of Adrigole and your skipper, scientist, sailor, chef and passionate explorer Niall MacAllister will take you on an adventure of a life time and show you Wildlife on the Wild Atlantic Way you never knew was there. Join a scheduled Wildlife Week or charter Jessy with friends from 1/2 day to 14 days or more.</p>
                                                <a class="btn btn-mini" href="https://wildatlanticwildlife.ie/">&raquo; Read More</a>
                                            </div>
                                        </div>
                                </li>
                                </ul>
                          </div><!-- /Slide3 --> 
                    </div><!--end of carousel inner-->
                    <div class="control-box">                            
                        <a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a>
                        <a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
                    </div><!-- /.control-box --> 
                </div><!--end carousel-->
        </div>
        </div>
        </div>
        
    </section>


   
    

      <section id="watersport"> 
      <hr>
       <h2 class="section-heading">Watersports</h2>
       <hr>
    <p>Click on the watersports below to view suitable beaches in Ireland.</p> 
        <div class="row">
            <div class="box">
                
                <div class="col-sm-4 col-lg-4 col-md-4">
                    
                  <div id="img">
            		<div class="hovereffect">
            			<img class="img-responsive" src="img/portfolio/thumbnails/surf.jpg" border="5">
                		  <div class="overlay">
                     		<h2>Surfing</h2>
                    		<a class="info" href="beach_list.php">Find out More</a>
            			  </div>
            		 </div>
            	    </div>
            	 </div>   
                <div class="col-sm-4 col-lg-4 col-md-4">   
                     <div id="img">
                		<div class="hovereffect">
                			<img class="img-responsive" src="img/portfolio/thumbnails/kite.jpg" border="5">
                		      <div class="overlay">
                     			<h2>Kite Surfing</h2>
                    			<a class="info" href="beach_list.php">Find out More</a>
                		  	</div>
                		</div>
                	</div>
            	</div>
            
                <div class="col-sm-4 col-lg-4 col-md-4">
                  <div id="img">
            		<div class="hovereffect">
            			<img class="img-responsive" src="img/portfolio/thumbnails/sailing.jpg" border="5">
                		  <div class="overlay">
                     		<h2>Sailing</h2>
                    		<a class="info" href="beach_list.php">Find out More</a>
            			  </div>
            		 </div>
            	    </div>
            	 </div>   
            	 
                <div class="col-sm-4 col-lg-4 col-md-4">
                     <div id="img">
                		<div class="hovereffect">
                			<img class="img-responsive" src="img/portfolio/thumbnails/canoe.jpg" border="5">
                		      <div class="overlay">
                     			<h2>Canoeing</h2>
                    			<a class="info" href="beach_list.php">Find out More</a>
                		  	</div>
                		</div>
                	</div>
            	</div>
            	
                <div class="col-sm-4 col-lg-4 col-md-4">
                  <div id="img">
            		<div class="hovereffect">
            			<img class="img-responsive" src="img/portfolio/thumbnails/jetskiing.jpg" border="5">
                		  <div class="overlay">
                     		<h2>Jet Skiing</h2>
                    		<a class="info" href="beach_list.php">Find out More</a>
            			  </div>
            		 </div>
            	    </div>
            	   </div>
                    <br />
                 <div class="col-sm-4 col-lg-4 col-md-4">
                     <div id="img">
                		<div class="hovereffect">
                			<img class="img-responsive" src="img/portfolio/thumbnails/snorkling.jpg" border="5">
                		      <div class="overlay">
                     			<h2>Snorkling</h2>
                    			<a class="info" href="beach_list.php">Find out More</a>
                		  	</div>
                		</div>
                	</div>
            	</div>
              	      

            </div>
            
            
        </div>
    
       </section>
        <section id = "geo">
        <hr>
           <h2 class="section-heading">Beaches of Ireland</h2>
         <hr>
         </section>
        <section id = "map">
          <div class="row">
              <div class="box">
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtIhEiczwcpsIFrSWR32IzFbR1EpnMShk"></script>
               </div>
           </div>
         </section>
         

   <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-7 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">waverater4@gmail.com</a></p>
                </div>

                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 text-center">
                <div class="icon-circle">
                    <a href="https://www.facebook.com/profile.php?id=100014344504628" class="ifacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
                </div>
            </div>
     
            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 text-center">
                <div class="icon-circle">
                    <a href="https://twitter.com/wave_rater4" class="itwittter" title="Twitter"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
            </div>
        </div>
    </section>


<script src="javascript/geolocation.js"></script>

</body>

</html>