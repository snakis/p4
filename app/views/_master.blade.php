<!DOCTYPE html>
<html>
<head>

    <title></title>
    <meta charset='utf-8'>

    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    @yield('header_content')

</head>
<body>
	<a href="/food/index">View Master List</a><br>
	<a href="/person/create">Add a new shopper</a><br>
	<a href="/store/create">Add a new store</a><br>
	<a href="/food/create">Add a new grocery item</a><br>
	@yield('content')

	<script src="{{URL::asset('assets/jquery-1.11.1.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>

	@yield('javascript_info')

</body>
</html>


