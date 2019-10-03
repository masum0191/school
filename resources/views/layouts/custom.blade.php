<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('asset/css/custom.css') }}">
    {{-- extra css link --}}
    {{-- datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"> --}}
    {{-- select2 --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    {{-- select2 --}}
    @yield('css')
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('asset/font/praxisfont.js') }}"></script> --}}
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<style>
    .images{
        border-radius: 50%;
    }
    p{font-size: 14px;
   }
   body{
    overflow-x: hidden!important;
    font-family: 'OpenSans Regular';
    -webkit-font-smoothing: antialiased;
    min-height: 100%;
    background: #f1f2f7;
}
   }

</style>

<body>

    <div class="wrapper">

        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src=" {{ asset('asset/images/default.png') }} " class="images" height="50px" width="50px" alt="">
                <h5>{{ Auth::user()->name }}

                </h5>
                {{ Auth::user()->email }}
            </div>

            <ul class="list-unstyled components">
                <p>Dashboard</p>
                <li>
                        <a href="{{ url('student') }}"><i class="fas fa-align-justify"></i> Student</a>
                        <a href="{{ url('teacher') }}"><i class="fas fa-puzzle-piece"></i> Teacher</a>
                        <a href="{{ url('parent') }}"><i class="fas fa-puzzle-piece"></i> Guardian</a>
                        <a href="{{ url('staff') }}"><i class="fas fa-user"></i> User/Staff</a>


                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fas fa-address-card"></i> Academic</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="{{ url('acadamic/class') }}"> Class</a>
                            </li>
                            <li>
                                <a href="{{ url('section') }}">Section</a>
                            </li>
                            <li>
                                <a href="#">
                                    Syllabus
                                </a>
                            </li>
                            <li>
                                    <a href="#">
                                        Assignment
                                    </a>
                                </li>
                                <li>
                                        <a href="#">
                                            Routine
                                        </a>
                                    </li>
                        </ul>
                    </li>
                <li class="active">
                    <a href="#student" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-allergies"></i> Attendance</a>
                    <ul class="collapse list-unstyled" id="student">
                        <li>
                            <a href="">Student Attendance</a>
                        </li>
                        <li>
                            <a href="#">Teacher Attendance</a>
                        </li>
                        <li>
                            <a href="#">User Attendance</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                        <a href="#Teacher" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fas fa-balance-scale"></i> Exam</a>
                        <ul class="collapse list-unstyled" id="Teacher">
                            <li>
                                <a href="">Exam</a>
                            </li>
                            <li>
                                <a href="#">Exam Schedule</a>
                            </li>
                            <li>
                                <a href="#">Grade</a>
                            </li>
                            <li>
                                 <a href="#">Exam Attendance</a>
                                </li>
                        </ul>
                    </li>
                    <li class="active">
                            <a href="#Guardian" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-balance-scale"></i> Mark</a>
                            <ul class="collapse list-unstyled" id="Guardian">
                                <li>
                                    <a href="">Mark</a>
                                </li>
                                <li>
                                    <a href="#">Mark Distribution</a>
                                </li>
                                <li>
                                    <a href="#">Promotion</a>
                                </li>
                            </ul>
                        </li>
                        <li class="active">
                                <a href="#User" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-address-book"></i> User/staf</a>
                                <ul class="collapse list-unstyled" id="User">
                                    <li>
                                        <a href="">Home 1</a>
                                    </li>
                                    <li>
                                        <a href="#">Home 2</a>
                                    </li>
                                    <li>
                                        <a href="#">Home 3</a>
                                    </li>
                                </ul>
                            </li>

                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>


        </nav>
          <!-- Sidebar Holder -->

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg bg-light navbar-fixed-top">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul>

                    </div>
                </div>
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
                                    <img src="{{ asset('asset/images/default.png')  }}" class="images" height="50px" width="50px" alt=""> <span class="caret">  </span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="">Manage Accounts</a>
                                    <a class="dropdown-item" href="">Change Password</a>
                                    <a class="dropdown-item" href="">Check Inbox</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
            </nav>
 <!-- Page Content Holder -->

 {{-- main contin  --}}
 <div class="container bg-white ">
    @yield('main')
</div>
            {{-- main contin  --}}
        </div>

    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#pageSubmenu').on('click', function () {
                alert(5);
                $('#pageSubmenu').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    {{-- extra js links --}}
    {{-- datatables --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
       <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"><script>

   @yield('js')
   {{-- extra js links --}}

    {{-- extra ja --}}
    @yield('extrajs')
</body>

</html>
