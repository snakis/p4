<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>

    {{HTML::style('assets/css/bootstrap.min.css')}}
    {{HTML::style('assets/css/master_style.css')}}

    @yield('header_content')

</head>
<body>
	@if(Auth::check())
	<header>
		<div style='color: DimGray'>
			<h2>My Grocery List Manager <img class='logo' src='/images/grocery_image.jpg' alt='Groceries'></h2>
		</div>
	</header>
	<ul>
		<div>
			<br>
			<b><div style="text-align: left"><a href="/food/index">View Master List</a></div></b>
			<div style="text-align: right"><a href='/logout'>Log out {{ Auth::user()->email; }}&nbsp&nbsp&nbsp&nbsp</a></div>
		</div>

		<div>
			@foreach($errors->all() as $message)
				<div class='error' style="color:red">ERROR: {{ $message }}</div>
			@endforeach

			@yield('content')
		</div>

		<br><br>
		<div class="lower_link">
			<a href="/person/index">Manage Shoppers</a>&nbsp
			<a href="/store/index">Manage Stores</a>&nbsp&nbsp&nbsp&nbsp<br>
		</div>
	</ul>
	@endif

	@yield('no_login_content')


	<script src="{{URL::asset('assets/jquery-1.11.1.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>

	@yield('javascript_info')

</body>
</html>


