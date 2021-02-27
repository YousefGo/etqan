<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>التدريب التعاوني</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Styles -->
    <link rel="icon" href="/public/favicon.ico" />

</head>

<body class="bg">
<nav class="navbar navbar-expand-md navbar-light bluelight shadow-sm">
        
               
        <div class="col-md-5 col-sm-12 text-center">
            <h1> التدريب التعاوني الافتراضي</h1>
        </div>
        <div class="col-md-3 col-sm-12 text-center"> <label for="">
                <h2>التخصص <select name="department" id="department">
                <option value="cs">علوم حاسب</option>
                <option value="ce">هندسة حاسب</option>
                <option value="is"> نظم معلومات</option>


            </select></h2>
                 
            </label></div>
            <span class="navbar-brand mb-0 col-sm-12 col-md-4   ">
                    <a href="/">
                    <img src="{{ URL::to('/') }}/images/logo.jpeg" alt="logo" class="logo-bg  justify-content-end  ">

                </a>
            </span>

    </div>

           
        </nav>


    <table class="table ">
        <thead>
            <tr>
                <th scope="col" class="text-center">اسم الجهة</th>
                <th scope="col">مدة التدريب</th>
                <th scope="col"> مقابلات افتراضية متاحة</th>
         
                <th scope="col">تواصل</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row" class="text-center">وزارة الاتصالات وتقنية المعلومات</th>
                <td>4 شهور </td>
                <td>      <a href="">
                       
                       احجز الآن موعد مقابلة افتراضي
                       </a>    </td>
                <td>
                    <a href="">الهاتف </a>-
                    <a href="">البريد</a>-
                    <a href="">الموقع</a>
                </td>

            </tr>
            <tr>
                <th scope="row" class="text-center">الهيئة السعودية للبيانات والذكاء الصناعي (سدايا)</th>
                <td>4 شهور </td>
                <td>    <a href="">
                       
                       احجز الآن موعد مقابلة افتراضي
                       </a> </td>
                <td>

                    <a href="">الهاتف </a>-
                    <a href="">البريد</a>-
                    <a href="">الموقع</a>
                </td>

            </tr>
            <tr>
                <th scope="row" class="text-center">علم</th>
                <td>3 شهور</td>
                <td>
                    <a href="">
                       
                    احجز الآن موعد مقابلة افتراضي
                    </a> </td>
                <td>


                    <a href="">الهاتف </a>-
                    <a href="">البريد</a>-
                    <a href="">الموقع</a>
                </td>

            </tr>
        </tbody>
    </table>
    
   
</body>

</html>