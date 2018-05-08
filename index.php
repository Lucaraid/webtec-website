<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Meine Webseite</title>
    <meta name="description" content="">
    <meta name="author" content="Luca Wandfluh">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/default.css">

    <!-- JS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="js/skeleton.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/canvas.js"></script>
    <script src="js/functions.js"></script>

    <?php
    if (isset($_POST['submit'])){ ?>
        <script>
            alert("Name: <?= $_POST["name"]?>, " +
                  "Email: <?= $_POST["email"]?>, " +
                  "Text: <?= $_POST["text"]?>");
        </script>
    <?php } ?>

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="container">
    <section class="header">
        <h2 class="title">Webtec Modul &copy;by Luca Wandfluh</h2>
    </section>
    <nav class="navbar">
        <div class="container">
            <ul class="navbar-list">
                <li class="navbar-item"><a class="navbar-link" href="#styleswitcher">Styleswitcher</a></li>
                <li class="navbar-item"><a class="navbar-link" href="#canvas_hslu">Canvas</a></li>
                <li class="navbar-item"><a class="navbar-link" href="#diashow">Diashow</a></li>
                <li class="navbar-item"><a class="navbar-link" href="#form">Kontaktformular</a></li>
                <li class="navbar-item"><a class="navbar-link" href="#pictures">Bilder</a></li>
            </ul>
        </div>
    </nav>
    <div class="docs-section" id="styleswitcher">
        <div class="row">
            <div class="one-half column">
                <h4>Styleswitcher</h4>
                <p id="switch">It's possible to switch the font color from<br/>
                    <strong>black(#222)</strong> to <strong>magenta(#04DEAD)</strong> and back:</p>
            </div>
            <div class="one-half column">
                <h4>Switch</h4>
                <input type="checkbox" id="toggle">
                <label for="toggle">
                    <span></span>
                </label>
            </div>
        </div>
    </div>
    <div class="docs-section" id="canvas_hslu">
        <div class="row">
            <h4>Canvas</h4>
            <div class="one-half column">
                <canvas id="canvas">
                </canvas>
            </div>
        </div>
    </div>
    <div class="docs-section" id="diashow">
        <div class="row">
            <h4>Diashow</h4>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/1.png" alt="Los Angeles" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="images/2.png" alt="Chicago" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="images/3.png" alt="New york" style="width:100%;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="docs-section" id="form">
        <div class="row">
            <h4>Form</h4>
            <form id="innerform" action="index.php" method="post">
                <div class="six columns">
                    <label for="name">Your name</label>
                    <input class="u-full-width" id="name" name="name" type="text" placeholder="John Diggle">
                </div>
                <div class="six columns">
                    <label for="email">Your email</label>
                    <input class="u-full-width" id="email" name="email" type="email" placeholder="example@gmail.com">
                </div>
                <label for="text">Message</label>
                <textarea class="u-full-width" id="text" name="text" placeholder="Hello, ..."></textarea>
                <input class="button-primary" name="submit" type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
</body>
</html>
