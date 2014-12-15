<!DOCTYPE html>
<html>
<head>

    <title></title>
    <meta charset='utf-8'>

    {{HTML::style('assets/css/bootstrap.min.css')}}
    {{HTML::style('assets/css/food_style.css')}}
    {{HTML::style('assets/css/master_style.css')}}

    @yield('header_content')

</head>
<body>
	<a href="/food/index">View Master List</a><br>

	@yield('content')

	<br><br>
	<p class="lower_link">
		<a href="/person/index">Manage Shoppers</a>&nbsp
		<a href="/store/index">Manage Stores</a>&nbsp&nbsp&nbsp&nbsp<br>
	</p>

	<script src="{{URL::asset('assets/jquery-1.11.1.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>

	@yield('javascript_info')

</body>
</html>


