<?php
//fetch.php
  $connect = mysqli_connect("localhost", "root", "", "adminaccount");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = " SELECT * FROM materials WHERE title LIKE '%".$search."%' 
  
  OR author LIKE '%".$search."%' 
  OR subject LIKE '%".$search."%' 
  OR type LIKE '%".$search."%'
  OR yearpublished LIKE '%".$search."%'
  
 ";
}
else
{
 $query = "SELECT * FROM materials ORDER BY Id LIMIT 12";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive ">
   <table class="table table-bordered table-hover table-sm">
<thead class = "thead-dark">
    <tr>

     <th>Book#</th>
      <th>Title</th>
      <th>Author</th>
      <th>Subject</th>
      <th>Material Type</th>
      <th>Date Added</th>

    </tr>
    </thead>
 ';

 $no=1;
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
  <tr>
    <td>'.$no.'</td>
    <td>'.$row["title"].'</td>
    <td>'.$row["author"].'</td>
    <td>'.$row["subject"].'</td>
    <td>'.$row["type"].'</td>
    <td>'.$row["yearpublished"].'</td>
   </tr>
  ';

  
          $no++;
 }
 echo $output;
}
else
{
  echo 'Data Not Found';
}

?>