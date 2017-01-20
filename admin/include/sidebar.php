<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php echo_active("dashboard.php") ?>">
          <a href="dashboard.php"> 
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Manage User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu <?php echo_active("user-list.php,add-user.php,edit-user.php") ?>">
            <li class="<?php echo_active("user-list.php,") ?>">
                    <a href="user-list.php">
                            <i class="fa fa-list-ul"></i>
                            All Users
                    </a>
            </li>
            <li class="<?php echo_active("add-user.php,") ?>">
                    <a href="add-user.php">
                            <i class="fa fa-plus"></i>
                            Add Users
                    </a>
            </li>
          </ul>
        </li>
        
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>