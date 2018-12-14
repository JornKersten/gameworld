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
            <div class="all-games">
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "gameworld";

                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 

                    if (isset( $_GET['gameCatagory'])){
                        $gameCatagory = $_GET['gameCatagory'];
                        $sql = "SELECT gameImage, gameDiscription, gameId, gameTitle, gamePrice FROM games WHERE gameCatagory = '$gameCatagory' ";
                    }
                    else{
                        $sql = "SELECT gameImage, gameDiscription, gameId, gameTitle, gamePrice FROM games";
                    }
                    $result = $conn->query($sql);
                    echo "<div class='product-contianer'>";
                    echo "<ul>";
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {

                            echo "<li class='product-item'>" ?>
                            <img src="<?php echo "./images/" . $row["gameImage"]; ?>">
                            
                            <?php
                            
                            echo "<div class='product-price'>€". $row["gamePrice"]."</div>";
                            echo "<div class='product-info'>";
                            echo "<div class='product-title'>". $row["gameTitle"]."</div>";
                            echo "<div class='product-discription'>". $row["gameDiscription"]."</div>";
                            echo "<div class='order'><input class='order' type='submit' value='Order'></dv>";
                            echo "</div>";
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "</ul>";
                    echo "<div class='clearfix'></div>";
                    echo "</div>";
                    $conn->close();
                ?>
            </div>
            <?php 
                include('footer.php') 
            ?>
        </div>
    </body>
</html>