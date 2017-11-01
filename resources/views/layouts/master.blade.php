<!DOCTYPE html>
<html>
<head>
	<title>
        @yield('title', 'Bill Splitter - P3')
  </title>

	<meta charset='utf-8'>
		<!-- Bootstrap CSS -->
		<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
		<link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link href="/css/styles.css" type='text/css' rel='stylesheet'>

    @stack('head')

</head>
<body>

	<header>
		<h1 class='text-center'>
			<br>
			<img
					src='http://www.exceltactics.com/wp-content/uploads/2015/07/SplitBillsGraphicLogo.png'
					style='width:90px'
					alt='Bill Splitter Logo'>
			<strong>Bill Splitter</strong>
			<img
					src='http://www.exceltactics.com/wp-content/uploads/2015/07/SplitBillsGraphicLogo.png'
					style='width:90px'
					alt='Bill Splitter Logo'>
			<br>
			<br>
		</h1>

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
