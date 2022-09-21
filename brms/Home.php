<?php require('css/style.css');?>
<!doctype>
<html>
	<head>
		<title>DASHBOARD</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php require('header.php');?>
	</head>
	<body>
		<?php

			date_default_timezone_set('Asia/Manila');
			$todays_date = date("y-m-d h:i:sa");
			$today = strtotime($todays_date);

		?>
		<main>
			<div class="container">
				<form>
					<h3 align="center">DASHBOARD</h3>
					<h6 align="right"><?php echo "Date today ";
						echo "<br>";
						echo date("M-d-Y || h:i:sa", $today); ?>
					</h6>
						<?php include('summary.php');?>
				</form>
			</div>	
		</main>
	</body>
	<footer>
    	<b>Copyright &copy; 2021 QCU | SBIT-3F</b>
	</footer>
</html>