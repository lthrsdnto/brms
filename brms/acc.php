<center style="font-size:20px">

<?php
session_start();

if(isset($_SESSION['username'])) {
echo $_SESSION['username']."<br>"."ADMIN"."<br/>";
} else {
header('location: index.php');
}

?> 

</center>


