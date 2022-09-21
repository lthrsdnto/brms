<?php
 $con=mysqli_connect("localhost","root","","adminaccount");
 // Check connection
 if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }


  //Items available
  $qry="SELECT COUNT(id) AS total FROM materials WHERE publicity = 'public'";
  $res=mysqli_query($con, $qry);
while ($row = mysqli_fetch_assoc($res)) {
  	$outputa = "Total available materials in all campuses : ".$row['total'];
  }
  $qry="SELECT COUNT(id) AS archiveds FROM materials WHERE publicity = 'archived'";
  $res=mysqli_query($con, $qry);
  while ($row = mysqli_fetch_assoc($res)){
    $outt = "Total archived materials : ".$row['archiveds'];
  }


  //sb
  $qry="SELECT COUNT(sb) AS sum FROM materials WHERE sb >= 1 AND publicity = 'public'";
  $res=mysqli_query($con, $qry);
  while ($row = mysqli_fetch_assoc($res)) {
    $tit1 = "San Bartolome";
  	$output = "Total available materials : ".$row['sum'];
  }

  
  //sf
  $qry="SELECT COUNT(sf) AS sum1 FROM materials WHERE sf >= 1 AND publicity = 'public'";
  $res=mysqli_query($con, $qry);
  while ($row = mysqli_fetch_assoc($res)) {
    $tit2 = "San Francisco";
  	$output1 = "Total available materials : ".$row['sum1'];
  }


  //ba
  $qry="SELECT COUNT(ba) AS sum2 FROM materials WHERE ba >= 1 AND publicity = 'public'";
  $res=mysqli_query($con, $qry);
  while ($row = mysqli_fetch_assoc($res)) {
    $tit3 = "Batasan";
  	$output2 = "Total available materials : ".$row['sum2'];
  }

//Book count
  $qry="SELECT COUNT(id) AS books FROM materials WHERE type = 'Book'";
  $res=mysqli_query($con, $qry);
  while ($row = mysqli_fetch_assoc($res)) {
    $bookOutput = "Total number of books: ".$row['books'];
  }

//Thesis count
  $qry="SELECT COUNT(id) AS thesis FROM materials WHERE type = 'Thesis'";
  $res=mysqli_query($con, $qry);
  while ($row = mysqli_fetch_assoc($res)) {
    $thesisOutput = "Total number of Thesis : ".$row['thesis'];
  }

//Journal count
  $qry="SELECT COUNT(id) AS journal FROM materials WHERE type = 'Journal'";
  $res=mysqli_query($con, $qry);
  while ($row = mysqli_fetch_assoc($res)) {
    $journalOutput = "Total number of Journals : ".$row['journal'];
  }

  //Article count
  $qry="SELECT COUNT(id) AS articles FROM materials WHERE type = 'Articles'";
  $res=mysqli_query($con, $qry);
  while ($row = mysqli_fetch_assoc($res)) {
    
    $articleOutput = "Total number of Articles : ".$row['articles'];
  }

//Other count
  $qry="SELECT COUNT(id) AS other FROM materials WHERE type = 'Others'";
  $res=mysqli_query($con, $qry);
  while ($row = mysqli_fetch_assoc($res)) {
    
    $otherOutput = "Other material types : ".$row['other'];
  }

  //map count
  $qry="SELECT COUNT(id) AS map FROM materials WHERE type = 'Maps'";
  $res=mysqli_query($con, $qry);
  while ($row = mysqli_fetch_assoc($res)) {
    
    $mapOutput = "Total number of Maps : ".$row['map'];
  }

 ?>     




<!doctype>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
	</head>
	<body>
<div><h5>Items summary</h5></div>
		<div style="display: flex; justify-content: space-around">
    <!--########################################################################################-->
                                    <!--Total available materials in all campuses-->
  	<div class="card" style="background-color:gray; height: 5rem; width: 10rem;" align="center">
      <?php echo $outputa; ?>
  	</div>
    <!--########################################################################################-->
                                    <!--Total archived materials--> 
    <div class="card" style="background-color:gray; height: 5rem; width: 10rem;" align="center">  
      <?php echo $outt,"<br>"; ?>
    </div>
		<!--########################################################################################-->
                                    <!--San Bartolome Total available materials-->
		<div class="card" style="background-color:gray; height: 5rem; width: 10rem;" align="center">
      <?php echo $tit1,"<br>"; ?>
      <?php echo $output; ?>
  	</div>
    <!--########################################################################################-->
                                    <!--San Francisco Total available materials-->
  	<div class="card" style="background-color:gray; height: 5rem; width: 10rem;" align="center">
    	<?php echo $tit2,"<br>"; ?>
      <?php echo $output1; ?>
  	</div>
    <!--########################################################################################-->
                                    <!--BatasanTotal available materials-->
    <div class="card" style="background-color:gray; height: 5rem; width: 10rem;" align="center">
    	<?php echo $tit3, "<br>"; ?>
      <?php echo $output2; ?>
  	</div>
    <!--########################################################################################-->
</div>
<br>
  <div><h5>Available Materials</h5></div>
    <div style="display: flex; justify-content: space-around">
    <!--########################################################################################-->
                                    <!--Total number of books-->
    <div class="card" style="background-color:gray; height: 5rem; width: 10rem;" align="center">
      <?php echo $bookOutput; ?>
    </div>
    <!--########################################################################################-->
                                    <!--Total number of Thesis-->
    <div class="card" style="background-color:gray; height: 5rem; width: 10rem;" align="center">
      <?php echo $thesisOutput; ?>
    </div>
    <!--########################################################################################-->
                                    <!--Total number of Journals-->
    <div class="card" style="background-color:gray; height: 5rem; width: 10rem;" align="center">
      <?php echo $journalOutput; ?>
    </div>
    <!--########################################################################################-->
                                    <!--Total number of Articles-->
    <div class="card" style="background-color:gray; height: 5rem; width: 10rem;" align="center">
      <?php echo $articleOutput; ?>
    </div>
    <!--########################################################################################-->
                                    <!--Total number of Maps-->
    <div class="card" style="background-color:gray; height: 5rem; width: 10rem;" align="center">
      <?php echo $mapOutput; ?>
    </div>
    <!--########################################################################################-->
                                    <!--Other material types-->
    <div class="card" style="background-color:gray; height: 5rem; width: 10rem;" align="center">
      <?php echo $otherOutput; ?>
    </div>
    <!--########################################################################################-->
    </div>
  </div>
	</body>
</html>