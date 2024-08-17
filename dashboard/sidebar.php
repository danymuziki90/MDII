<?php
include"../z_db.php";
$username=$_SESSION['username'];
?>
<div class="app-menu navbar-menu">
  <!-- LOGO -->
  <div class="navbar-brand-box">
    <!-- Dark Logo-->
    <?php
    $rr=mysqli_query($con,"SELECT ufile FROM logo");
$r = mysqli_fetch_row($rr);
$ufile = $r[0];
?>

    <a href="index.html" class="logo logo-dark">
      <span class="logo-sm">
        <h3 style="margin-top: 10px; color: #ffffff !important">MDI ADMIN</h3>
      </span>
      <span class="logo-lg">
        <h3 style="margin-top: 10px; color: #ffffff !important">MDI ADMIN</h3>
      </span>
    </a>
    <!-- Light Logo-->
    <a href="index.html" class="logo logo-light">
      <span class="logo-sm">
        <h3 style="margin-top: 10px; color: #ffffff !important">MDI ADMIN</h3>
      </span>
      <span class="logo-lg">
        <h3 style="margin-top: 10px; color: #ffffff !important">MDI ADMIN</h3>
      </span>
    </a>
    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
      <i class="ri-record-circle-line"></i>
    </button>
  </div>

  <div id="scrollbar">
    <div class="container-fluid">

      <div id="two-column-menu">
      </div>
      <ul class="navbar-nav" id="navbar-nav">
        <li class="menu-title"><span data-key="t-menu">Menu</span></li>


        <li class="nav-item">
          <a href="dashboard" class="nav-link" data-key="t-analytics"> <i class="ri-dashboard-2-line"></i> <span
              data-key="t-dashboards"> Dashboard </span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link menu-link" href="#sidebarB" data-bs-toggle="collapse" role="button" aria-expanded="true"
            aria-controls="sidebarLanding">
            <i class="ri-file-list-3-line"></i> <span data-key="t-landing">Manager le Blog</span>
          </a>
          <div class="menu-dropdown collapse" id="sidebarB" style="">
            <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a href="add-blog.php" class="nav-link" data-key="t-one-page"> Ajouter </a>
              </li>
              <li class="nav-item">
                <a href="bloglist.php" class="nav-link" data-key="t-nft-landing">Liste des Blogs</a>
              </li>
            </ul>
          </div>
        </li>









      </ul>
    </div>
    <!-- Sidebar -->
  </div>

  <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>