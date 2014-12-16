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
	<ul>
	@if(Auth::check())
		<div>
			<br>
			<div style="text-align: left"><a href="/food/index">View Master List</a></div>
			<div style="text-align: right"><a href='/logout'>Log out {{ Auth::user()->email; }}&nbsp&nbsp&nbsp&nbsp</a></div>
		</div>

		@foreach($errors->all() as $message)
			<div class='error' style="color:red">ERROR: {{ $message }}</div>
		@endforeach

		@yield('content')

		<br><br>
		<p class="lower_link">
			<a href="/person/index">Manage Shoppers</a>&nbsp
			<a href="/store/index">Manage Stores</a>&nbsp&nbsp&nbsp&nbsp<br>
		</p>
	@endif
	</ul>

	@yield('no_login_content')


	<script src="{{URL::asset('assets/jquery-1.11.1.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>

	@yield('javascript_info')

</body>
</html>


