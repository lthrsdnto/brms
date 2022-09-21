<?php require('css/mngbook.css');?>
<!doctype html>
<html lang="en">
  <head>
    <title>Manage Books</title>
    <?php require('header.php');?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
  </head>
  <body>
  <main>
<!--##############################################################-->
                            <!--Add Modal-->
    <div class="modal fade" id="AddModal" tabindex="-1" aria-labelledby="AddModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="AddModalLabel">Add New Books</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <h7 align="center" style="font-size:14px"><i>" fill all important details "</i></h7>
              <form action="code.php" method="POST">
                <div class="modal-body">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <div class="row ">
                  <div class="col-7 input-group-sm mb-3">
                  <label>Title</label>
                  <input type="text" class="form-control" name="title" placeholder="Title" aria-label="title" autofocus required>
                  </div>
                  <div class="col-5 input-group-sm mb-3">
                  <label>Author</label>
                  <input type="text" class="form-control" name="author" placeholder="Lxndr Fy" aria-label="Author" autofocus required>
                  </div>
                  <div class="col-7 input-group-sm mb-3">
                  <label>Publisher</label>
                    <input type="text" class="form-control" name="publisher" placeholder="AFSC, Inc.">
                  </div>
                  <div class="col-5 input-group-sm mb-3">
                  <label>Year Published</label>
                    <input type="date" class="form-control" name="yearpublished" autofocus required>
                  </div>
                  <div class="col-4 input-group-sm mb-3">
                  <label>Subject</label>
                  <div>
                    <select id="subject" name="subject" class="form-select ">
                        <option selected>Choose...</option>
                        <option value="It">I.T</option>
                        <option value="Engeneering">Engeneering</option>
                        <option value="Math">Math</option>
                        <option value="Science">Science</option>
                        <option value="Art">Art</option>
                        <option value="Business">Business</option>
                        <option value="Others">Others</option>
                    </select>
                  </div>
                  </div>
                  <div class="col-4 input-group-sm mb-3">
                      <label>Material Type</label>
                    <div>
                      <select id="type" name="type" class="form-select">
                        <option selected>Choose...</option>
                        <option value="Book">Book</option>
                        <option value="Thesis">Thesis</option>
                        <option value="Journal">Journal</option>
                        <option value="eBook">eBook</option>
                        <option value="Articles">Articles</option>
                        <option value="Maps">Maps</option>
                        <option value="Others">Others</option>
                      </select>
                    </div>
                </div>
                <div class="col-4 input-group-sm mb-3">
                    <label>Pages</label>
                  <input type="number" class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" name="pages">
                </div>
                 
                <div class="col-4 input-group-sm mb-3">
                    <label>ISBN</label>
                    <input type="text" class="form-control" name="isbn" placeholder="9788466001076" maxlength="13" aria-label="ISBN" autofocus required>
                </div>
                <div class="col-4 input-group-sm mb-3">
                    <label>ISSN</label>
                    <input type="text" class="form-control" name="issn"  placeholder="1751-0112" maxlength="8" autofocus required>
                </div>
                
                <div class="col-4">
                    <label>Price</label>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend input-group-sm mb-3">
                          <div class="input-group-text">&#8369</div>
                        </div>
                        <input type="number" class="form-control input-group-sm mb-3"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" name="price" placeholder="0.00" maxlength="11" autofocus required>
                    </div>
                </div>
        
                  
                  <div class="col-4 input-group-sm mb-3">
                  <label style="font-size:14px">San Bartolome copies</label>
                  <input type="number" class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" name="sb" >
                  </div>
                  <div class="col-4 input-group-sm mb-3"> 
                  <label style="font-size:14px">San Francisco copies</label>
                  <input type="number" class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" name="sf">
                </div>
                  <div class="col-4 input-group-sm mb-3">
                <label style="font-size:14px">Batasan copies</label>
                  <input type="number" class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" name="ba"></div>
                
                <div class="col-sm-12">
                  <label>Insert Image</label><br>
                  <input type="file" name="image" required/>
                </div>

                <div class="col-12 input-group-sm mb-3">
                <label>Description</label>
                  <textarea class="form-control" name="description" placeholder="Biology" ></textarea>
                </div>

                <div class="col-12" align="center">
                <label>Publicity</label>
                  <input type="radio" name="publicity" value="Public"checked/>PUBLIC
                    <input type="radio" name="publicity"  value="Archived"/>ARCHIVE
                </div>

              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" name="save_book" class="btn btn-primary">Save</button>
              <button type="reset" class="btn btn-secondary" value="Clear" name="clearbtn">Clear</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> 
            </div>      
          </form>   
        </div>
      </div>
    </div>
