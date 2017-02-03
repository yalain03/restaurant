<!DOCTYPE html>
<!--
This page just shows meals of the restaurant
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
        <title>Alitalia Meals</title>
        <style>
            header {
                margin-bottom: 20px;                
            }
            
            .padded {
                padding: 20px;
            }
            
            .thumbnail {
                color: #f4b40e;
            }
            
            .golden {
                background-color: #f9e17e;
            }
        </style>
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
                        <li class="active"><a href="#">Meals</a></li>
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
        
         <div class="container golden padded">
            <div class="row slideanim">
        <?php
        // put your code here
        for ($j = 0; $j < 3; ++$j)
            printPics();
        
        function printPics() {
            for ($i = 0; $i < 3; ++$i)
            {
                echo <<<_END
        
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img src="images/meal.jpg" alt="meal">
                        <p><strong>Lorem ipsum..</strong></p>
                        <p>Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            
_END;
            }     
        }
        ?>                
                </div>
        </div>
        
        <div class="container golden padded">
            <div class="row slideanim">
        <?php
        // put your code here
        for ($j = 0; $j < 3; ++$j)
            printPics1();
        
        function printPics1() {
            for ($i = 0; $i < 3; ++$i)
            {
                echo <<<_END
        
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img src="images/meal1.jpg" alt="meal">
                        <p><strong>Lorem ipsum..</strong></p>
                        <p>Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            
_END;
            }     
        }
        ?>                
                </div>
        </div>
        
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
