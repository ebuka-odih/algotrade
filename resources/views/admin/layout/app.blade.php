
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Admin</title>

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('admin/assets/css/dashmix.min.css') }}">
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">

    <!-- END Stylesheets -->
</head>
<body>
<!-- Page Container -->

<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
    <!-- Side Overlay-->
    <aside id="side-overlay">
        <!-- Side Header -->
        <div class="bg-image" style="background-image: url('admin/assets/media/various/bg_side_overlay_header.jpg');">

        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
            <!-- Side Overlay Tabs -->
            <div class="block block-transparent pull-x pull-t mb-0">
                <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="so-settings-tab" data-bs-toggle="tab" data-bs-target="#so-settings" role="tab" aria-controls="so-settings" aria-selected="true">
                            <i class="fa fa-fw fa-cog"></i>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="so-people-tab" data-bs-toggle="tab" data-bs-target="#so-people" role="tab" aria-controls="so-people" aria-selected="false">
                            <i class="far fa-fw fa-user-circle"></i>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="so-profile-tab" data-bs-toggle="tab" data-bs-target="#so-profile" role="tab" aria-controls="so-profile" aria-selected="false">
                            <i class="far fa-fw fa-edit"></i>
                        </button>
                    </li>
                </ul>
                <div class="block-content tab-content overflow-hidden">



                    <!-- Profile -->
                    <div class="tab-pane pull-x fade fade-up" id="so-profile" role="tabpanel" aria-labelledby="so-profile-tab">
                        <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                            <div class="block mb-0">
                                <!-- Personal -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase fs-sm fw-bold">Personal</span>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="mb-4">
                                        <label class="form-label">Username</label>
                                        <input type="text" readonly class="form-control" id="so-profile-username-static" value="Admin">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="so-profile-name">Name</label>
                                        <input type="text" class="form-control" id="so-profile-name" name="so-profile-name" value="George Taylor">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="so-profile-email">Email</label>
                                        <input type="email" class="form-control" id="so-profile-email" name="so-profile-email" value="g.taylor@example.com">
                                    </div>
                                </div>
                                <!-- END Personal -->

                                <!-- Password Update -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase fs-sm fw-bold">Password Update</span>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="mb-4">
                                        <label class="form-label" for="so-profile-password">Current Password</label>
                                        <input type="password" class="form-control" id="so-profile-password" name="so-profile-password">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="so-profile-new-password">New Password</label>
                                        <input type="password" class="form-control" id="so-profile-new-password" name="so-profile-new-password">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="so-profile-new-password-confirm">Confirm New Password</label>
                                        <input type="password" class="form-control" id="so-profile-new-password-confirm" name="so-profile-new-password-confirm">
                                    </div>
                                </div>
                                <!-- END Password Update -->

                                <!-- Options -->
                                <div class="block-content block-content-sm block-content-full bg-body">
                                    <span class="text-uppercase fs-sm fw-bold">Options</span>
                                </div>
                                <div class="block-content">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="so-settings-status" name="so-settings-status">
                                        <label class="form-check-label fw-semibold" for="so-settings-status">Online Status</label>
                                    </div>
                                    <p class="text-muted fs-sm">
                                        Make your online status visible to other users of your app
                                    </p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="so-settings-notifications" name="so-settings-notifications">
                                        <label class="form-check-label fw-semibold" for="so-settings-notifications">Notifications</label>
                                    </div>
                                    <p class="text-muted fs-sm">
                                        Receive desktop notifications regarding your projects and sales
                                    </p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="so-settings-updates" name="so-settings-updates">
                                        <label class="form-check-label fw-semibold" for="so-settings-updates">Auto Updates</label>
                                    </div>
                                    <p class="text-muted fs-sm">
                                        If enabled, we will keep all your applications and servers up to date with the most recent features automatically
                                    </p>
                                </div>
                                <!-- END Options -->

                                <!-- Submit -->
                                <div class="block-content block-content-full border-top">
                                    <button type="submit" class="btn w-100 btn-alt-primary">
                                        <i class="fa fa-fw fa-save me-1 opacity-50"></i> Save
                                    </button>
                                </div>
                                <!-- END Submit -->
                            </div>
                        </form>
                    </div>
                    <!-- END Profile -->
                </div>
            </div>
            <!-- END Side Overlay Tabs -->
        </div>
        <!-- END Side Content -->
    </aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->

    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="bg-header-dark">
            <div class="content-header bg-white-5">
                <!-- Logo -->
                <a class="fw-semibold text-white tracking-wide" href="{{ route('index') }}">
              <span class="smini-visible">
                D<span class="opacity-75">x</span>
              </span>
                    <span class="smini-hidden">
                Dash<span class="opacity-75">mix</span>
              </span>
                </a>
                <!-- END Logo -->

                <!-- Options -->
                <div>
                    <!-- Toggle Sidebar Style -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
                        <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                    </button>
                    <!-- END Toggle Sidebar Style -->

                    <!-- Dark Mode -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
                        <i class="far fa-moon" id="dark-mode-toggler"></i>
                    </button>
                    <!-- END Dark Mode -->

                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times-circle"></i>
                    </button>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Options -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
            <!-- Side Navigation -->
            <div class="content-side">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="{{ route('admin.dashboard') }}">
                            <i class="nav-main-link-icon fa fa-location-arrow"></i>
                            <span class="nav-main-link-name">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-main-heading">Transaction</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link "  href="{{ route('admin.deposit') }}">
                            <i class="nav-main-link-icon fa fa-arrow-up"></i>
                            <span class="nav-main-link-name">Deposits</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link "  href="{{ route('admin.withdrawal') }}">
                            <i class="nav-main-link-icon fa fa-arrow-down"></i>
                            <span class="nav-main-link-name">Withdrawal</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link"  href="{{ route('admin.stocks') }}">
                            <i class="nav-main-link-icon fa fa-money-bill"></i>
                            <span class="nav-main-link-name">Investment Stocks</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Crud</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-wrench"></i>
                            <span class="nav-main-link-name">Trading Pair</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('admin.create.pair') }}">
                                    <span class="nav-main-link-name">Add</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('admin.pairs') }}">
                                    <span class="nav-main-link-name">Trading Pair</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-chart-area"></i>
                            <span class="nav-main-link-name">Stock</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('admin.stocks.create') }}">
                                    <span class="nav-main-link-name">Add</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('admin.stocks.index') }}">
                                    <span class="nav-main-link-name">All Stocks</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-coins"></i>
                            <span class="nav-main-link-name">Crypto Assets</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('admin.crypto.create') }}">
                                    <span class="nav-main-link-name">Add</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('admin.crypto.index') }}">
                                    <span class="nav-main-link-name">All Stocks</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-heading">User</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link "  href="{{ route('admin.users') }}">
                            <i class="nav-main-link-icon fa fa-user"></i>
                            <span class="nav-main-link-name">Users</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link "  href="{{ route('admin.fund') }}">
                            <i class="nav-main-link-icon fa fa-plus-circle"></i>
                            <span class="nav-main-link-name">Add Fund</span>
                        </a>
                    </li>
{{--                    <li class="nav-main-item">--}}
{{--                        <a class="nav-main-link "  href="{{ route('admin.wallet') }}">--}}
{{--                            <i class="nav-main-link-icon fa fa-plus-circle"></i>--}}
{{--                            <span class="nav-main-link-name">Add Bank</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li class="nav-main-item">
                        <a class="nav-main-link "  href="{{ route('admin.wallet.create') }}">
                            <i class="nav-main-link-icon fa fa-plus-circle"></i>
                            <span class="nav-main-link-name">Add Crypto Wallet</span>
                        </a>
                    </li>

                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-plus-square"></i>
                            <span class="nav-main-link-name">Add Bank</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('admin.payment-method.create') }}">
                                    <span class="nav-main-link-name">Add</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('admin.payment-method.index') }}">
                                    <span class="nav-main-link-name">All Payment Method</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-heading">Security</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link "  href="{{ route('admin.security') }}">
                            <i class="nav-main-link-icon fa fa-shield-alt"></i>
                            <span class="nav-main-link-name">Change Password</span>
                        </a>
                    </li>


                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="space-x-1">
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="space-x-1">
                <!-- User Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-user d-sm-none"></i>
                        <span class="d-none d-sm-inline-block">Admin</span>
                        <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                        <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">

                        </div>
                        <div class="p-2">

                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Sign Out

                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>
                    </div>
                </div>
                <!-- END User Dropdown -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-header-dark">
            <div class="bg-white-10">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-sun fa-spin text-white"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    @yield('content')
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
        <div class="content py-0">
            <div class="row fs-sm">
                <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                </div>
                <div class="col-sm-6 order-sm-1 text-center text-sm-start">
                    <a class="fw-semibold" href="https://1.envato.market/r6y" target="_blank">Dashmix 5.1</a> &copy; <span data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->


<script src="{{ asset("admin/assets/js/dashmix.app.min.js") }}"></script>

<!-- Page JS Plugins -->
<script src="{{ asset("admin/assets/js/plugins/chart.js/chart.min.js") }}"></script>

<!-- Page JS Code -->
<script src="{{ asset("admin/assets/js/pages/be_pages_dashboard.min.js") }}"></script>


<!-- jQuery (required for DataTables plugin) -->
<script src="{{ asset('admin/assets/js/lib/jquery.min.js') }}"></script>

<!-- Page JS Plugins -->
<script src="{{ asset('admin/assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>

<!-- Page JS Code -->
<script src="{{ asset('admin/assets/js/pages/be_tables_datatables.min.js') }}"></script>

</body>
</html>

