<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Styles -->

</head>

<body>

<nav class="navbar navbar-expand-md navbar-light bluelight shadow-sm">
            <div class="container">
          
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

                                <a class="btn btn-light" href="{{ route('login') }}">{{ __('تسجيل دخول') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('إنشاء حساب') }}</a>
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
                <span class="navbar-brand mb-0 col-sm-4 col-12   ">
                    <a href="/">
                    <img src="{{ URL::to('/') }}/images/logo.jpeg" alt="logo" class="logo-bg  justify-content-end  ">

                </a>
            </span>
            </div>
        </nav>
    </div>

   
              
        

        </div>
      

      </nav>



    <div class="row">



       


        <div class="col-12 col-sm-6 ">
            <button type="button" class="btn bluelight  btn-lg">
                <a href="">
                    جهات
                </a>
            </button>
        </div>
        <div class="col-12  col-sm-6  mr-0.5">
            <button type="button" class="btn btn-light btn-lg  d-flex justify-content-end" >
                <a href="">متدربين</a>
            </button>
        </div>

    </div>
    <div class="sec">
        <h1>
            رؤيتنا
        </h1>
        <h2>
            أن نكون برنامجًا ممكنًا يسهم في تمكين وكفاءة التدريب الميداني و انشاء نظام تدريب تعاوني افتراضي
        </h2>

    </div>

    <div class="getway row mt">
      
        <div class="  col-6   col-xs-12">


            <a href="" class="d-flex justify-content-center text-center  bluelight col-6 col-xs-12" style="margin:0 auto;height:180px">


                <h1 class="pt-5">
                    التدريب التعاوني الافتراضي

                </h1>


            </a>

        </div>
        <div class=" col-6  d-flex justify-content-end  col-xs-12">
            <a href="" class="d-flex justify-content-center col-6 text-center bluelight col-xs-12" style="margin:0 auto ;margin:0 auto;height:180px">


                <h1 class="pt-5">
                    التدريب الميداني

                </h1>

            </a>


        </div>

    </div>
    <footer class="bluelight text-center text-white mt">
  <!-- Grid container -->
  <div class="container p-2 pb-0 row">
   
  <div class="col-2">
<a href="">من نحن</a>
</div>
  
<div class="col-2">
<a href="">اتصل بنا</a>
</div>
      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://encrypted-tbn0com/images?q=tbn:ANd" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

     

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>


    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
 
  <!-- Copyright -->
</footer>
    
</body>

</html>