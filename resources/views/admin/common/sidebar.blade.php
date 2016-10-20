  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ $admin->avatar }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ $admin->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ Route::is('admin.dashboard') ? 'active' : null}} treeview">
          <a href="{{ route('admin.dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>仪表盘</span>
          </a>
        </li>
        <li class="{{ Route::is('admin.users.*') ? 'active' : null}} treeview">
          <a href="{{ route('admin.users.index') }}">
            <i class="fa fa-users"></i>
            <span>用户管理</span>
          </a>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-user-secret"></i> <span>管理员管理</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu menu-open">
                <li class="">
                    <a href=""><i class="fa fa-circle-o"></i>管理员列表</a>
                </li>
                <li class="">
                    <a href=""><i class="fa fa-circle-o"></i>角色管理</a>
                </li>
            </ul>
        </li>
        <li class="{{ Route::is('admin.logs') ? 'active' : null}} treeview">
          <a href="{{ route('admin.logs') }}">
            <i class="fa fa-bug"></i>
            <span>日志管理</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>