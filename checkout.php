<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="checkout">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>GameWorld</title>
</head>
	<body>        
		<div class="main-container">    
            <?php
                include('header.php')
            ?>
			<table>
				<thead>
					<tr>
						<th>Image</th>
						<th>Game</th>
						<th>Discription</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><img src="images/watchDogs2.jpg"></td>
						<td>Watch Dogs 2</td>
						<td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
						<td>&euro; 35,00</td>
					</tr>
					<tr>
						<td><img src="images/don'tStarve.jpg"></td>
						<td>Don't starve</td>
						<td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
						<td>&euro; 12,00</td>
					</tr>
					<tr>
						<td><img src="images/justCause4.jpg"></td>
						<td>Just Cause 4</td>
						<td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
						<td>&euro; 58.99</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="4" style="padding-right: 18px;">&euro; 47,00</td>
					</tr>
				</tfoot>
			</table>
		</div>
		<?php 
			include('footer.php') 
		?>
	</body>
</html>