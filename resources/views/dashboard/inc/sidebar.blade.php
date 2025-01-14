   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">VMS Kenya <sup>System</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Membership
        </div>

        <li class="nav-item {{ Request::is('Register') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/Register') }}" target="_blank">
                <i class="fas fa-fw fa-user-plus"></i>
                <span>Register Members</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('MembersTable') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/MembersTable') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>Members Table</span>
            </a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!--  -->

       

        </ul>
        <!-- End of Sidebar -->