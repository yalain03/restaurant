<!doctype html>
<!--
This page lets the user make reservation
Yves A.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="authror" content="Yves A.">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="reservation.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> 
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.3/jquery.timepicker.min.css">
        <style>
            .main {
                border: 2px solid #f6f6f6;
                height: 500px;
                margin-top: 100px;
                border-radius: 5px;
            }
        </style>
        <title></title>
    </head>
    <body>      
    
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="meals.php">Meals</a></li>
                    <li><a href="drinks.php">Drinks</a></li>                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="reservation.php"><span class="glyphicon glyphicon-glass"></span> Make a reservation</a></li>
                </ul>
            </div>
        </div>
    </nav> 
        
    <?php
        // put your code here
        require_once 'login.php';
        $conn = new mysqli($hn, $un, $pw, $db);
        if ($conn->connect_error) die($conn->connect_error);
        
        if (isset($_POST['first']) &&
            isset($_POST['last']) &&
            isset($_POST['places']) &&
            isset($_POST['datepicker']) &&
            isset($_POST['timepicker']))
        {
            $firstName = $_POST['first'];
            $lastName = $_POST['last'];
            $places = $_POST['places'];
            $date = $_POST['datepicker'];
            $time = $_POST['timepicker'];
            
            $query = "INSERT INTO reservations VALUES('$firstName', '$lastName', $places, '$date', '$time')";
            $result = $conn->query($query);
            if (!$result) die("Database access failed: ". $conn->error);            
        }        
        ?>
    
    <header>            
        <div class="container">
            <div class="main slideanim">                
                <form id="form" method="post" action="reservation.php" class="col-md-offset-3">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group form-inline">
                            <label class="control-label" for="first">First Name: </label>
                            <input type="text" name="first" id="first" class="form-control" autofocus>
                        </div> 
                    </div>                                      
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group form-inline">
                            <label class="control-label" for="last">Last Name: </label>
                            <input type="text" name="last" id="last" class="form-control">
                        </div>   
                    </div>                                     
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group form-inline">
                            <label class="control-label" for="places">N&deg; of places: </label>
                            <select class="form-control" name="places">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5"> 
                        <div class="form-group form-inline">
                            <label class="control-label" for="datepicker">Date: </label>
                            <div class='input-group date'>
                                <input type='text' class="form-control" id="datepicker" name="datepicker"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>                            
                        </div>
                    </div>
                </div>   
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group form-inline">
                            <label class="control-label" for="timepicker">Time: </label>
                            <div class="input-group">
                                <input id="timepicker" name="timepicker" type="text" class="form-control">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-5">
                            <input type="submit" value="Make reservation" class="btn btn-success btn-lg">
                        </div>                        
                    </div>
            </form>
            </div>            
        </div>
    </header>   
        
    <div class="row margined">
        <div id="googleMap" style="width: 98%; height: 400px;"></div>
    </div>        
    
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> 
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.3/jquery.timepicker.min.js"></script>
    <script>
        $(function() {            
            $('#datepicker').datepicker({
                dateFormat: 'yy-mm-dd'
            }).val();
            $('#timepicker').timepicker().val();
        });
    </script>
    <script>
    $(document).ready(function() {
        $(".slideanim").each(function(){
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
                $(this).addClass("slide");
            }
        });
    });
    </script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        var myCenter = new google.maps.LatLng(41.878114, -87.629798);

        function initialize() {
        var mapProp = {
            center:myCenter,
            zoom:12,
            scrollwheel:false,
            draggable:false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

        var marker = new google.maps.Marker({
            position:myCenter
        });

        marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    </body>
</html>
