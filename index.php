<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Bootstrap 101 Template</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Styles -->
		<link href="css/style.css" rel="stylesheet">
		<!-- Fonts -->
		<link href="css/fonts.css" rel="stylesheet">

	</head>
	<body>
		<?php
			$view = $_GET['view']; 
			$viewPath = 'pages/main-page.html';
			switch($view) {
				
				case 'catalog':	
					$viewPath = 'pages/catalog.php';
					break;
				case 'contact-us':	
					$viewPath = 'pages/contact-us.html';
					break;
				
				
			}
			include('pages/header.html');
			include($viewPath);
			include('pages/footer.html');
		?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-3.1.0.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Scripts -->
		<script src="js/menu-bar.js"></script>
	</body>
</html>