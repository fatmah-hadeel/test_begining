<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap JS v4 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.rtlcss.com/bootstrap/v4.0.0/js/bootstrap.min.js" integrity="sha384-54+cucJ4QbVb99v8dcttx/0JRx4FHMmhOWi4W+xrXpKcsKQodCBwAvu3xxkZAwsH" crossorigin="anonymous"></script>

    <!-- fontawesome -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- google icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- Styles -->
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/create-account.css') }}" rel="stylesheet">
    <link href="{{ asset('css/payment.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my-profile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/test.css') }}" rel="stylesheet">


    <!-- fontawesome -->
</head>
<body>
<div id="app">

<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: white">
    <div class="container-fluid">

        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('storage/images/logo%20-%20name%20(2).jpeg') }}" class="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">الرئيسية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#who">من نحن؟</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#test">الاختبارات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#question">الأسئلة الشائعة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about-us">أرآء الطلاب</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact-us">تواصل معنا</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
                    <!-- Authentication Links -->

                            <ul  class="navbar-nav d-flex me-auto" aria-labelledby="dropdownMenuButton1">
                                    @guest
                                        @if (Route::has('login'))
                                          <li>
                                              <a class="btn en me-2" type="submit" href="#">EN</a>
                                          </li>
                                          <li>
                                              <a class="btn sign-up me-2" type="submit" href="{{ route('register') }}">إنشاء حساب</a>
                                          </li>
                                        @endif
                                        @if (Route::has('register'))
                                            <li>
                                                <a class="btn login me-2" type="submit" href="{{ route('login') }}">تسجيل الدخول</a>
                                            </li>
                                        @endif
                                    @else
                            <li class="nav-item">

                                        <div class="dropdown">
                                            <a style="-webkit-appearance: none" id="dropdownMenuButton1" class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}

                                                @if(Auth::user()->avatar)
                                                    <img style=" width: 40px; height: 40px; border-radius: 50%;" src="{{asset('/storage/images/'.Auth::user()->avatar)}}">
                                                @endif
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                          onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                        تسجيل خروج
                                                    </a></li>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </ul>
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

<!-- footer section -->
<div class="row">
    <footer class="text-center text-lg-end bg-light ">
        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-end mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                        <!-- Content -->
                        <h6 class="text-end">
                            <img src="{{ asset('storage/images/logo%20-%20name%20(2).png') }}" style="width: 50%">
                        </h6>
                        <p>
                            بوابة لمساعدة الأفراد على تحديد مسارهم التعليمي
                            والوظيفي الأفضل لهم، ويتناسب مع قدراتهم من خلال مجموعة من الأسئلة الديقة والمدروسة
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <!--                <h6 class="text-uppercase fw-bold mb-4">-->
                        <!--                  Products-->
                        <!--                </h6>-->
                        <p>
                            <a href="home.html" class="text-reset" style="text-decoration: none">الرئيسية</a>
                        </p>
                        <p>
                            <a href="#who" class="text-reset" style="text-decoration: none">من نحـن</a>
                        </p>
                        <p>
                            <a href="#test" class="text-reset" style="text-decoration: none">الاختبارات</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <!--                <h6 class="text-uppercase fw-bold mb-4">-->
                        <!--                  Products-->
                        <!--                </h6>-->
                        <p>
                            <a href="#question" class="text-reset" style="text-decoration: none">الأسئلة الشائعة</a>
                        </p>
                        <p>
                            <a href="#about-us" class="text-reset" style="text-decoration: none">أرآء الطلاب</a>
                        </p>
                        <p>
                            <a href="#contact-us" class="text-reset" style="text-decoration: none">تواصل معنا</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            اتصـل بـنا
                        </h6>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@begining.com
                        </p>
                        <p><i class="fas fa-map-marker-alt me-3"></i> الريـاض، السعـودية</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="row">
            <div class="text-center p-4" style="background-color: #0B3E61; color: white">
                © 2021 جميع الحقوق محفوظة:
            </div>
        </div>
        <!-- Copyright -->
    </footer>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

{{--    <div id="app">--}}
{{--        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--            <div class="container">--}}

{{--                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <!-- Left Side Of Navbar -->--}}
{{--                    <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                        <img  style="width: 180px; height: 70px" src="{{ asset('storage/images/logo%20-%20name%20(2).jpeg') }}">--}}
{{--                    </a>--}}
{{--                    <ul class="navbar-nav mr-auto">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a style="color: black" class="nav-link" href="">Home</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a style="color: black" class="nav-link" href="">Who we are</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a style="color: black" class="nav-link" href="">Exams</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a style="color: black" class="nav-link" href="">Q&A</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a style="color: black" class="nav-link" href="">Student reviews</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a style="color: black" class="nav-link" href="">Contact with us</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}

{{--                    <!-- Right Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav ml-auto">--}}


{{--                        <!-- Authentication Links -->--}}
{{--                        @guest--}}
{{--                            @if (Route::has('login'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="btn border-btn" href="">Ar</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="btn border-btn" href="{{ route('login') }}">Login</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}

{{--                            @if (Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="btn fill-btn" href="{{ route('register') }}">Register</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }}--}}

{{--                                    @if(Auth::user()->avatar)--}}
{{--                                        <img style="width: 30px; border-radius: 80%" src="{{asset('/storage/images/'.Auth::user()->avatar)}}">--}}
{{--                                    @endif--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endguest--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}

{{--        <main class="py-4">--}}
{{--            @yield('content')--}}
{{--        </main>--}}
{{--    </div>--}}
</div>
</body>
</html>
