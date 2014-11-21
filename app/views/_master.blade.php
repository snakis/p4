<!DOCTYPE html>
<html>
<head>

    <title></title>
    <meta charset='utf-8'>

    @yield('header_content')

    <link rel='stylesheet' href='' type='text/css'>
    <script src="{{URL::asset('assets/jquery-1.11.1.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/docs.min.js')}}"></script>
	<script src="{{URL::asset('assets/css/bootstrap.min.css')}}"></script>
	<script src="{{URL::asset('assets/css/dashboard.css')}}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>
<body>

	@yield('content')

</body>
</html>

