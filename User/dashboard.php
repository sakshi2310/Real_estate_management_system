<?php 

// if(!isset($_SESSION['user_id']))
// {
//     header("location:dashboard.php");
// }


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
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>

    <!-- header start -->
    <header class="py-3 border-bottom theme-light">
        <div class="container-fluid d-flex align-items-center px-5 justify-content-between" style="grid-template-columns: 1fr 2fr;">
            <div class="left-info d-flex">
                <div class="btn-bars me-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                    <i class="bi bi-text-right fs-3"></i>
                   </div>
                  <div class="logo">
                    <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-body-emphasis text-decoration-none display-6 fw-bolder light-text"  aria-expanded="false">Logo</a>
                  </div>
            </div>
          <div class="d-flex align-items-center justify-self-end">
            <i class="bi bi-bell-fill fs-5 me-3"></i>
            <div class="flex-shrink-0 dropdown profile-edit border-1 ">
              <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
              </a>
              <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="#">Home</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
    </header>
    <!-- header start -->

    <div class="container-fluid">
      <div class="row">
          <div class="col-2 p-0 theme-light">
          <div class="bottom-0 position-relative"  style=" height: 648px;">
            <div class="d-flex flex-column flex-shrink-0 bars-tabs">
                <ul class="nav flex-column mb-auto">
                  <li class="nav-item py-1">
                    <a href="#" class="nav-link text-secondary py-2 pe-5" aria-current="page">
                        <i class="bi bi-house-door me-2 fs-5"></i>
                      User Profile Flat
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link text-secondary py-2 pe-5">
                        <i class="bi bi-houses me-2 fs-5" aria-label="Orders"></i>
                      House
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link text-secondary py-2 pe-5">
                        <i class="bi bi-hospital me-2 fs-5"></i>
                      Apartment
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link text-secondary py-2 pe-5">
                        <i class="bi bi-alexa me-2 fs-5"></i>
                      Tensure
                    </a>
                  </li>
                  <li>
                    <a href="#" class="nav-link text-secondary py-2 pe-5">
                        <i class="bi bi-person-circle me-2 fs-5"></i>
                      Users 
                    </a>
                  </li>
                </ul>
            </div>
        </div>
        </div>
        <div class="col-10 ps-4">
          <form>
          <div class="row mt-3" id="page1">
            <div class="col-12">
              <h4>Description</h4>
            </div>
            <div class="col-4">
                <label for="exampleInputEmail1" class="form-label">Property Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Property Title">
            </div>
            <div class="col-4">
                <label for="exampleInput" class="form-label">Description</label>
                <input type="text" class="form-control" id="exampleInput" placeholder="Description">
            </div>
            <div class="col-4">
                <label class="form-label">Type</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Type</option>
                  <option value="1">Apratement or flat</option>
                  <option value="2">Iindividual House </option>
                  <option value="3">Residential Land</option>
                  <option value="4">Farm House</option>
                </select>
            </div>
            <div class="col-4">
                <label class="form-label">Status</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Status</option>
                  <option value="1">Rent</option>
                  <option value="2">Sale</option>
                </select>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-12">
              <h4>Price</h4>
            </div>
            <div class="col-4">
                <label for="exampleInputEmail1" class="form-label">Sale the Rent </label>
                <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Sale the Rent ">
            </div>
            <div class="col-4">
                <label for="exampleInput" class="form-label">Secount Price </label>
                <input type="text" class="form-control" id="exampleInput" placeholder="Secount Price ">
            </div>
            <div class="col-4">
                <label class="form-label">Land Price</label>
                <input type="text" class="form-control" id="exampleInput" placeholder="Land Price ">
            </div>
            <div class="col-4">
                <label class="form-label">Land post fix </label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Land post fix </option>
                  <option value="1">sq ft </option>
                  <option value="2">sq meter </option>
                  <option value="2">yard</option>
                </select>
            </div>
          </div>
          <div class="row mt-3" id="page2">
            <div class="col-12">
              <h4>Media</h4>
            </div>
            <div class="col-4">
                <label for="exampleInputEmail1" class="form-label">Select Image</label>
                <input type="file" class="form-control" id="exampleInputEmail1"  placeholder="Select Image">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-12">
              <h4>Features</h4>
            </div>
            <div class="col-12">
              <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck1">Air conditioning</label>
              
                <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck2">Laundry</label>
              
                <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck3">Refrigerator</label>

                <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck4">Washer</label>
              
                <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck5">Gym</label>
              
                <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck6">Parking</label>

                <input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck7"> Barbeque</label>
              
                <input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck8">Lawn</label>
                
                <input type="checkbox" class="btn-check" id="btncheck9" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck9">Wifi</label>

                <input type="checkbox" class="btn-check" id="btncheck10" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck10">Tv cable</label>
              
                <input type="checkbox" class="btn-check" id="btncheck11" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck11">Sinema hall</label>
              
                <input type="checkbox" class="btn-check" id="btncheck12" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck12">Microwave</label>

                <input type="checkbox" class="btn-check" id="btncheck13" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck13"> Swimming poll</label>
              
                <input type="checkbox" class="btn-check" id="btncheck14" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck14">Window covering</label>
              
                <input type="checkbox" class="btn-check" id="btncheck15" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck15">Hall</label>

                <input type="checkbox" class="btn-check" id="btncheck16" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck16">Area</label>
              
                <input type="checkbox" class="btn-check" id="btncheck17" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck17">Lagitude / latitude </label>
              
                <input type="checkbox" class="btn-check" id="btncheck18" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck18">Nearest area Area + km</label>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-12">
              <h4>Location</h4>
            </div>
            <div class="col-4">
                <label for="exampleInputEmail1" class="form-label">Badrooms</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Badrooms ">
            </div>
            <div class="col-4">
                <label for="exampleInput" class="form-label">Badroom </label>
                <input type="text" class="form-control" id="exampleInput" placeholder="Badroom ">
            </div>
            <div class="col-4">
                <label class="form-label">Area size</label>
                <input type="text" class="form-control" id="exampleInput" placeholder="Area size ">
            </div>
            <div class="col-4">
                <label class="form-label">Size post fix</label>
                <input type="text" class="form-control" id="exampleInput" placeholder="Size post fix">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-12">
              <h4>Contanct Info</h4>
            </div>
            <div class="col-4">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Name ">
            </div>
            <div class="col-4">
                <label for="exampleInput" class="form-label">Email </label>
                <input type="email" class="form-control" id="exampleInput" placeholder="Email ">
            </div>
            <div class="col-4">
                <label class="form-label">Phone Number </label>
                <input type="text" class="form-control" id="exampleInput" placeholder="Phone Number ">
            </div>
            <div class="col-4">
                <label class="form-label">Another</label>
                <input type="text" class="form-control" id="exampleInput" placeholder="Another">
            </div>
          </div>
        </form>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-12">
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#page1">1</a></li>
              <li class="page-item"><a class="page-link" href="#page2">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div> -->
    </div>


       
    
    


    


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>