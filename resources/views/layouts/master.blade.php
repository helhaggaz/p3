<!DOCTYPE html>
<html>
<head>
	<title>
        @yield('title', 'Bill Splitter - P3')
    </title>

	<meta charset='utf-8'>
    <link href="/css/foobooks.css" type='text/css' rel='stylesheet'>

    @stack('head')

</head>
<body>

	<header>
		<img
        src='http://www.exceltactics.com/wp-content/uploads/2015/07/SplitBillsGraphicLogo.png'
        style='width:300px'
        alt='Bill Splitter Logo'>
	</header>

	<section>
		@yield('content')
	</section>

	<footer>
		Copyright &copy; {{ date('Y') }}
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    @stack('body')

</body>
</html>
