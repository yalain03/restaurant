<!doctype html>
<!--
Main page of a fictitious restaurant's 
web site.
Yves A.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Yves A.">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="index.css">
        <title>Alitalia Ristorante</title>
    </head>
    <body>
        <?php
        // put your code here
        require_once 'login.php';
        $conn = new mysqli($hn, $un, $pw, $db);
        if ($conn->connect_error) die($conn->connect_error);
        ?>
        
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                    
                </button>
                <a class="navbar-brand" href="#">Alitalia Ristorante</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav nav-menu justified">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="meals.php">Meals</a></li>
                    <li><a href="drinks.php">Drinks</a></li>                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="reservation.php"><span class="glyphicon glyphicon-glass"></span> Make a reservation</a></li>
                </ul>
            </div>
        </div>
    </nav>
        
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Want to experience exquisite tastes?</div>
                <div class="intro-heading">Welcome at Alitalia Ristorante</div>
            </div>            
        </div>
    </header>
        
    <section>
        <div class="container-fluid text-center bg-grey">
            <h2>Menu Diversity</h2>
            <h4>We chose the best from around the world!</h4>
            <div class="row text-center slideanim">
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="images/paris.jpg" alt="Paris">
                        <p><strong>Paris</strong></p>
                        <p>Traditional french meals</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="images/newyork.jpg" alt="New York">
                        <p><strong>New York</strong></p>
                        <p>Modern american meals</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="images/sanfran.jpg" alt="San Francisco">
                        <p><strong>San Francisco</strong></p>
                        <p>American-Mexican meals</p>
                    </div>
                </div>
            </div>
            <div class="row text-center slideanim">
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="images/tokyo.jpg" alt="Tokyo">
                        <p><strong>Tokyo</strong></p>
                        <p>Traditional japanese meals</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="images/venice.jpg" alt="Venice">
                        <p><strong>Venice</strong></p>
                        <p>Traditional italian meals</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="images/sydney.jpg" alt="Sydney">
                        <p><strong>Sydney</strong></p>
                        <p>Australian aboriginal meals</p>
                    </div>
                </div>
            </div>
        </div>            
    </section>
        
    <section id="team">
        <div class="container text-center">
            <div class="row slideanim">
                <div class="col-lg-12">
                    <h2>OUR CHEFS TEAM</h2>
                    <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                </div>                
            </div>
            <div class="row slideanim">
                <div class="col-md-4">  
                    <div class="team-member text-center">
                        <img src="images/chef-femal-african.jpg" class="img-responsive img-circle" alt="Chef Buhari">
                        <h4>Chef Buhari</h4>
                        <p>African Specialties</p>
                    </div>                    
                </div>   
                <div class="col-md-4">  
                    <div class="team-member text-center">
                        <img src="images/chef-femal-asian.jpg" class="img-responsive img-circle" alt="Chef Izumi">
                        <h4>Chef Izumi</h4>
                        <p>Asian Specialties</p>
                    </div>                    
                </div>       
                <div class="col-md-4">  
                    <div class="team-member text-center">
                        <img src="images/chef-femal-cauc.jpg" class="img-responsive img-circle" alt="Chef Draxler">
                        <h4>Chef Draxler</h4>
                        <p>European Specialties</p>
                    </div>                    
                </div>       
            </div>
            <div class="row slideanim">
                <div class="col-md-4">  
                    <div class="team-member text-center">
                        <img src="images/chef-male-african.jpg" class="img-responsive img-circle" alt="Chef Carver">
                        <h4>Chef Carver</h4>
                        <p>Caribbean Specialties</p>
                    </div>                    
                </div>   
                <div class="col-md-4">  
                    <div class="team-member text-center">
                        <img src="images/chef-male-cauc.jpg" class="img-responsive img-circle" alt="Chef Dupont">
                        <h4>Chef Dupont</h4>
                        <p>European Specialties</p>
                    </div>                    
                </div>       
                <div class="col-md-4">  
                    <div class="team-member text-center">
                        <img src="images/chef-male-asian.jpg" class="img-responsive img-circle" alt="Chef Chang">
                        <h4>Chef Chang</h4>
                        <p>Asian Specialties</p>
                    </div>                    
                </div>       
            </div>
        </div>
    </section>        
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script>
        $(window).scroll(function() {
            $(".slideanim").each(function(){
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    </script>
    </body>
</html>
