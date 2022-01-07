@include('inc.admin_header')
            <!-- Sidebar chat start -->
            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                        <div class="user-box">
                            <div class="chat-inner-header">
                                <div class="back_chatBox">
                                    <div class="right-icon-control">
                                        <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                        <div class="form-icon">
                                            <i class="icofont icofont-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius img-radius" src="{{ asset('public/backend/libraries\assets\images\avatar-3.jpg')}}" alt="Generic placeholder image ">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="{{ asset('public/backend/libraries\assets\images\avatar-2.jpg')}}" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="{{ asset('public/backend/libraries\assets\images\avatar-4.jpg')}}" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="{{ asset('public/backend/libraries\assets\images\avatar-3.jpg')}}" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="{{ asset('public/backend/libraries\assets\images\avatar-2.jpg')}}" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat start-->
            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="feather icon-chevron-left"></i> Josephin Doe
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="libraries\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="libraries\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                        </a>
                    </div>
                </div>
                <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                        <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                        <div class="form-icon">
                            <i class="feather icon-navigation"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="{{ request()->is('home') ? 'active' : '' }}">
                                    <a href="{{ URL::to('home') }}">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Home</span>
                                    </a>
                                </li>
                            </ul>



                            <div class="pcoded-navigatio-lavel">Customer</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu {{ request()->is('customer/*') ? 'pcoded-trigger' : '' }}">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-aperture rotate-refresh"></i><b>A</b></span>
                                        <span class="pcoded-mtext">Customer</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="{{ request()->is('customer/add') ? 'active' : '' }}"> 
                                            <a href="{{ URL::to('customer/add') }}">
                                                <span class="pcoded-mtext">Add Customer</span>
                                            </a>
                                        </li>
                                        <li class="{{ request()->is('customer/all') ? 'active' : '' }}">
                                            <a href="{{ URL::to('customer/all') }}">
                                                <span class="pcoded-mtext">All Customer</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>



                            <div class="pcoded-navigatio-lavel">Invoice</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu {{ request()->is('invoice/*') ? 'pcoded-trigger' : '' }}">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-aperture rotate-refresh"></i><b>A</b></span>
                                        <span class="pcoded-mtext">Invoice</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="{{ request()->is('invoice/add') ? 'active' : '' }}"> 
                                            <a href="{{ URL::to('invoice/add') }}">
                                                <span class="pcoded-mtext">Add Invoice</span>
                                            </a>
                                        </li>
                                        <li class="{{ request()->is('invoice/all') ? 'active' : '' }}">
                                            <a href="{{ URL::to('invoice/all') }}">
                                                <span class="pcoded-mtext">All Invoice</span>
                                            </a>
                                        </li>

                                        <li class="{{ request()->is('invoice/view') ? 'active' : '' }}">
                                            <a href="{{ URL::to('invoice/view') }}">
                                                <span class="pcoded-mtext">View Invoice</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>


                            <div class="pcoded-navigatio-lavel">Employee</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu {{ request()->is('employee/*') ? 'pcoded-trigger' : '' }}">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-aperture rotate-refresh"></i><b>A</b></span>
                                        <span class="pcoded-mtext">Employee</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="{{ request()->is('employee/add') ? 'active' : '' }}"> 
                                            <a href="{{ URL::to('employee/add') }}">
                                                <span class="pcoded-mtext">Add Employee</span>
                                            </a>
                                        </li>
                                        <li class="{{ request()->is('employee/all') ? 'active' : '' }}">
                                            <a href="{{ URL::to('employee/all') }}">
                                                <span class="pcoded-mtext">All Employee</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>


                            <div class="pcoded-navigatio-lavel">Attendence</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu {{ request()->is('attendence/*') ? 'pcoded-trigger' : '' }}">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-aperture rotate-refresh"></i><b>A</b></span>
                                        <span class="pcoded-mtext">Attendence</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="{{ request()->is('attendence/add') ? 'active' : '' }}"> 
                                            <a href="{{ URL::to('attendence/add') }}">
                                                <span class="pcoded-mtext">Take Attendence</span>
                                            </a>
                                        </li>
                                        <li class="{{ request()->is('attendence/all') ? 'active' : '' }}">
                                            <a href="{{ URL::to('attendence/all') }}">
                                                <span class="pcoded-mtext">All Attendence</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>


                            <div class="pcoded-navigatio-lavel">Support</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="http://html.codedthemes.com/Adminty/doc" target="_blank">
                                        <span class="pcoded-micon"><i class="feather icon-monitor"></i></span>
                                        <span class="pcoded-mtext">Documentation</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#" target="_blank">
                                        <span class="pcoded-micon"><i class="feather icon-help-circle"></i></span>
                                        <span class="pcoded-mtext">Submit Issue</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
@include('inc.admin_footer')

{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
 --}}