<?php
 require_once "config.php";
 $connect = mysqli_connect("localhost", "root", "", "mysql");  

 $query ="SELECT * FROM tbl_employee ORDER BY ID DESC";
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Keep IT Mobile</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3 align="center">DataTables</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>
                                    <td>Id</td>
                                    <td>Name</td>  
                                    <td>Address</td>  
                                    <td>Gender</td>  
                                    <td>Designation</td>  
                                    <td>Age</td>  
                               </tr>  
                          </thead>  
                          <?php  
                      
                          while($row = mysqli_fetch_array($result))
                          {  
                               echo '  
                               <tr>
                                    <td>'.$row["Id"].'</td>
                                    <td>'.$row["Name"].'</td>
                                    <td>'.$row["Address"].'</td>
                                    <td>'.$row["Gender"].'</td>
                                    <td>'.$row["Designation"].'</td>
                                    <td>'.$row["Age"].'</td>
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  

 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> 
