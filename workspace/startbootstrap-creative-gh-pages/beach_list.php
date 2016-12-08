<?php
    
    session_start();
    
    if ($_POST['submit']) {
                mysql_connect ("localhost", "root", "") or die ('Error: ' . mysql_error());
                mysql_select_db("waverater") or die ('Data error:' . mysql_error());
        
                $text = mysql_real_escape_string($_POST['comment']); 
                $starRating = $_POST['dataRange']; 
                $date = mysql_real_escape_string(date('Y-m-d H:i:s'));
        
                //$query="INSERT INTO reviews (comment) VALUES ('$text')";
                $q1 = "INSERT into `Reviews` (comment, stars,date) values ('$text', '$starRating', '$date')";
                mysql_query($q1) or die ('Error updating database' . mysql_error());
    
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

    <title>Creative - Start Bootstrap Theme</title>
    
    <!--Page tab at top -->
    <link rel="shortcut icon" href="assets/ico/logoicon16.png">
    
     <!-- Blue Font CSS for Nav Bar -->
    
    <link href="css/creative.min.css" rel="stylesheet">
    
    
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/beach_list.css" rel="stylesheet">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!--Alice-->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/review.js">
</script>


<!--<link rel="stylesheet" type="text/css" href="css/review.css">-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <!--Alice-->

<!--REVIEW NEW ALICE ADDED 01/12/16 START -->
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/review.js">
</script>

<link rel="stylesheet" type="text/css" href="css/review.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
 <script>
 
 var starValue = 0;
 
    function checkInput(){
        alert("Thank you for your rating of "+starValue);
        document.getElementById("hiddenValue").value = starValue;
    }
    
 </script>
 
 <!--REVIEW NEW ALICE ADDED 01/12/16 END -->

</head>

<!--Alice--> 
<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.html">Wave Rater</a>
                </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="index.html#login">Login</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#event">Events</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#watersport">Water Sports</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="index.html#map">Beaches of Ireland</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="beach_list.php#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Surfing</p>
                <div class="list-group">
                    <a href="beach_list.php" class="list-group-item active">Lahinch Beach, Co.Clare</a>
                    <a href="beach_list_surf_velvetstrand.php" class="list-group-item active">The Velvet Strand, Portmarnock, Co.Dublin</a>
                    <a href="beach_list_surf_tramore.php" class="list-group-item active">Tramore Beach, Co.Waterford</a>
                </div>
            </div>
            
            

            <div class="col-md-9">

                <div class="thumbnail">
                    <img class="img-responsive" src="https://m0.her.ie/wp-content/uploads/2015/03/13154258/small-Fanore-Beach.jpg" alt="">
                    <div class="caption-full">
                        <h4><a href="#">Lahinch Beach, County Clare</a>
                        </h4>
                        <div id="weather"></div>
                        <p>Current Temp: <span id="temp"></span></p>
                        <p>Current Wind: <span id="wind"></span></p>
                        <p>Address: Ennistymon Rd, Dough, Lahinch, Co. Clare</p>
                        <p>Lahinch Beach is located a short drive from the Cliffs of Moher and is therefore very popular with locals and tourists alike. The flooding tide makes it ideal for surfing, sea kayaking and kite surfing and there are a few surfing schools in the local area. Lahinch is a popular resort town with many restaurants and accommodation. </p>
                        <p>The beach is lifeguarded during the bathing season and more information can be found on the noticeboard located at the beach.</p>
                        <p>This beach has received the International Blue Flag award for 2016.</p>
                    </div>
                    
            <!--Average star rating and amount of reviews -->
            <?php
                $conn = new mysqli("localhost", "root", "", "waverater");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                        
                $middleval = floor(($count-1)/2);
                $query = "SELECT * FROM Reviews";
                $review = $conn->query($query);
            
                while($row = $review->fetch_assoc()){
                    $reviews[] = $row;
                }
                
                $starQuery = "SELECT ROUND(AVG(stars),1) AS average_stars FROM Reviews";
                $reviewStars = $conn->query($starQuery);
                        
                $reviewCount = count($reviews);
                $reviewStars = $reviewStars->fetch_assoc();
                        
                $averageStars = implode(',', $reviewStars);
                
                echo "<div class='ratings'><p class='pull-right'>$reviewCount Reviews</p>
                <p>
                <div class='stars starrr' style='float:left' contenteditable='false' data-rating='".$averageStars."'></div>
                </p>
                <br/><br/
                <p>
                            $averageStars Stars
                </p></div></div></div></div></div>"
            ?> 
    

    
    <!--REVIEW NEW ALICE ADDED 01/12/16 -->
            
    <div class="container">
        <div class="row" style="margin-top:18px; margin-top: 40px;">
       <!-- <div class="row" style="margin-top:18px; margin-top: 40px;"> ->
            <div class="col-md-13">
	<!--<div class="row" style="margin-top:40px;">
		<div class="col-md-6">-->
    	<div class="design">
            <div class="text-right">
               <a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box">Leave a Review</a>
            </div>
            <div class="row" id="post-review-box" style="display:none;">
                <div class="col-md-12">
                    <h3 class="header">Please Leave Your Review</h3>
                    
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <textarea class="reviewtextarea" cols="5" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
        
                        <div class="text-right">
                            <div id="starR" class="stars starrr" data-rating="5" name="sta"></div>
                            
                            <input id="hiddenValue" type="hidden" value="5" name="dataRange"></input>
                            
                            <a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                            <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                            
                             <input class="btn btn-success btn-green" name="submit" onclick="checkInput();return true;" type="submit" value="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div> 
           	 <?php

           	    $conn = new mysqli("localhost", "root", "", "waverater");
                // Check connection
                if ($conn->connect_error) {
                     die("Connection failed: " . $conn->connect_error);
                } 
                    $text = "SELECT * FROM Reviews";
                    $result = $conn->query($text);
                    
                    if ($result->num_rows > 0) {
                        // output data of each row
                        
                        while($row = $result->fetch_assoc()){
                            $reviews[] = $row;
                        }

                        $reviews = array_reverse($reviews ,true);
                        
                        foreach($reviews as $review){
                            echo "<br><div class='design'><div class='id'>Date: " . $review["date"]. "</div><br><div class='comment'>" . $review["comment"]. "</div><br><div class='stars starrr' data-rating='".$review["stars"]."'></div></div><br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    
                ?>
		</div>
	</div>
</div>

    <!--REVIEW NEW ALICE ADDED 01/12/16 -->

    <!-- Footer -->  
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
    
    <script>
                        var weather = new XMLHttpRequest();
                        weather.open("GET", "https://api.wunderground.com/api/626f24c8c474bb7e/conditions/q/CA/Los_angeles.json", false);
                        weather.send(null);

                        var r = JSON.parse(weather.response);

                        var dis = "Current location: " + r.current_observation.display_location.full + "  <p>";
                        var temp = r.current_observation.temperature_string+ "  <p>";
                        var wind = r.current_observation.wind_string+ "  <p>";

                        function getWeather(id,res) {
                            document.getElementById(id).innerHTML=res;
                        }
                        getWeather("weather",dis);
                        getWeather("temp",temp);
                        getWeather("wind",wind);

                    </script>


</body>

</html>
        
        
        
        
        
        
        
     