<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Electronic Shop</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./public/backend/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="./public/backend/assets/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="./public/backend/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./public/backend/assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="./public/backend/assets/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="index.php"><img src="./public/backend/assets/images/logo.svg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="./public/backend/assets/images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
              <form action="index.php?module=backend&controller=product&action=search" class="input-group" method="post">
              <div class="input-group-prepend">
                <button style="border:none"><i class="mdi mdi-magnify"></i></button>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search" name="product_name">
              </form>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">  
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="./public/backend/assets/images/faces/face5.jpg" alt="profile"/>
              <span class="nav-profile-name"><?= $_SESSION['user']['fullname'] ?? null; ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="index.php?module=backend&controller=verify&action=logout">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    