<!DOCTYPE html>
<html>
<head>

    <title></title>
    <meta charset='utf-8'>

    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    @yield('header_content')

</head>
<body>

	@yield('content')

<script src="{{URL::asset('assets/jquery-1.11.1.min.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>

