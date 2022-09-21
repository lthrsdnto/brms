<!doctype>
<html>
	<head>
		<title>REPORT</title>
		<?php require('header.php');?>
		<?php require('css/report.css');?>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	</head>
	<body>
		<main>
			<div id="printableArea" class="box">
				<div>
				<h3>REPORT</h3>   
					<table class="table table-bordered print  table-sm table-condensed">
						<div class="prnt">
							<div class="month">
								<form id="month" class="bymonth" action="printsbstudent.php" method="POST">
									<h5>Select month of the year</h5>
									<select name="month" id="month">
										<option value="1"selected="selected">January</option>
										<option value="2">February</option>
										<option value="3">March</option>
										<option value="4">April</option>
										<option value="5">May</option>
										<option value="6">June</option>
										<option value="7">July</option>
										<option value="8">August</option>
										<option value="9">September</option>
										<option value="10">October</option>
										<option value="11">November</option>
										<option value="12">December</option>
										<input type="submit" name="btn" value="Preview">
									</select>
								</form>
							</div>	   					        
						        <div class="allprnt">
							        <form id="all" class ="allprint" action="printAll.php" method="POST">
							        	<h5>PRINT ALL MATERIAL REPORT</h5>
							        	<input type="submit" name="printAll" value="PRINT ALL MATERIALS">
							        </form>
						      	</div>
					 		<tbody class="txt">					          
					        </tbody>													        
						</div>
					</table>			
				</div>
			<div id="printableArea">	
		</main>
	</body>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

	<script>
		$(document).ready(function() {
    	$('#example').DataTable();
		} );
	</script>

	<script>
		function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
	</script>


	<footer>
    	<b>Copyright &copy; 2021 QCU | SBIT-3F</b>
	</footer>
</html>