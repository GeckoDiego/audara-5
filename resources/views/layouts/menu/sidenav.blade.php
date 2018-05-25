<div class="page-loader">
    <div class="bg-primary"></div>
    </div>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-2">
    <div class="layout-inner">

        <!-- Layout sidenav -->
        <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark">

        <!-- Brand demo (see assets/css/demo/demo.css) -->
        <div class="demo-brand">
        <a href="/" class="demo-brand-name sidenav-text font-weight-normal ml-2"><img id="brand-logo" src="assets/img/logo/audara-logo-red.png" width="140" alt=""></a>
            <a href="javascript:void(0)" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
            </a>
        </div>

        <div class="demo-brand dbcollapsed d-none">
            <a href="/" class="demo-brand-name sidenav-text font-weight-normal ml-3 ml-2 mr-4"><img id="brand-logo" src="assets/img/logo/audara_logo_mini.png" width="35" alt=""></a>
            <a href="javascript:void(0)" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
            </a>
        </div>

        <div class="sidenav-divider mt-0"></div>
        @include('layouts.menu.sidebar', ['dmenu' => $dmenu])
        </div>
        <!-- / Layout sidenav -->

        <!-- Layout container -->
        <div class="layout-container">
        <!-- Layout navbar -->
        <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-white container-p-x" id="layout-navbar">

            <!-- Brand demo (see assets/css/demo/demo.css) -->
            <a href="index.html" class="navbar-brand demo-brand d-lg-none py-0">
            <span class="demo-brand-logo bg-primary">
                <img src="assets/img/logo/audara-logo-red.png" alt class="d-block ui-w-30"> 
            </span>
            <span class="demo-brand-name font-weight-normal ml-2">Audara</span>
            </a>

            <!-- Sidenav toggle (see assets/css/demo/demo.css) -->
            <div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
            <a class="nav-item nav-link px-0 ml-2 ml-lg-0" href="javascript:void(0)">
                <i class="ion ion-md-menu text-large align-middle"></i>
            </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            @include('layouts.menu.topbar')
        </nav>
        <!-- / Layout navbar -->

        <!-- Layout content -->
        <div class="layout-content">

            <!-- Content -->
            <div class="container-fluid flex-grow-1 container-p-y">            
                    {{ $slot }}
            </div>
            <!-- / Content -->

            @include('layouts.footer')

        </div>
        <!-- Layout content -->

        </div>
        <!-- / Layout container -->

    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- / Layout wrapper -->