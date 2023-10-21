<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> CRUD</title>
   
    <link rel="stylesheet" href="{{asset('kagoji/crud/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('kagoji/crud/assets/css/style.css')}}">
    <link rel="shortcut icon" href="{{ asset('kagoji/crud/assets/img/fav.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" >
</head>

<body>
    <!-- Your content goes here -->
</body>

</html>
    <meta name="keywords" content="Procuremate" />
    <meta name="description" content="Procuremate.com is a tech-enabled closed marketplace  where national and international government contractors can buy non-regulated raw materials for infrastructure development with confidence.">
    <meta name="author" content="procuremate.com">
    @yield('CSS')

</head>
<body>


    <div class="container">
    
        <div class="mainBody">
            @yield('content')

        </div>
    </div>
    

    <script src="{{asset('kagoji/crud/assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('kagoji/crud/assets/js/jquery-ui.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'"></script>
    <script src="{{asset('kagoji/crud/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('kagoji/crud/assets/js/bootbox.min.js')}}"></script>
    <script src="{{asset('kagoji/crud/assets/js/jquery.validate.min.js')}}"></script>
     <script src="{{asset('kagoji/crud/assets/js/main.js')}}"></script>
    

    <input type="hidden" class="site_url" value="{{url('/')}}">
    <input type="hidden" class="site_prefix" value="{{Request()->route()->getPrefix()}}">
    @yield('JS')
    
    

</body>
</html>
