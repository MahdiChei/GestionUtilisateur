
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="http://www.ofppt.ma" class="brand-link">
      <img src="<?php echo base_url().'Style/dist/img/Logo_ofppt.png'?>" alt="Logo OFPPT" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">OFPPT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url().'Style/dist/img/user2-160x160.jpg'?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <!-- get name of user from session and add it here-->
          <a href="#" class="d-block">User: <?php echo $_SESSION["Username"];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item  has-treeview">
            <a href="javascript:void(0);" id="get_all_users" class="nav-link classBtn">
                <i class="nav-icon far fa-plus-square"></i>
                <p>Gestion D'utilisateur</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
