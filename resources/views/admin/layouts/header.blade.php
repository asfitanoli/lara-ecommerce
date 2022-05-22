<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">

        <ul class="nav navbar-top-links navbar-right">
            <li>
                <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <a href=""
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="
                               navi-link">
                    <i class="fa fa-sign-out"></i> Log out
                </a>
            </li>
        </ul>

    </nav>
</div>
