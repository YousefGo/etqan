<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>إتقان</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Styles -->

</head>

<body class="bg">

<nav class="navbar navbar-expand-md navbar-light bluelight shadow-sm">
            <div class="container-fluid ">
          
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav w-100  " >
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item ml-4 text-center" >

                                <a class="btn btn-light btn-lg" href="{{ route('login') }}">{{ __('تسجيل دخول') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item text-center">
                                    <a class="nav-link btn-lg line" href="{{ route('register') }}">{{ __('إنشاء حساب') }}</a>
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

<div class="bg">



</div>

    <div class="row ">



       

         <div class="col-md-4"></div>
        <div class="col-md-2 col-sm-12  " >
            <button type="button" class="btn  btnrd  btn btn-info  bluelight btn-lg w-100 text-center mt-4 " >
                <a href="">
                    جهات
                </a>
            </button>
        </div>
        <div class="col-md-2  col-sm-12 " >
            <button type="button" class="btn btn-light  btnrd btn-lg w-100  text-center  mt-4  " >
                <a href="">متدربين</a>
            </button>
        </div>
        <div class="col-md-4"></div>

    </div>
    <div class="row mt-4 text-center">
        <h1 class="col-md-12">
            رؤيتنا
        </h1>
        <h2 class="col-md-12">
            أن نكون برنامجًا ممكنًا يسهم في تمكين وكفاءة التدريب الميداني و انشاء نظام تدريب تعاوني افتراضي
        </h2>

    </div>

  
  
  <div class="row">
  <div class="col-md-3 col-sm-12" >
</div>
<div class="col-md-3 col-sm-12 text-center" >

<div class="card w-100 mt-4  bluelight" style="height:120px">
    <div class="card-body  ">  <h2 class="text-center"> <a  class="awhite"href="
    ">
    التدريب التعـــاوني الافتراضي
</a> </h2> </div>
  </div>
</div>


<div class="col-md-3 col-sm-12" >
<div class="card w-100  mt-4 bluelight" style="height:120px">
    <div class="card-body  ">  <h2  class="text-center">

    <a  class="awhite text-center" href="">
  التــدريب الميــــداني
</a>
    </h2> </div>
  </div>
</div>

<div class="col-md-3 col-sm-12" >
</div>
  </div>
  
    <footer class="bluelight text-center text-white mt">
  <!-- Grid container -->
  <div class="container p-4 pb-0 ">
   <div class="row">
   <div class="col-2">
<a href="">من نحن</a>
</div>
  
<div class="col-2">
<a href="">اتصل بنا</a>
</div>

<div class="col-4"></div>
      <!-- Twitter -->
      <div class="col-2">
      <a class="btn btn-outline-light btn-floating  " href="https://encrypted-tbn0com/images?q=tbn:ANd" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      </div>
    
      <div class="col-2">
  <!-- Linkedin -->
  <a class="btn btn-outline-light btn-floating  " href="" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      </div>

    

   </div>
  

    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
 
  <!-- Copyright -->
</footer>
    
</body>

</html>