<!--##############################################################-->
                          <!--Details Modal-->

    <div class="modal fade" id="ViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Book Details</h4>
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
                          <!--Edit Modal-->

    <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
      <div class="modal-dialog ">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="EditModalLabel">Update Book</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <form action="code.php" method="POST">
                  <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="edit_id" id="edit_id">

                      <div class="col-7 input-group-sm mb-3">
                        <label for="">Title</label>
                        <input type="text" name="title" id="edit_title" class="form-control"  autofocus required>
                      </div>

                      <div class="col-5 input-group-sm mb-3">
                        <label for="">Author</label>
                        <input type="text" name="author" id="edit_author" class="form-control"  autofocus required>
                      </div>

                      <div class="col-7 input-group-sm mb-3">
                        <label>Publisher</label>
                          <input type="text" class="form-control" name="publisher" id="edit_publisher">
                      </div>

                      <div class="col-5 input-group-sm mb-3">
                        <label>Year Published</label>
                          <input type="date" class="form-control" name="yearpublished" id="edit_yearpublished" readonly>
                      </div>

                      <div class="col-md-4 input-group-sm mb-3">
                        <label>Subject</label>
                        <div>
                          <select  name="subject" id="edit_subject" class="form-select">
                              <option value="It">I.T</option>
                              <option value="Engeneering">Engeneering</option>
                              <option value="Math">Math</option>
                              <option value="Science">Science</option>
                              <option value="Art">Art</option>
                              <option value="Business">Business</option>
                              <option value="Others">Others</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-4 input-group-sm mb-3">
                        <label>Material Type</label>
                          <div>
                            <select  name="type" id="edit_type" class="form-select">
                            <option value="Book">Book</option>
                            <option value="Thesis">Thesis</option>
                            <option value="Journal">Journal</option>
                            <option value="eBook">eBook</option>
                            <option value="Articles">Articles</option>
                            <option value="Maps">Maps</option>
                            <option value="Others">Others</option>
                            </select>
                          </div>
                      </div>

                      <div class="col-4 input-group-sm mb-3">
                        <label>Pages</label>
                          <input type="number" class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" name="pages" id="edit_pages">
                      </div>

                      <div class="col-4 input-group-sm mb-3">
                        <label>ISBN</label>
                          <input type="number" class="form-control" name="isbn" id="edit_isbn" maxlength="13">
                      </div>

                      <div class="col-4 input-group-sm mb-3">
                        <label>ISSN</label>
                          <input type="number" class="form-control" name="issn"  id="edit_issn" maxlength="8">
                      </div>

                      <div class="col-4">
                        <label>Price</label>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend input-group-sm mb-3">
                              <div class="input-group-text">&#8369</div>
                            </div>
                            <input type="number" class="form-control input-group-sm mb-3"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" name="price" id="edit_price"  autofocus required maxlength="11">
                        </div>
                      </div>

                      <div class="col-4 input-group-sm mb-3">
                        <label style="font-size:14px">San Bartolome copies</label>
                          <input type="number" class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" name="sb" id="edit_sb">
                      </div>

                      <div class="col-4 input-group-sm mb-3"> 
                        <label style="font-size:14px">San Francisco copies</label>
                          <input type="number" class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" name="sf" id="edit_sf">
                      </div>

                      <div class="col-4 input-group-sm mb-3">
                        <label style="font-size:14px">Batasan copies</label>
                          <input type="number" class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" name="ba" id="edit_ba">
                      </div>

                        <!--    
                        <label class="col-sm-12 mb-2" >Insert Image</label>
                          <input class="col-sm-12 mb-2" type="file" name="image" id="edit_image"  class="form-control">         
                        -->
                      <div class="col-12 input-group-sm mb-3">
                        <label>Description</label>
                          <textarea class="form-control" name="description" id="edit_description" rows="4"></textarea>
                      </div>

                      <div class="col-12" align="center">
                        <label>Publicity : </label>
                          <input type="text" name="publicity" id="edit_publicity" style="text-align:center;" size="5px;" readonly>
                          <br>
                          <input type="radio" name="publicity"  value="Public"/>PUBLIC
                          <input type="radio" name="publicity"  value="Archived"/>ARCHIVE
                      </div>

                    </div>   
                  </div>
                  <div class="modal-footer">
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  </div>
              </form>
        </div>
      </div>
    </div>
