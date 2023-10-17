<?php
session_start();
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Car Library - Add Cars</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Car Library</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

       <!--  <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a --><!-- End Notification Icon -->

          <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul> --><!-- End Notification Dropdown Items -->

        <!--</li> End Notification Nav -->

        <!-- <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a> --><!-- End Messages Icon -->

          <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul> --><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <?php  if(isset($_SESSION["sess@user"]))
                  {
                ?>
            <span class="d-none d-md-block dropdown-toggle ps-2"><?=$_SESSION['sess@user'];?></span>
            <?php
              }
            ?>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <?php  if(isset($_SESSION["sess@user"]))
                  {
                ?>
              <h6><?=$_SESSION['sess@user'];?></h6>
              <?php
                }
              ?>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="admin_profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li> -->

           <!--  <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li> -->

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../index.php">
                <i class="bi bi-box-arrow-right"></i>
                <span id="logout">Sign Out</span>

              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link" href="admin_panel.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Alerts</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="bi bi-circle"></i><span>Accordion</span>
            </a>
          </li>
          <li>
            <a href="components-badges.html">
              <i class="bi bi-circle"></i><span>Badges</span>
            </a>
          </li>
          <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>Breadcrumbs</span>
            </a>
          </li>
          <li>
            <a href="components-buttons.html">
              <i class="bi bi-circle"></i><span>Buttons</span>
            </a>
          </li>
          <li>
            <a href="components-cards.html">
              <i class="bi bi-circle"></i><span>Cards</span>
            </a>
          </li>
          <li>
            <a href="components-carousel.html">
              <i class="bi bi-circle"></i><span>Carousel</span>
            </a>
          </li>
          <li>
            <a href="components-list-group.html">
              <i class="bi bi-circle"></i><span>List group</span>
            </a>
          </li>
          <li>
            <a href="components-modal.html">
              <i class="bi bi-circle"></i><span>Modal</span>
            </a>
          </li>
          <li>
            <a href="components-tabs.html">
              <i class="bi bi-circle"></i><span>Tabs</span>
            </a>
          </li>
          <li>
            <a href="components-pagination.html">
              <i class="bi bi-circle"></i><span>Pagination</span>
            </a>
          </li>
          <li>
            <a href="components-progress.html">
              <i class="bi bi-circle"></i><span>Progress</span>
            </a>
          </li>
          <li>
            <a href="components-spinners.html">
              <i class="bi bi-circle"></i><span>Spinners</span>
            </a>
          </li>
          <li>
            <a href="components-tooltips.html">
              <i class="bi bi-circle"></i><span>Tooltips</span>
            </a>
          </li>
        </ul>
      </li>End Components Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Cars</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.php" >
              <i class="bi bi-circle"></i><span>Add Cars</span>
            </a>
          </li>
          <li>
            <a href="admin_table.php" >
              <i class="bi bi-circle"></i><span>Display</span>
            </a>
          </li>
          <!-- <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Form Layouts</span>
            </a>
          </li>
          <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Form Validation</span>
            </a>
          </li>-->
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Booked Cars</span><i></i>
        </a>
      </li>
      <!--End Forms Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li> End Tables Nav -->
 
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li>End Charts Nav --> 

      

      <!-- <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>End Profile Page Nav --> 

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li>End F.A.Q Page Nav --> 

      <!--<li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li>End Contact Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li>End Register Page Nav -->

      <!--<li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li>End Login Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li> End Error 404 Page Nav --> 

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li>End Blank Page Nav --> 

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form</h1>
      <nav>
        <ol class="breadcrumb">
          <!-- <li class="breadcrumb-item"><a href="admin_panel.php">Dashboard</a></li> -->
          <!-- <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Elements</h5>

              <!-- General Form Elements -->
              <form method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="name" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="model" class="col-sm-2 col-form-label">Model</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="model">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="phone" class="col-sm-2 col-form-label">Phone No.</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="phone">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="address" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="address">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="photo" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="photo">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="date" class="col-sm-2 col-form-label">Date of Reg</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="date">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="vehicleno" class="col-sm-2 col-form-label">Vehicle No.</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="vehicleno">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="price" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="price">
                  </div>
                </div>

                <!-- <div class="row mb-3">
                  <label for="inputColor" class="col-sm-2 col-form-label">Color Picker</label>
                  <div class="col-sm-10">
                    <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#4154f1" title="Choose your color">
                  </div>
                </div> -->
                <div class="row mb-3">
                  <label for="comments" class="col-sm-2 col-form-label">Comments</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="comments"></textarea>
                  </div>
                </div>
                <!-- <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Vehicle Type</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                      <label class="form-check-label" for="gridRadios1">
                        Hatchback
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        Sedan
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios" value="option3" >
                      <label class="form-check-label" for="gridRadios3">
                        SUV
                      </label>
                    </div>
                  </div>
                </fieldset> -->
                <div class="row mb-3">
                  <label for="size" class="col-sm-2 col-form-label">Size</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="size">
                  </div>
                </div>

                <!-- <div class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Fuel Type</legend>
                  <div class="col-sm-10">

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Petrol
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck2">
                      <label class="form-check-label" for="gridCheck2">
                        Diesel
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck2">
                      <label class="form-check-label" for="gridCheck3">
                        Electric
                      </label>
                    </div>

                  </div>
                </div> -->

                <!-- <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Disabled</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="Read only / Disabled" disabled>
                  </div>
                </div> -->

                <div class="row mb-3">
                  <label for="fueltype" class="col-sm-2 col-form-label">Fuel Type</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="fueltype">
                  </div>
                </div>

                <!-- <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="select">Select</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value="1">Manual</option>
                      <option value="2">Automatic</option>
                    </select>
                  </div>
                </div> -->

                <div class="row mb-3">
                  <label for="type" class="col-sm-2 col-form-label">Type</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="type">
                  </div>
                </div>

              <!--   <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Multi Select</label>
                  <div class="col-sm-10">
                    <select class="form-select" multiple aria-label="multiple select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div> -->

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="submit4">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

        
    </section>

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php
  include('dbconnection.php');
  if(isset($_POST['submit4']))
  {
    //getting the post values
    $name=$_POST['name'];
    $email=$_POST['email'];
    $model=$_POST['model'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $photo=$_FILES["photo"]["name"];
    $date=$_POST['date'];
    $vehicle_no=$_POST['vehicleno'];
    $price = $_POST['price'];
    $comments=$_POST['comments'];
    $size=$_POST['size'];
    $fuel_type=$_POST['fueltype'];
    $type=$_POST['type'];

// echo "<script>alert('$name $email  $model $phone $address $photo $date $vehicle_no $comments $size $fuel_type $type')</script>";

// get the image extension
$extension = substr($photo,strlen($photo)-4,strlen($photo));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
  $imgfile =$_FILES["photo"]["name"];
//rename the image file
$imgnewfile=md5($imgfile).time().$extension;

// Code for move image into directory
move_uploaded_file($_FILES["photo"]["tmp_name"],"photos/".$imgnewfile);
// Query for data insertion
$query=mysqli_query($con, "insert into form(name,email,model,phone,address,date,vehicle_no,price,comments,size,fuel_type,type,photo,target) values('$name','$email','$model',$phone, '$address','$date','$vehicle_no','$price','$comments','$size','$fuel_type','$type','$imgnewfile','0')");

// $query=mysqli_query($con, "insert into form(photo) values('$imgnewfile')");
if ($query) {
echo "<script>alert('You have successfully inserted the data');</script>";
echo "<script type='text/javascript'> document.location ='admin_table.php'; </script>";
} else{
echo "<script>alert('Something Went Wrong. Please try again');</script>";
}}
}
?>
