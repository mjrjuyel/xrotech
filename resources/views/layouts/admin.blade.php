<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Techsolution - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->

    <link rel="shortcut icon" href="{{ asset('contents/admin') }}/assets/images/favicon.ico">
    <link href="{{ asset('contents/admin') }}/assets/css/vendor/jquery-jvectormap-1.2.2.css"
        rel="stylesheet" />

    <link href="{{ asset('contents/admin') }}/assets/css/icons.min.css" rel="stylesheet" />
    <link href="{{ asset('contents/admin') }}/assets/css/app.min.css" rel="stylesheet" />
    <link href="{{ asset('contents/admin') }}/assets/css/all.min.css" rel="stylesheet" />
    @yield('style')
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css" rel="stylesheet">
    <link href="{{ asset('contents/admin') }}/assets/css/style.css" rel="stylesheet" />

    <script src="{{ asset('contents/admin') }}/assets/js/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('contents/admin') }}/assets/js/sweetalert.min.js"></script>
</head>

<body class="loading" data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid"
    data-rightbar-onstart="true">
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- LOGO -->
            <a href="{{ url('dashboard') }}" class="logo text-center logo-light">
                <span class="logo-lg">
                    <img src="{{ asset('contents/website') }}/assets/images/favicon.png" alt=""
                        width="45px">
                </span>

            </a>

            <div class="h-100" id="leftside-menu-container" data-simplebar>

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-item">
                        <a href="{{ route ('/') }}" target="_blank" class="side-nav-link">
                            <i class=" uil-globe"></i>
                            <span> Website</span>
                        </a>
                    </li>

                    <li class="side-nav-title side-nav-item">Navigation</li>

                    <li class="side-nav-item">
                        <a href="{{ url('dashboard') }}" class="side-nav-link">
                            <i class="fa-solid fa-house"></i>
                            <span> Dashboards </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false"
                            aria-controls="sidebarEmail" class="side-nav-link">
                            <i class="uil-chat-bubble-user"></i>
                            <span> User </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEmail">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{ route('dashboard.user') }}">All User</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#adminrole" aria-expanded="false"
                            aria-controls="sidebarEmail" class="side-nav-link">
                            <i class="uil-constructor"></i>
                            <span> Admin Role </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="adminrole">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{ route('dashboard.role') }}"> All Role</a>
                                </li>
                                <li>
                                    <a href="{{ route('dashboard.role.add') }}"> Add Role</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('dashboard.banner') }}" class="side-nav-link">
                            <i class="uil-receipt-alt"></i>
                            <span> Banner </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('dashboard.portfolio') }}" class="side-nav-link">
                            <i class="uil-receipt-alt"></i>
                            <span> Portfolio </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarService" aria-expanded="false"
                            aria-controls="sidebarService" class="side-nav-link">
                            <i class="uil-receipt-alt"></i>
                            <span> Service </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarService">
                            <ul class="side-nav-second-level">
                                <li><a href="{{ route('dashboard.service') }}">All</a> </li>
                                <li><a href="{{ route('dashboard.service.add') }}">Add</a> </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarTechnology" aria-expanded="false"
                            aria-controls="sidebarTechnology" class="side-nav-link">
                            <i class="uil-receipt-alt"></i>
                            <span> Technology </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTechnology">
                            <ul class="side-nav-second-level">
                                <li><a href="{{ route('dashboard.technology') }}">All</a> </li>
                                <li><a href="{{ route('dashboard.technology.add') }}">Add</a> </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('dashboard.about') }}" class="side-nav-link">
                            <i class="uil-receipt-alt"></i>
                            <span> About Us </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route('dashboard.get-touch') }}" class="side-nav-link">
                            <i class="uil-receipt-alt"></i>
                            <span> Get Touch </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#Choosesidebar" aria-expanded="false"
                            aria-controls="Choosesidebar" class="side-nav-link">
                            <i class="uil-server"></i>
                            <span> Choose Us </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="Choosesidebar">
                            <ul class="side-nav-second-level">
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarMainChoose" aria-expanded="false"
                                        aria-controls="sidebarMainChoose" class="side-nav-link">
                                        <i class="uil-envelope-alt"></i>
                                        <span> Main </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarMainChoose">
                                        <ul class="side-nav-third-level">
                                            <li>
                                                <a
                                                    href="{{ route ('dashboard.choose-main') }}">Choose</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarChooseType" aria-expanded="false"
                                        aria-controls="sidebarChooseType" class="side-nav-link">
                                        <i class="uil-receipt-alt"></i>
                                        <span> Type </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarChooseType">
                                        <ul class="side-nav-second-level">
                                            <li><a href="{{ route('dashboard.choose') }}">All</a>
                                            </li>
                                            <li><a href="{{ route('dashboard.choose.add') }}">Add</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#Aiservicesidebar" aria-expanded="false"
                            aria-controls="Aiservicesidebar" class="side-nav-link">
                            <i class="uil-server"></i>
                            <span> Ai Service </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="Aiservicesidebar">
                            <ul class="side-nav-second-level">
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarMainAiService" aria-expanded="false"
                                        aria-controls="sidebarMainAiService">
                                        <i class="uil-envelope-alt"></i>
                                        <span> Main </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarMainAiService">
                                        <ul class="side-nav-third-level">
                                            <li>
                                                <a href="{{ route ('dashboard.aiservice-main') }}">Ai
                                                    Main</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarAiType" aria-expanded="false"
                                        aria-controls="sidebarAiType" class="side-nav-link">
                                        <i class="uil-receipt-alt"></i>
                                        <span> Type </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarAiType">
                                        <ul class="side-nav-second-level">
                                            <li><a href="{{ route('dashboard.aiservice') }}">All</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('dashboard.aiservice.add') }}">Add</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#Managesidebar" aria-expanded="false"
                            aria-controls="Managesidebar" class="side-nav-link">
                            <i class="uil-server"></i>
                            <span> Manage </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="Managesidebar">
                            <ul class="side-nav-second-level">
                                <li class="side-nav-item">
                                    <a  href="{{ route ('dashboard.contact-message') }}" 
                                        class="side-nav-link">
                                        <i class="uil-envelope-alt"></i>
                                        <span> Contact  Message </span>
                                    </a>
                                </li>

                                <li class="side-nav-item">
                                    <a  href="{{ route ('dashboard.basic') }}" 
                                        class="side-nav-link">
                                        <i class="uil-files-landscapes"></i>
                                        <span> Basic Logo</span>
                                        
                                    </a>
                                </li>

                                <li class="side-nav-item">
                                    <a  href="{{ route ('dashboard.contact') }}"  class="side-nav-link">
                                        <i class=" uil-phone-alt"></i>
                                        <span> Contact Us </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#Filtersidebar" aria-expanded="false"
                            aria-controls="Filtersidebar" class="side-nav-link">
                            <i class="uil-server"></i>
                            <span> Filter PortFolio </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="Filtersidebar">
                            <ul class="side-nav-second-level">
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarFilterMain" aria-expanded="false"
                                        aria-controls="sidebarFilterMain" class="side-nav-link">
                                        <i class="uil-envelope-alt"></i>
                                        <span> Main </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarFilterMain">
                                        <ul class="side-nav-third-level">
                                            <li>
                                                <a href="{{ route('dashboard.filter.add') }}">Filter
                                                    Add</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('dashboard.filter') }}">All
                                                    Filter</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarFilterType" aria-expanded="false"
                                        aria-controls="sidebarFilterType" class="side-nav-link">
                                        <i class="uil-receipt-alt"></i>
                                        <span> Type </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarFilterType">
                                        <ul class="side-nav-second-level">
                                            <li><a href="{{ route('dashboard.filter-cat') }}">All</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('dashboard.filter-cat.add') }}">Add</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#ProcessSideBar" aria-expanded="false"
                            aria-controls="ProcessSideBar" class="side-nav-link">
                            <i class="uil-server"></i>
                            <span> AI Process </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="ProcessSideBar">
                            <ul class="side-nav-second-level">
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarMainProcess" aria-expanded="false"
                                        aria-controls="sidebarMainProcess" class="side-nav-link">
                                        <i class="uil-envelope-alt"></i>
                                        <span> Main </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarMainProcess">
                                        <ul class="side-nav-third-level">
                                            <li>
                                                <a
                                                    href="{{ route ('dashboard.process-main') }}">Process</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarProcessType" aria-expanded="false"
                                        aria-controls="sidebarProcessType" class="side-nav-link">
                                        <i class="uil-receipt-alt"></i>
                                        <span> Type </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarProcessType">
                                        <ul class="side-nav-second-level">
                                            <li><a href="{{ route('dashboard.process') }}">All</a>
                                            </li>
                                            <li><a href="{{ route('dashboard.process.add') }}">Add</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a href="{{ route ('dashboard.recycle') }}" class="side-nav-link">
                            <i class="uil-trash-alt"></i>
                            <span> Recycle Bin</span>
                        </a>
                    </li>


                    <li class="side-nav-item">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"
                            class="side-nav-link">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span> LogOut </span>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-menu float-end mb-0">
                        <li class="dropdown notification-list d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>

                        <li class="notification-list">
                            <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                                <i class="dripicons-gear noti-icon"></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="{{ asset('contents/admin') }}/assets/images/users/avatar-1.jpg"
                                        alt="user-image" class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name">{{ Auth::user()->name }}</span></span>
                                </span>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">

                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <a href="{{ route('profile.edit')}}" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <a href="{{ route('logout') }}" class="dropdown-item notify-item"
                                    onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                    <button class="button-menu-mobile open-left">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </div>
                <!-- Start Content-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <form class="d-flex">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-light"
                                                id="dash-daterange">
                                            <span class="input-group-text bg-primary border-primary text-white">
                                                <i class="mdi mdi-calendar-range font-13"></i>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    @yield('content')
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <script>
                                        document.write(new Date().getFullYear())

                                    </script> ©Xcrotech
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- END wrapper -->

            <!-- Right Sidebar -->
            <div class="end-bar">

                <div class="rightbar-title">
                    <a href="javascript:void(0);" class="end-bar-toggle float-end">
                        <i class="dripicons-cross noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <div class="rightbar-content h-100" data-simplebar>

                    <div class="p-3">
                        <div class="alert alert-warning" role="alert">
                            <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                        </div>

                        <!-- Settings -->
                        <h5 class="mt-3">Color Scheme</h5>
                        <hr class="mt-1" />

                        <div class="form-check form-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light"
                                id="light-mode-check" checked>
                            <label class="form-check-label" for="light-mode-check">Light Mode</label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark"
                                id="dark-mode-check">
                            <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                        </div>


                        <!-- Width -->
                        <h5 class="mt-4">Width</h5>
                        <hr class="mt-1" />
                        <div class="form-check form-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check"
                                checked>
                            <label class="form-check-label" for="fluid-check">Fluid</label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                            <label class="form-check-label" for="boxed-check">Boxed</label>
                        </div>


                        <!-- Left Sidebar-->
                        <h5 class="mt-4">Left Sidebar</h5>
                        <hr class="mt-1" />
                        <div class="form-check form-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="theme" value="default"
                                id="default-check">
                            <label class="form-check-label" for="default-check">Default</label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check"
                                checked>
                            <label class="form-check-label" for="light-check">Light</label>
                        </div>

                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                            <label class="form-check-label" for="dark-check">Dark</label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="compact" value="fixed"
                                id="fixed-check" checked>
                            <label class="form-check-label" for="fixed-check">Fixed</label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="compact" value="condensed"
                                id="condensed-check">
                            <label class="form-check-label" for="condensed-check">Condensed</label>
                        </div>

                        <div class="form-check form-switch mb-1">
                            <input class="form-check-input" type="checkbox" name="compact" value="scrollable"
                                id="scrollable-check">
                            <label class="form-check-label" for="scrollable-check">Scrollable</label>
                        </div>

                        <div class="d-grid mt-4">
                            <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                        </div>
                    </div> <!-- end padding-->

                </div>
            </div>

            <div class="rightbar-overlay"></div>
            <!-- /End-bar -->

            <!-- bundle -->

            <script src="{{ asset('contents/admin') }}/assets/js/vendor.min.js"></script>
            <script src="{{ asset('contents/admin') }}/assets/js/app.min.js"></script>
            <script src="{{ asset('contents/admin') }}/assets/js/vendor/apexcharts.min.js"></script>
            <script
                src="{{ asset('contents/admin') }}/assets/js/vendor/jquery-jvectormap-1.2.2.min.js">
            </script>
            <script
                src="{{ asset('contents/admin') }}/assets/js/vendor/jquery-jvectormap-world-mill-en.js">
            </script>
            @yield('script')
            <script src="{{ asset('contents/admin') }}/assets/js/pages/demo.dashboard.js"></script>
            <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
            <script src="{{ asset('contents/admin') }}/assets/js/custom.js"></script>
</body>

</html>
