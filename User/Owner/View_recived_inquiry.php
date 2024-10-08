
<?php 

$con=mysqli_connect("localhost","root","","real_estate");

// Header start
include('header.php');
// Page session
if(!isset($_SESSION['user_id']))
{
  header("location:index.php");
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM property_inquiry WHERE Pro_admin_id = $user_id AND (Answer_inquery IS NULL OR Answer_inquery = '') ORDER BY id DESC";

// if (isset($_POST['search']) && isset($_POST['search_by'])) {
//   $search = mysqli_real_escape_string($con, $_POST['search']);
//   $search_by = mysqli_real_escape_string($con, $_POST['search_by']);
  
//   // Build SQL query based on the selected search criterion
//   if ($search_by == 'Title') {
//       $sql = "SELECT * FROM property_register WHERE Approval_status='Approved' AND Property_title LIKE '%$search%' ORDER BY id DESC";
//   } elseif ($search_by == 'Type') {
//       $sql = "SELECT * FROM property_register WHERE Approval_status='Approved' AND Type LIKE '%$search%' ORDER BY id DESC";
//   } elseif ($search_by == 'Status') {
//       $sql = "SELECT * FROM property_register WHERE Approval_status='Approved' AND Status LIKE '%$search%' ORDER BY id DESC";
//   } elseif ($search_by == 'Area') {
//       $sql = "SELECT * FROM property_register WHERE Approval_status='Approved' AND Area_name LIKE '%$search%' ORDER BY id DESC";
//   } elseif ($search_by == 'BHK') {
//       $sql = "SELECT * FROM property_register WHERE Approval_status='Approved' AND BHK_plot LIKE '%$search%' ORDER BY id DESC";
//   } elseif ($search_by == 'Date') {
//       $sql = "SELECT * FROM property_register WHERE Approval_status='Approved' AND Pro_date LIKE '%$search%' ORDER BY id DESC";
//   }
// }

$res = mysqli_query($con,$sql);



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashborad</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- css file -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../../Admin/assets/js/jquery.min.js"></script>
    <script>
         $(document).ready(function() {
            $('#Search').keyup(function() {
                var search = $(this).val();
                var search_by = $('#Search_by').val()
                console.log(search);
                console.log(search_by);
                $.ajax({
                    type: "POST",
                    data: { search_by:search_by,search: search },
                    url: "View_Approved_property.php", 
                    success: function(response) {
                        $('#data-table').html($(response).find('#data-table').html());
                    },
                    error: function(xhr, status, error) {
                        console.log("Error: " + error); // Log errors if any
                }
                });
            });
        });
    </script>
</head>
<body>

    <!-- header start -->
    <?php
  // include('header.php');
  ?>
    <!-- header start -->

    <div class="container-fluid">
      <div class="row">
      <?php
      include('sidebar.php');
      ?>
        <div class="col-10 p-4 ms-auto">
          <div class="main-Borad p-5 bg-white">
            <div class="table-header d-flex justify-content-between py-3">
              <h5 class="page-title mb-0">View Data</h5>
              <div class="input-group position-relative search-dropdown w-auto">
                  <div class="input-group-prepend">
                    <button type="submit" class="btn btn-search pe-1">
                      <i class="bi bi-search search-icn"></i>
                    </button>
                  </div>
                  <input
                    type="text"
                    placeholder="Search ..."
                    class="form-control" 
                    id="Search"
                  />
                  <div class="dropdown position-absolute top-0 start-0">
                  <select class="form-select" aria-label="Default select example" id="Search_by">
                  <option >Select</option>
                  <option value="Title" selected>Title</option>
                  <option value="Type">Properyt Type</option>
                  <option value="Status">Status</option>
                  <option value="Area">Area</option>
                  <option value="BHK">BHK</option>
                  <option value="Date">Date</option>
                </select>
              </div>
            </div>
            </div>
             <!-- table start -->
           <table class="table bg-transparent">
            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>User_type</th>
                                <th>MB_num</th>
                                <th>Message</th> 
                                <th>Date</th>
                                <th>Property ID</th>
                                <th>Anser inq\uery</th>
                            </tr>
                        </thead>
            <tr>
                   <tbody id="data-table">
                          <?php while($row = mysqli_fetch_assoc($res)) { ?>
                          <tr>  
                             <td><?php echo $row['Id']; ?></td>
                              <td>
                              <?php echo $row['Name'];  ?>
                              </td>
                              <td><?php echo $row['Email'];  ?></td>
                              <td>
                                  <?php echo $row['User_type']; ?>
                              </td>
                               <td>
                                  <?php echo $row['MB_num']; ?>
                              </td>
                              <td>
                                  <?php echo $row['Message']; ?>
                              </td>
                              <td>
                                  <?php echo $row['Date']; ?>
                              </td>
                              <td>
                                  <?php echo $row['Pro_id']; ?>
                              </td>
          
                              <td>
                                   <div class="action-icn d-flex justify-content-center">
                                   <a href="Add_answer_query.php?ans_id=<?php echo $row['Id'];?>" class="prev-btn"><i class="bi bi-eye"></i></a>
                                   </div>
                              </td>
                          </tr>
                        <?php } ?>
                        </tbody>
           </table>
          <!-- table start -->
          </div>
         

     

        </div>
      </div>
    </div>


       
    
    


    


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>