<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Numberpets</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="/img/Classuitefavicon.ico" />
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
    <header>
        <div class="container">
            <div class= "row">
                <div class="col-xs-2">
                        <h1 id="main-logo">petnumbers<h1><!-- Logo -->
                </div>
                <div class="col-xs-offset-2 col-xs-8 ">
                    <ul id="main-menu" class="nav nav-pills"><!-- Menu -->
                      <li role="presentation" class="active"><a href="#primero">¿What is pet numbers?</a></li>
                      <li role="presentation" class="active"><a href="#segundo">Map</a></li>
                      <li role="presentation" class="active"><a href="#tercero">Testimonial</a></li>
                      <li role="presentation" class="active"><a href="#pie">Register your pet</a></li>
                      <li role="presentation" class="active"><a href="#pie">Report a problem</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div id="article-list"><!-- Inicio de lista de bloques o "articulos" -->
        <article id="primero">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div id="app">
                            <img src="img/logo.png" class="img-responsive" alt="Responsive image">
                        </div>
                    <div class="col-xs-12">
                        <div id="textlogo">
                            <h3>The application that lets you know where you want to live knowing the population of pets</h3>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article id= "segundo">
            <img src="img/map3x.png" class="img-responsive" alt="Responsive image">
        </article><!-- Fin de articulo 2" -->
        <article id = "tercero" class="info">
            <div class="container">
                <div class="row">
                    <h1>Testimonial</h1>
                </div>
            </div>
            <?php include 'testimonial.php';?>
        </article><!-- Fin de articulo 3" -->
        <article id= "cuarto" class="info">
            <img src="img/pub3x.png" class="img-responsive" alt="Responsive image"></img>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-offset-1 col-xs-3">
                            <h1>Mobile Too</h1>
                        </div>
                        <div class="col-xs-4">
                            <a href="https://itunes.apple.com/">
                                <img class="buttonsapp" id="ios" src="img/ios3x.png" class="img-responsive" alt="Responsive image">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a  href="https://play.google.com/">
                                <img class="buttonsapp" id="google" src="img/google3x.png" class="img-responsive" alt="Responsive image">
                            </a>
                       </div>
                    </div>
                </div>


        </article><!-- Fin de articulo 4" -->
        <article id="cinco" class="info">
            <div class="container">
                <div class="row">
                    <div class="col-xs-offset-2 col-xs-3">
                        <img src="img/madridlogo3x.png" class="img-responsive" alt="Responsive image">
                    </div>
                    <div class="col-xs-offset-1 col-xs-5">
                        <h1>Register your pet</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>


        </article>
        <article id="seis" class="info">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>¿Questions?</h1>
                        <h2>+34 65428381</h2>
                        <h2>info@petnumbers.com</h2>
                    </div>
                </div>
            </div>
        </article><!-- Fila de articulo 6" -->

        <article id="pie">
            <ul id="footer-menu" class="nav nav-pills"><!-- Menu -->
              <li role="presentation" class="active"><a href="https://twitter.com" target="blank">Twitter</a></li>
              <li role="presentation" class="active"><a href="https://instagram.com" target="blank">Instagram</a></li>
              <li role="presentation" class="active"><a href="https://facebook.com" target="blank">Facebook</a></li>
            </ul>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <p>Designed and bult by petnumbers, 2017</p>
                    </div>
                </div>
            </div>





        </article>
    </div>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
