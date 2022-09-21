
<?php
	session_start();
	$conn = mysqli_connect("localhost","root","","adminaccount");

######################################################################
                    #--Add Modal--#
	if(isset($_POST['save_book']))
	{
        $id = $_POST['id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $subject = $_POST['subject'];
        $type = $_POST['type'];
        $yearpublished = $_POST['yearpublished'];
        $isbn = $_POST['isbn'];
        $issn = $_POST['issn'];
        $pages = $_POST['pages'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $publisher = $_POST['publisher'];
        $sb = $_POST['sb'];
        $sf = $_POST['sf'];
        $ba = $_POST['ba'];
        $image = $_POST['image'];
        $description = $_POST['description'];
        $publicity = $_POST['publicity'];

		$query = "INSERT INTO materials (title, author, subject, type, yearpublished, isbn, issn, pages, price, quantity, publisher, sb, sf, ba, image, description, publicity ) VALUES ('$title','$author','$subject','$type','$yearpublished','$isbn','$issn','$pages','$price','$quantity','$publisher','$sb','$sf','$ba','$image','$description','$publicity')";
		$query_run = mysqli_query($conn, $query);

		if($query_run)
		{
			$_SESSION['status'] = "Successfully Save";
			header('Location: mngbook.php');
		}
		else
		{
			$_SESSION['status'] = "<center>Not Save</center>";
			header('Location: mngbook.php');
		}
	}

######################################################################
					#--Details Modal--#
	if(isset($_POST['checking_viewbtn']))
	{
		$s_id = $_POST['b_id'];

		$query = "SELECT * FROM materials WHERE id='$s_id' ";
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
          foreach($query_run as $row)            
        	{
        		echo $return = '
                    <style>
                        .pstn{
                            font-weight: bold;
                            position:absolute;
                            top:20px;
                            right:120px;
                        }
                        .image-pstn{ 
                            position:absolute;
                            top:70px;
                            right:30px;  
                        }
                       
                    </style>
                    <h6 class="pstn">BOOK COVER</h6> 
                    <h7 class="image-pstn"><img src="BookCover/'.$row['image'].'" width="260" height="400"></h7>
                   
                    <h6> ISBN :<span style="padding-RIGHT: 80px;padding-left: 150px"><input value="'.$row['isbn'].'" size="20px;" style="width: 280px;" readonly></span></h6>

                    <h6> ISSN :<span style="padding-RIGHT: 80x;padding-left: 150px"><input value="'.$row['issn'].'" size="20px;" style="width: 280px;" readonly></span></h6>

        			<h6> TITLE :<span style="padding-RIGHT: 80px;padding-left: 143px"><input value="'.$row['title'].'"size="20px;" style="width: 280px;" readonly></span></h6>

                    <h6> AUTHOR :<span style="padding-RIGHT: 80px;padding-left: 119px"><input value="'.$row['author'].'" size="20px;" style="width: 280px;" readonly></span></h6>

        			<h6> SUBJECT :<span style="padding-RIGHT: 80px;padding-left: 120px"><input type="text" value="'.$row['subject'].'" size="20px;" style="width: 280px;" readonly></span></h6>

                    <h6> MATERIAL :<span style="padding-RIGHT: 80px;padding-left: 109px"><input value="'.$row['type'].'" size="20px;" style="width: 280px;" readonly></span></h6>

                    <h6> PUBLISHER :<span style="padding-RIGHT: 80px;padding-left: 105px"><input value="'.$row['publisher'].'" size="20px;" style="width: 280px;" readonly></span></h6>

        			<h6> YEAR PUBLISHED :<span style="padding-RIGHT: 80px;padding-left: 60px"><input value="'.$row['yearpublished'].'" size="20px;" style="width: 280px;" readonly></span></h6>

                    <h6> PAGES :<span style="padding-RIGHT: 80px;padding-left: 140px"><input value="'.$row['pages'].'" size="20px;" style="width: 280px;" readonly></span></h6>

                    <h6> PRICE :<span style="padding-RIGHT: 80px;padding-left: 145px"><input value="&#8369 : '.$row['price'].'" size="20px;" style="width: 280px;" readonly></span></h6>

                    <h6> San Bartolome Copies :<span style="padding-RIGHT: 25px;padding-left: 25px"><input value="'.$row['sb'].'"size="20px;" style="width: 280px;" readonly></span></h6>

                    <h6> San Francisco Copies :<span style="padding-RIGHT: 35px;padding-left: 35px"><input value="'.$row['sf'].'" size="20px;" style="width: 280px;" readonly></span></h6>

                    <h6> Batasan :<span style="padding-RIGHT: 80px;padding-left: 130px"><input value="'.$row['ba'].'" size="20px;" style="width: 280px;" readonly></span></h6>

                    <h6> PUBLICITY :<span style="padding-RIGHT: 80px;padding-left: 110px"><input value="'.$row['publicity'].'" size="20px;" style="width: 280px;" readonly></span></h6>

                    <h6> DESCRIPTION :</h6>
                    <h7><textarea class="form-control" name="description" rows="4" readonly>'.$row['description'].'</textarea><h7>
        		';
			}                        
    	}
    	else{
    		echo $return = "<h5>No Record Found</h5>";
    	}
    }
######################################################################
					#--Edit Modal--#
    if(isset($_POST['checking_editbtn']))
	{
		$s_id = $_POST['b_id'];
		// echo $return = $s_id;
		$result_array = [];

		$query = "SELECT * FROM materials WHERE id='$s_id' ";
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
          foreach($query_run as $row)            
        	{
        		array_push($result_array, $row);
        		header('Content-type: application/json');
        		echo json_encode($result_array);
			}                        
    	}
    	else{
    		echo $return = "<h5>No Record Found</h5>";
    	}
    }


    if(isset($_POST['update']))
    {
    	$id = $_POST['edit_id'];
    	$title = $_POST['title'];
    	$author = $_POST['author'];
    	$subject = $_POST['subject'];
        $type = $_POST['type'];
    	$yearpublished = $_POST['yearpublished'];
        $isbn = $_POST['isbn'];
        $issn = $_POST['issn'];
        $pages = $_POST['pages'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $publisher = $_POST['publisher'];
        $sb = $_POST['sb'];
        $sf = $_POST['sf'];
        $ba = $_POST['ba'];
        //$image = $_POST['image'];
        $description = $_POST['description'];
        $publicity = $_POST['publicity'];

    	$query = "UPDATE materials SET title='$title', author='$author', subject='$subject',type='$type', yearpublished='$yearpublished',isbn='$isbn', issn='$issn', pages='$pages', price='$price', quantity='$quantity', publisher='$publisher', sb='$sb',sf='$sf',ba='$ba',  description='$description', publicity='$publicity' WHERE id='$id' ";
    	$query_run = mysqli_query($conn, $query);

    	if($query_run)
    	{
    		$_SESSION['status'] = "Successfully Update";
			header('Location: mngbook.php');
		}
		else
		{
			$_SESSION['status'] = "<center>Something Went Wrong</center>";
			header('Location: mngbook.php');
		}
    }

######################################################################
					#--Delete Modal--#
    if(isset($_POST['delete_book']))
    {
    	$id = $_POST['b_id'];

    	$query = "DELETE FROM materials WHERE id='$id' ";
    	$query_run = mysqli_query($conn, $query);

    	if($query_run)
    	{
    		$_SESSION['status'] = "Successfully Deleted";
			header('Location: mngbook.php');
		}
		else
		{
			$_SESSION['status'] = "<center>Something Went Wrong</center>";
			header('Location: mngbook.php');
		}
    }
#<h6> QUANTITY :<span style="padding-RIGHT: 80px;padding-left: 110px"><input value="'.$row['quantity'].'"disabled></span></h6>#
    
?>