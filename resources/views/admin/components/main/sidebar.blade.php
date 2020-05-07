
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url("admin")}}" class="brand-link">
        <img src="{{asset("admin-lte/img/AdminLTELogo.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset("admin-lte/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{url("admin")}}" class="nav-link {{ request()->is('admin') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>


                <li class="nav-item has-treeview {{ request()->is('admin/categories*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('admin/categories*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Категории Задачь
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url("admin/categories")}}" class="nav-link {{ request()->is('admin/categories') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Все категории</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url("admin/categories/new")}}" class="nav-link {{ request()->is('admin/categories/new') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Создать категорию</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview {{ request()->is('admin/users*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Пользователи
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url("admin/users")}}" class="nav-link {{ request()->is('admin/users') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Все пользователи</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url("admin/users/new")}}" class="nav-link {{ request()->is('admin/users/new') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Создать пользователя</p>
                            </a>
                        </li>
                    </ul>
                </li>





            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
