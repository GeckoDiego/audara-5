<div class="navbar-collapse collapse" id="layout-navbar-collapse">
<!-- Divider -->
<hr class="d-lg-none w-100 my-2">            
    <div class="navbar-nav align-items-lg-center ml-auto">  
        <div class="demo-navbar-notifications nav-item dropdown mr-lg-3">
            <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                <i class="ion ion-md-notifications-outline navbar-icon align-middle"></i>
                <span class="badge badge-primary badge-dot indicator"></span>
            </a>
        </div>  
        <!-- Divider -->                      
        <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                <i class="ion ion-ios-globe navbar-icon align-middle"></i>
                <ion-icon name="globe"></ion-icon>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ url('lang', ['es']) }}" class="dropdown-item">
                    <i class="ion ion-ios-flag text-lightest"></i> &nbsp; Spanish</a>
                <a href="{{ url('lang', ['en']) }}" class="dropdown-item">
                    <i class="ion ion-ios-flag text-lightest"></i> &nbsp; English</a>               
            </div>
        </div>
        <!-- Divider -->
        <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
        <div class="demo-navbar-user nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                <img src="assets/img/avatars/default.png" alt class="d-block ui-w-30 rounded-circle">
                <span class="px-1 mr-lg-2 ml-2 ml-lg-0">{{ isset(Auth::user()->name) ? Auth::user()->name : '' }}</span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="javascript:void(0)" class="dropdown-item">
                <i class="ion ion-ios-person text-lightest"></i> &nbsp; @lang('main/layout.profileLabel')</a>
                <a href="javascript:void(0)" class="dropdown-item">
                <i class="ion ion-ios-mail text-lightest"></i> &nbsp; @lang('main/layout.messagesLabel')</a>
                <a href="javascript:void(0)" class="dropdown-item">
                <i class="ion ion-md-settings text-lightest"></i> &nbsp; @lang('main/layout.accountLabel')</a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" 
                    class="dropdown-item"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    <i class="ion ion-ios-log-out text-danger"></i> &nbsp;
                    @lang('main/layout.logoutLabel')
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>