<!DOCTYPE html>
<html lang="zxx"class="no-js">

<head>
    
    <meta name="viewport"content="width=device-witdh,initial-scale=1, shrink-to-fit=no">
  
    <link rel="shortcut" href="{{asset ('assets/templates/user/img/fav.png')}}">
    
    <meta name="author"content="CodePixar">
   
    <meta name="description"content="">
    
    <meta name="keywords" content="">
   
    <meta charset="Utf-8">
   
    <title>Merch Store</title>

    @include('layouts.user.style')
</head>
<body>
    @include('sweetalert::alert')
    @include('layouts.user.navbar')

    @yield('content')
    @include('layouts.user.footer')
    @include('layouts.user.script')
    
</body>
</html>