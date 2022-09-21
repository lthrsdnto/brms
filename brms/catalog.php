
<?php require('css/catalog.css');?>
<!doctype>
<html>
	<head>
		<title>CATALOGUING</title>
		<?php require('header.php');?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
	    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
			
	</head>
	<body>
		<main>
			<div class="container-fluid">
				<form>
			        <div class="col-md-13" >
			            <div class="card">
		                    <?php
		                      if(isset($_SESSION['status'])&& $_SESSION['status'] !='')
		                      {
		                        ?>
		                        <h5 style="color:green" align="center" class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                          <span aria-hidden="true">&times;</span>
		                        </button><?php echo $_SESSION['status'];?></h5>
		                        <?php
		                        unset($_SESSION['status']);
		                      }
		                    ?>                    
		                    <div class="card-header">
		                        <h4 align="center">CATALOGUING</h4>
		                        
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
		                    </div>
		                    <div class="card-body p-3 mb-2 bg-light text-dark">
		                      <table class="table table-dark" id="tblid">
		                        <thead style="color:white">
		                          <tr>
		                            <th style="display:none;" scope="col">#ID</th>
		                            <th scope="col">ISBN</th>
		                            <th scope="col">TITLE</th>
		                            <th scope="col">AUTHOR</th>
		                            <th scope="col">CATEGORY</th>
		                            <th scope="col">Yr. PUBLISHED</th>
		                            <th scope="col">Action</th>
		                          </tr>
		                        </thead>
		                        <tbody style="color:white">
		                          <?php
		                            $conn = mysqli_connect("localhost","root","","adminaccount");
		                            $query = "SELECT * FROM materials";
		                            $query_run = mysqli_query($conn, $query);

		                            if(mysqli_num_rows($query_run) > 0)
		                            {
		                              //while ($row = mysqli_fetch_array($query_run))
		                              foreach ($query_run as $row)            {
		                                ?>
		                                <tr>
		                                  <td style="display:none;" class="s_id"><?php echo $row['id']?></td>
		                                  <td style="color: black"><?php echo $row['isbn']?></td>
		                                  <td style="color: black"><?php echo $row['title']?></td>
		                                  <td style="color: black"><?php echo $row['author']?></td>
		                                  <td style="color: black"><?php echo $row['subject']?></td>  
		                                  <td style="color: black"><?php echo $row['yearpublished']?></td>
		                                  <td style="color: black">
		                                    <a href="#" class="badge badge-primary view_btn">Details</a>
		                                  </td>
		                                </tr>
		                                <?php

		                              }
		                             
		                            }
		                            else
		                            {
		                              echo "<h5>No Record Found</h5>";
		                            }
		                          ?>
		                          
		                        </tbody>
		                      </table>
		                    </div>
		                </div>      
				    </div>
				</form>
		    </div>
		    <!--##############################################################-->
                          <!--Details Modal-->

			    <div class="modal fade" id="ViewModal" tabindex="-1" aria-labelledby="ViewModalLabel" aria-hidden="true">
			      <div class="modal-dialog modal-lg">
			        <div class="modal-content">
			          <div class="modal-header">
			            <h4 class="modal-title" id="ViewModalLabel">Book Details</h4>
			            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			              <span aria-hidden="true">&times;</span>
			            </button>
			          </div>
			          <div class="modal-body">
			            <div class="viewing_data">

			            </div>  
			          </div>
			          <div class="modal-footer" align="center">
			            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			          </div>
			        </div>
			      </div>
			    </div>
			<!--##############################################################-->
		</main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    

    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    	<script>
		    $(document).ready(function() {
		        $('#tblid').DataTable({
		          "pagingType": "full_numbers",
				    "lengthMenu":[
				      [50,25,10,5,3,-1],
				      [50,25,10,5,3,"All"]
				    ],

				      responsive: true,
				      language: {
				        search: "_INPUT_",
				        searchPlaceholder: "Search records",
				    }
		        });
		    } );
        </script>
        <script>

      $(document).ready(function (){

        	//##########################Details Modal################################
        $('.view_btn').click(function(e){
          e.preventDefault();

          var s_id = $(this).closest('tr').find('.s_id').text();

          $.ajax({
            type: "POST",
            url: "code.php",
            data: {
                'checking_viewbtn': true,
                'b_id': s_id,
            },
            success: function(response){
              //console.log(response);
              $('.viewing_data').html(response);
              $('#ViewModal').modal('show');
            }

          });

        });
    });

        </script>
    </body>
	<footer>
    	<b>Copyright &copy; 2021 QCU | SBIT-3F</b>
	</footer>
</html>