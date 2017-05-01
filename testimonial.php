<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Classuite</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/testimonial.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 70%;
        margin: auto;
    }
    </style>
</head>
<body>

    <div class="container">
      <br>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->


        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
              <div class="container">
                  <div class="row">
                      <div class="col-xs-offset-3 col-xs-6 col-sm-offset-1 col-sm-2 col-md-offset-1 col-md-2">
                        <img id="one"  class="autorpic" src="img/KevinMoore3x.png">
                      </div>
                      <div class="col-xs-12 col-sm-7 col-md-6 textsection">
                          <p class="aligntext">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p><br>
                          <p class="autor"><strong>Jon Steve</strong>
                          <p class="autor">Engineer<br>Renfe</p>
                      </div>
                      <div class="carousel-caption">
                      </div>
                    </div>
                </div>
            </div>
          <div class="item">
              <div class="container">
                  <div class="row">
                      <div class="col-xs-offset-3 col-xs-6 col-sm-offset-1 col-sm-2 col-md-offset-1 col-md-2">
                        <img id="two" class="autorpic" src="img/Koutroumanis_D3x.png" >
                      </div>
                      <div class="col-xs-12 col-sm-7 col-md-6 textsection" >
                          <p class="aligntext">Petnumbers is a fantastic, complimentary tool, which helps elevate the posible living zone.<br></p>
                          <p class="autor"><strong>Dr. Jason Five</strong>
                          <p class="autor">Professor of Management<br> The University of Madrid</p>
                      </div>
                      <div class="carousel-caption">
                      </div>
                    </div>
              </div>
          </div>
      </div>
        <!-- Left and right controls -->
    <article class="buttons">
        <div class="container">
            <div class="row">
                <div class="col-xs-offset-2 col-xs-12 col-sm-offset-4 col-sm-2 buttonalign">
                    <a class="" href="#myCarousel" role="button" data-slide="prev">
                        <img src="img/arrowleft.svg" alt=""/>

                        <!--<div class="circle">

                        a class desactivadas "left carousel-control" //"right carousel-control"
                            <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </div>-->
                    </a>
                    <a class="" href="#myCarousel" role="button" data-slide="next">
                        <img id="right" src="img/arrowleft.svg" alt=""/>
                        <!--<div class="circle">
                            <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </div>-->
                    </a>
                </div>
                <!--<div class="col-xs-offset-4 col-xs-1 col-sm-offset-0 col-sm-1">
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <div class="circle">
                                <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </div>
                        </a>-->
                </div>
            </div>
        </div>
    </article>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
