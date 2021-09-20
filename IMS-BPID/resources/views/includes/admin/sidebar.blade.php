<nav class="sidebar-wrapper">

    <!-- Default sidebar wrapper start -->
    <div class="default-sidebar-wrapper">

        <!-- Sidebar brand starts -->
        <div class="default-sidebar-brand">
            <a href="index.html" class="logo">
                <img src="{{ asset ('backend/img/logo.svg')}}" style="position:relative; left:70px;" />
            </a>
        </div>
        <!-- Sidebar brand starts -->

        <!-- Sidebar menu starts -->
        <div class="defaultSidebarMenuScroll">
            <div class="default-sidebar-menu">
                <ul>
                    <li class="">
                        <a href="{{ route('dashboards')}}"
                            class="{{ 'dasboards' == request()->path() ? 'default-sidebar active' : 'default-sidebar'}}"">
                            <i class=" icon-home2"></i>
                            <span class="menu-text">Dashboards</span>
                        </a>
                    </li>
                    <li class="default-sidebar">
                        <a href="{{ route('improvement.index')}}">
                            <i class="icon-send1"></i>
                            <span class="menu-text">Improvement Idea</span>
                        </a>
                    </li>


                    <li class="default-sidebar-dropdown ">
                        <a href="#">
                            <i class="icon-users"></i>
                            <span class="menu-text">Manage User</span>
                        </a>
                        <div class="default-sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="{{ route('petugas.create')}}">Add User</a>
                                </li>
                                <li>
                                    <a href="{{ route('petugas.index')}}">View List Admin</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/user')}}">View List User</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                </ul>
            </div>
        </div>
        <!-- Sidebar menu ends -->

    </div>
    <!-- Default sidebar wrapper end -->

</nav>