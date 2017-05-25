<header class="header horizon-bg">
      <!-- <div class="toggle-nav">
          <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div> -->

      <!--logo start-->
      <a href="{{ url('/home') }}" class="logo">{{ config('app.name', 'Laravel') }}</a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
          <!--  search form start -->
          <ul class="nav top-menu">
              <li>
                  <form class="navbar-form">
                      <input class="form-control" placeholder="Search Clients" type="text">
                  </form>
              </li>
          </ul>
          <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
          <!-- notificatoin dropdown start-->
          <ul class="nav pull-right top-menu">
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
              @else
              <!-- user login dropdown start-->
              <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#" role="button" aria-expanded="false">

                      <!-- <span class="profile-ava">
                          <img alt="" src="img/avatar1_small.jpg">
                      </span> -->
                      <span class="username">{{ Auth::user()->name }}</span>
                      <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu extended logout">
                      <div class="log-arrow-up"></div>
                      <li class="eborder-top">
                          <a href="/profile"><i class="fa fa-user-circle" aria-hidden="true"></i> My Profile</a>
                      </li>

                      <li>
                          <a href="/history"><i class="fa fa-history" aria-hidden="true"></i> History</a>
                      </li>
                      <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          <i class="fa fa-sign-out" aria-hidden="true"></i> Log Out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                        </form>
                      </li>
                  </ul>
              </li>
              <!-- user login dropdown end -->
              @endif
          </ul>
      </div>
</header>
<!--header end-->
