<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src="{{ asset('admin/img/profile_small.jpg')}}">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">
                         <strong class="font-bold">{{ \Illuminate\Support\Facades\Auth::user()->name }}</strong>
                        </span>
                        <span class="text-muted text-xs block">Lara eCommerce <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li>
                            <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            <a href=""
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="
                               navi-link">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    LE
                </div>
            </li>
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="{{ route( 'dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            @role('Admin')
            <li class="{{ Request::is('products.manage') ? 'active' : '' }}">
                <a href="{{ route( 'products.manage') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Products</span></a>
            </li>
            <li class="{{ Request::is('customers.manage') ? 'active' : '' }}">
                <a href="{{ route( 'customers.manage') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Customers</span></a>
            </li>
            <li class="{{ Request::is('orders.manage') ? 'active' : '' }}">
                <a href="{{ route( 'orders.manage') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Orders</span></a>
            </li>
            @endrole

        </ul>

    </div>
</nav>
