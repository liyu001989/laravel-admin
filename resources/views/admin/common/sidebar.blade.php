<aside class="main-sidebar">
    <!-- Left side column. contains the sidebar -->
    <div class="slimScrollDiv">

        <!-- sidebar: style can be found in sidebar.less -->
        <div class="sidebar" id="scrollspy">

            <?php //$admin = \Auth::user()?>
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('images/user-avatar.jpg')}}" class="img-circle" alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p></p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                    <span class="input-group-btn">
                      <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">HEADER</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="active">
                    <a href="">
                        <i class="fa fa-tachometer" aria-hidden="true"></i> <span>仪表盘</span>
                    </a>
                </li>

                <li class="">
                    <a href="#">
                        <i class="fa fa-users"></i> <span>用户管理</span>
                    </a>
                </li>

            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </div>
</aside>
