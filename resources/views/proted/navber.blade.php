   <!-- HEADER MOBILE-->
   <header class="header-mobile d-block d-lg-none">
       <div class="header-mobile__bar">
           <div class="container-fluid">
               <div class="header-mobile-inner">
                   <a class="logo" href="index.html">
                       <img src="/assets/images/icon/logo.png" alt="Cool Admin" />
                   </a>
                   <button class="hamburger hamburger--slider" type="button">
                       <span class="hamburger-box">
                           <span class="hamburger-inner"></span>
                       </span>
                   </button>
               </div>
           </div>
       </div>
       <nav class="navbar-mobile">
           <div class="container-fluid">
               <ul class="navbar-mobile__list list-unstyled">
                   <li class="has-sub">
                       <a class="js-arrow" href="{{ route('admin.home') }}">
                           <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                   </li>
                   <li>
                       <a href="{{ route('admin.sell') }}">
                           <i class="fas fa-chart-bar"></i>Sell</a>
                   </li>
                   <li>
                       <a href="{{ route('admin.totel_sell') }}">
                           <i class="fas fa-chart-bar"></i>Total Sell</a>
                   </li>

                   <li>
                       <a href="{{ route('Stock.index') }}">
                           <i class="fas fa-chart-bar"></i>Stock</a>
                   </li>
                   <li>
                       <a href="{{ route('today_cost.index') }}">
                           <i class="fas fa-table"></i>Today Cost</a>
                   </li>
                   <li>
                       <a href="{{ route('customer.index') }}">
                           <i class="far fa-check-square"></i>Customer</a>
                   </li>
                   <li>
                       <a href="{{ route('monthly.index') }}">
                           <i class="fas fa-calendar-alt"></i>Earnings</a>

                   </li>

               </ul>
               </li>
               </ul>
           </div>
       </nav>
   </header>
   <!-- END HEADER MOBILE-->

   <!-- MENU SIDEBAR-->
   <aside class="menu-sidebar d-none d-lg-block">
       <div class="logo">
           <a href="{{ route('admin.home') }}">
               <img src="/assets/images/icon/logo.png" alt="Cool Admin" />
           </a>
       </div>
       <div class="menu-sidebar__content js-scrollbar1">
           <nav class="navbar-sidebar">
               <ul class="list-unstyled navbar__list">
                   <li class="active has-sub">
                       <a class="js-arrow" href="{{ route('admin.home') }}">
                           <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                   </li>
                   <li>
                       <a href="{{ route('admin.sell') }}">
                           <i class="fas fa-chart-bar"></i>Sell</a>
                   </li>
                   <li>
                       <a href="{{ route('admin.totel_sell') }}">
                           <i class="fas fa-chart-bar"></i>Total Sell</a>
                   </li>
                   <li>
                       <a href="{{ route('Stock.index') }}">
                           <i class="fas fa-chart-bar"></i>Stock</a>
                   </li>
                   <li>
                       <a href="{{ route('today_cost.index') }}">
                           <i class="fas fa-table"></i>Today Cost</a>
                   </li>
                   <li>
                       <a href="{{ route('customer.index') }}">
                           <i class="far fa-check-square"></i>Customer</a>
                   </li>
                   <li>
                       <a href="{{ route('monthly.index') }}">
                           <i class="fas fa-calendar-alt"></i>Earnings</a>
                   </li>

           </nav>
       </div>
   </aside>
   <!-- END MENU SIDEBAR-->

   <!-- PAGE CONTAINER-->
   <div class="page-container">
       <!-- HEADER DESKTOP-->
       <header class="header-desktop">
           <div class="section__content section__content--p30">
               <div class="container-fluid">
                   <div class="header-wrap">
                       <form class="form-header" action="" method="POST">
                           <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                           <button class="au-btn--submit" type="submit">
                               <i class="zmdi zmdi-search"></i>
                           </button>
                       </form>
                       <div class="header-button">
                           <div class="noti-wrap">

                               <div class="noti__item js-item-menu">
                                   <i class="zmdi zmdi-notifications"></i>
                                   <span class="quantity">3</span>
                                   <div class="notifi-dropdown js-dropdown">
                                       <div class="notifi__title">
                                           <p>You have 3 Notifications</p>
                                       </div>
                                       <div class="notifi__item">
                                           <div class="bg-c1 img-cir img-40">
                                               <i class="zmdi zmdi-email-open"></i>
                                           </div>
                                           <div class="content">
                                               <p>You got a email notification</p>
                                               <span class="date">April 12, 2018 06:50</span>
                                           </div>
                                       </div>
                                       <div class="notifi__item">
                                           <div class="bg-c2 img-cir img-40">
                                               <i class="zmdi zmdi-account-box"></i>
                                           </div>
                                           <div class="content">
                                               <p>Your account has been blocked</p>
                                               <span class="date">April 12, 2018 06:50</span>
                                           </div>
                                       </div>
                                       <div class="notifi__item">
                                           <div class="bg-c3 img-cir img-40">
                                               <i class="zmdi zmdi-file-text"></i>
                                           </div>
                                           <div class="content">
                                               <p>You got a new file</p>
                                               <span class="date">April 12, 2018 06:50</span>
                                           </div>
                                       </div>
                                       <div class="notifi__footer">
                                           <a href="#">All notifications</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           {{-- <div class="account-wrap">
                               <div class="account-item clearfix js-item-menu">

                                   <div class="image">
                                       <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                   </div>
                                   <div class="content">
                                       <a class="js-acc-btn" href="#"> {{ auth('admin')->user()->name }}</a>
                       </div>
                       <div class="account-dropdown js-dropdown">
                           <div class="info clearfix">
                               <div class="image">
                                   <a href="#">
                                       <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                   </a>
                               </div>
                               <div class="content">
                                   <h5 class="name">
                                       <a href="#"> {{ auth('admin')->user()->name }}<a>
                                   </h5>

                                   <span class="email">johndoe@example.com</span>
                               </div>
                           </div>
                           <div class="account-dropdown__body">
                               <div class="account-dropdown__item">
                                   <a href="#">
                                       <i class="zmdi zmdi-account"></i>Account</a>
                               </div>
                               <div class="account-dropdown__item">
                                   <a href="#">
                                       <i class="zmdi zmdi-settings"></i>Setting</a>
                               </div>
                               <div class="account-dropdown__item">
                                   <a class="dropdown-item" href="{{ route('admin.password.change') }}">Change Password</a>
                               </div>
                           </div>
                           <div class="account-dropdown__footer">
                               <a class="dropdown-item" href="/admin/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                   {{ __('Logout') }}
                               </a>
                               <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                   @csrf
                               </form>
                           </div>
                       </div>
                   </div>
               </div> --}}
               <div class="account-wrap">
                   <div class="account-item clearfix js-item-menu">
                       <div class="image">
                           <img src="{{ asset('/assets/images/imteaj.jpg')}}" alt="Imteaj Sajid" />
                       </div>
                       <div class="content">
                           <a class="js-acc-btn" href="#">{{ auth('admin')->user()->name }}</a>
                       </div>
                       <div class="account-dropdown js-dropdown">
                           <div class="info clearfix">
                               <div class="image">
                                   <a href="#">
                                       <img src="{{ asset('/assets/images/imteaj.jpg')}}" alt="imteaj" />
                                   </a>
                               </div>
                               <div class="content">
                                   <h5 class="name">
                                       <a href="#">{{ auth('admin')->user()->name }}</a>
                                   </h5>
                                   <span class="email">{{ auth('admin')->user()->email }}</span>
                               </div>
                           </div>
                           <div class="account-dropdown__body">
                               <div class="account-dropdown__item">
                                   @admin('super')
                                   <a class="dropdown-item" href="{{ route('admin.show') }}"><i class="zmdi zmdi-settings"></i>{{ ucfirst(config('multiauth.prefix')) }}</a>
                                   @permitToParent('Role')
                                   <a class="dropdown-item" href="{{ route('admin.roles') }}"><i class="zmdi zmdi-settings"></i>Roles</a>
                                   @endpermitToParent
                                   @endadmin
                               </div>
                               <div class="account-dropdown__item">
                                   <a href="{{ route('admin.password.change') }}">
                                       <i class="zmdi zmdi-money-box"></i>Change Password</a>
                               </div>
                           </div>
                           <div class="account-dropdown__footer">
                               <a href="/admin/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                   <i class="zmdi zmdi-power"></i>{{ __('Logout') }}
                               </a>
                               <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                   @csrf
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
   </div>
   </div>
   </div>
   </header>
   <!-- HEADER DESKTOP-->
