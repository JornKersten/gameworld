<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Positionering">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>GameWorld</title>
    </head>
    <body>
        <div class="main-container">
            <?php
                include('header.php')
            ?>
            <div id="banner">
                <div id="banner-text">
                    <h1>Welcome to GameWorld</h1>
                    <h3>The most complete webshop<h3>
                    <div></div>
                </div>
            </div>
            <div id="catagories">
                <a href="games.php?gameCatagory=1">
                    <div id="catagories-pc">
                        <h1>PC</h1>
                    </div>
                </a>
                <a href="games.php?gameCatagory=3">
                    <div id="catagories-playstation">
                        <h1>Playstation</h1>
                    </div>
                </a>
                <a href="games.php?gameCatagory=2">
                    <div id="catagories-xbox">
                        <h1>X-box</h1>
                    </div>
                </a>
                <div class="clearfix"></div>
            </div>
            <?php 
                include('footer.php') 
            ?>
        </div>
    </body>
</html>