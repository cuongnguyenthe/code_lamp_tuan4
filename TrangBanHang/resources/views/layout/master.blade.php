<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chu</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link href="{{asset('css/bootstrap-theme.min.css')}}">

</head>

<body>
@include('layout.header')
@include('layout.menu')
@yield('Noidung')

@include('layout.footer')
</body>
</html>