<!-- Left Sidebar Menu -->
<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
            <span>Main</span>
            <i class="zmdi zmdi-more"></i>
        </li>
        <li>
            <a class="{{ Request::is('/') ? 'active': '' }}" href="{{URL('/')}}" data-toggle="collapse"
                data-target="#dashboard_dr">
                <div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span
                        class="right-nav-text">Dashboard</span></div>
                <div class="pull-right"></div>
                <div class="clearfix"></div>
            </a>
        </li>
        <li>
            <a class="{{ Request::is('users') ? 'active': '' }}" href="{{URL('/users')}}" data-toggle="collapse"
                data-target="#ecom_dr">
                <div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span
                        class="right-nav-text">Manage Users </span></div>
                <div class="pull-right"></div>
                <div class="clearfix"></div>
            </a>
        </li>
        <li>
            <a class="{{ Request::is('permissions') ? 'active': '' }}" href="{{URL('/permissions')}}">
                <div class="pull-left"><i class="zmdi zmdi-account mr-20"></i><span class="right-nav-text">Manage
                        Permissions</span></div>
                <div class="pull-right"></div>
                <div class="clearfix"></div>
            </a>

        </li>
        <li>
            <a class="{{ Request::is('roles') ? 'active': '' }}" href="{{URL('/roles')}}">
                <div class="pull-left"><i class="zmdi zmdi-alert-circle mr-20"></i><span class="right-nav-text">Manage
                        Roles</span></div>
                <div class="pull-right"></div>
                <div class="clearfix"></div>
            </a>

        </li>
        <li>
            <a class="{{ Request::is('buses') ? 'active': '' }}" href="{{URL('/buses')}}">
                <div class="pull-left"><i class="zmdi zmdi-bus mr-20"></i><span class="right-nav-text">Manage
                        Buses</span></div>
                <div class="pull-right"></div>
                <div class="clearfix"></div>
            </a>

        </li>
        <li>
            <a class="{{ Request::is('schedules') ? 'active': '' }}" href="{{URL('/schedules')}}">
                <div class="pull-left"><i class="zmdi zmdi-time mr-20"></i><span class="right-nav-text">Manage
                        Schedule</span></div>
                <div class="pull-right"></div>
                <div class="clearfix"></div>
            </a>

        </li>
        <li>
            <a class="{{ Request::is('bookings') ? 'active': '' }}" href="{{URL('/bookings')}}">
                <div class="pull-left"><i class="zmdi zmdi-book mr-20"></i><span class="right-nav-text">Manage
                        Bookings</span></div>
                <div class="pull-right"></div>
                <div class="clearfix"></div>
            </a>

        </li>
        <li>
            <a class="{{ Request::is('passengers') ? 'active': '' }}" href="{{URL('/passengers')}}">
                <div class="pull-left"><i class="zmdi zmdi-crop-square mr-20"></i><span class="right-nav-text">Passenger
                        Data</span></div>
                <div class="pull-right"></div>
                <div class="clearfix"></div>
            </a>

        </li>
        {{--    <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#maps_dr"><div class="pull-left"><i class="zmdi zmdi-map mr-20"></i><span class="right-nav-text">Manage Project</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                <ul id="maps_dr" class="collapse collapse-level-1">
                    <li>
                        <a href="{{URL('/')}}">Project</a>
        </li>
        <li>
            <a href="{{URL('/')}}">Sub Project</a>
        </li>
    </ul>
    </li> --}}
    </ul>
</div>
<!-- /Left Sidebar Menu -->