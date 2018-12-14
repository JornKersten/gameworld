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
                <div class="contact-form">
                    <form class="form">
                        <ul>
                            <li class="li-text">Name</li>
                            <li><input class="text" type="text"></li>
                            <li class="li-text">Lastname</li>
                            <li><input class="text" type="text"></li>
                            <li class="li-text">E-mail</li>
                            <li><input class="text" type="text"></li>
                            <li class="li-text">Context</li>
                            <li><input class="text" type="text"></li>
                            <br>
                            <li><input class="submit" type="submit"></li>
                        </ul>
                    </form>
                </div>
            <?php 
                include('footer.php') 
            ?>
        </div>
    </body>
</html>