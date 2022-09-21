<?php include'connection.php';?>

<?php
date_default_timezone_set('Asia/Manila');

$today_date = date("y-m-d h:i:sa");
$today = strtotime($today_date);

?>

<!DOCTYPE html>
<html>
<head>
		<title>REPORT</title>
		<?php require('header.php');?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
	    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
			
	</head>
<body>
	<div float="left">
<form method="POST" action="sam.php">
	
	<table border="1" bgcolor="#00CCFF">
		<h4 align="right"><?php
		echo "Date today";
		echo "<br>";
		echo date("M-d-Y || h:i:sa", $today);
		echo "<br>";
		?></h4>
		<tr>
			<input type="radio" name="by" value="today" checked="checked">Today
		</tr>
		<tr>
			<input type="radio" name="by" value="week">This Week
		</tr>
		<tr>
			<input type="radio" name="by" value="month">This Month
		</tr>


<tr><td><input type="submit" name="submit" value="Preview"/></td></tr>
	</table>
	

</form>
</div>

<div id="printableArea">
	<div>
		<form class="reportForm">
			<h3>REPORT</h3>
				<p>Total Number of Books:<b>
                      <?php
                      $con=mysqli_connect("localhost","root","","adminaccount");
                      // Check connection
                      if (mysqli_connect_errno())
                        {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }

                      $sql="SELECT id FROM materials";

                      if ($result=mysqli_query($con,$sql))
                        {
                        // Return the number of rows in result set
                        $rowcount=mysqli_num_rows($result);
                        echo $rowcount;
                        // Free result set
                        mysqli_free_result($result);
                        }
                      mysqli_close($con);
                      ?>     
                      </b>
                    </p>
				<div class="prnt">
				        <button type="button" class="btn btn-primary" onclick="printDiv('printableArea')">Print</button></div>
				        
						<table class="table table-bordered print  table-sm table-condensed">
				        <thead class="txt">
				          <tr>
				               
				                <th>Title</th>
				                <th>Subject</th>
				                
				                <th>Author</th>
				                <th>Type</th>
				               
				                <th>Quantity</th>
				                <th>Price</th>
				                <th>SB Copies</th>
				                <th>SF Copies</th>
				                <th>BA Copies</th>
				                <th>Date Added</th>
				                <th>Status</th>
				          </tr>
				        </thead>
				        <tbody class="txt">
				          <?php
				          $no=1;
				          $con=mysqli_connect('localhost','root','','adminaccount');
				          
				          $book_qry="SELECT * from materials WHERE Month(`stored`) = Month(NOW())";
				          
				          $book_res=mysqli_query($con,$book_qry);
				          while($book_data=mysqli_fetch_assoc($book_res))
				          {

				          ?>
				          <tr>
				            
				            <td><?php echo $book_data['title']; ?></td>
				            <td><?php echo $book_data['subject']; ?></td>
				           
				           
				            <td><?php echo $book_data['author']; ?></td>
				            <td><?php echo $book_data['type']; ?></td>
				         
				          
				           	<td><?php echo $book_data['sb'] + $book_data['sf'] + $book_data['ba']; ?></td>
				            <td><?php echo $book_data['price']; ?></td>
				            <td><?php echo $book_data['sb']; ?></td>
				            <td><?php echo $book_data['sf']; ?></td>
				            <td><?php echo $book_data['ba']; ?></td>
				            <td><?php echo $book_data['stored']; ?></td>
				            <td><?php echo $book_data['publicity']; ?></td>
				          </tr>
				          <?php
				          $no++;
				          }
				          ?>
				        </tbody>
				      </table>
				</div>  
		</form>		   
	</div>
</body>
</html>