<!--##############################################################-->
                          <!--Delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="deleteModalLabel">Delete Record</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="code.php" method="POST">
          <div class="modal-body">
              <input type="hidden" name="b_id" id="delete_id">
             <h5>Are you sure, you want to delete this book/record ?</h5>
          </div>
          <div class="modal-footer">
            <button type="submit" name="delete_book" class="btn btn-danger">Yes</button>
            <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
          </div>
          </form>
        </div>
      </div>
    </div>
<!--##############################################################-->
    <div class="container mt-2" >
        <div class="row">
            <div class="col-md-12" >
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
                        <h4 align="center">MANAGE BOOKS
                            
                        </h4>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#AddModal">
                          Add Book
                        </button>
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
                        <thead>
                          <tr>
                            <th style="display:none;" scope="col">#ID</th>
                            <th scope="col">BOOK COVER</th>
                            <th scope="col">TITLE</th>
                            <th scope="col">ISBN</th>
                            <th scope="col">AUTHOR</th>
                            <th scope="col">CATEGORY</th>
                            <th scope="col">Yr. PUBLISHED</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
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
                                  <td style="display:none;" class="s_id" style="color: black"><?php echo $row['id']?></td>
                                  <td><img src="BookCover/<?php echo $row['image']?>" width="70" height="70"></td>
                                  <td style="color: black"><?php echo $row['title']?></td>
                                  <td style="color: black"><?php echo $row['isbn']?></td>
                                  <td style="color: black"><?php echo $row['author']?></td>
                                  <td style="color: black"><?php echo $row['subject']?></td>  
                                  <td style="color: black"><?php echo $row['yearpublished']?></td>
                                  <td style="color: black">
                                    <a href="#" class="badge badge-primary view_btn">Details</a>
                                    <a href="#" class="badge badge-info edit_btn"><span style="padding-RIGHT: 8px;padding-left: 8px">Edit</span></a>
                                    <a href="#" class="badge badge-danger delete_btn">Delete</a>
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
        </div>
    </div>
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
      [30,25,10,5, -1],
      [30,25,10,5, "All"]
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
//##########################Delete Modal####################################
        $('.delete_btn').click(function(e){
          e.preventDefault();

          var s_id = $(this).closest('tr').find('.s_id').text();
            //console.log(s_id);
            $('#delete_id').val(s_id);
            $('#deleteModal').modal('show');
        });
//##########################Edit Modal####################################
        $('.edit_btn').click(function(e){
          e.preventDefault();

          var s_id = $(this).closest('tr').find('.s_id').text();
            //console.log(s_id);
          $.ajax({
            type: "POST",
            url: "code.php",
            data: {
                'checking_editbtn': true,
                'b_id': s_id,
            },
            success: function(response){
              //console.log(response);
              $.each(response, function(key, value){
                  //console.log(value['fname']);
                  $('#edit_id').val(value['id']);
                  $('#edit_title').val(value['title']);
                  $('#edit_author').val(value['author']);
                  $('#edit_subject').val(value['subject']);
                  $('#edit_type').val(value['type']);
                  $('#edit_yearpublished').val(value['yearpublished']);
                  $('#edit_isbn').val(value['isbn']);
                  $('#edit_issn').val(value['issn']);
                  $('#edit_pages').val(value['pages']);
                  $('#edit_price').val(value['price']);     
                  $('#edit_publisher').val(value['publisher']);
                  $('#edit_sb').val(value['sb']);
                  $('#edit_sf').val(value['sf']);
                  $('#edit_ba').val(value['ba']);
                  //$('#edit_image').val(value['image']);
                  $('#edit_description').val(value['description']);
                  $('#edit_publicity').val(value['publicity']);
                  $('#EditModal').modal('show');
              })
              
           }

          });

        });
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
  </main>
  <footer>
    <b>Copyright &copy; 2021 QCU | SBIT-3F</b>
  </footer>
  </body>
</html>