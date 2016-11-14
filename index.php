<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pilgrimage</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
</head>

<body>
    
	<?php
		/*
		
			HOW TO CREATE A NEW PAGE:

				1. Save a new PHP file in pages/ folder
				2. Name the file with xxx-xxx.php format.
					Example: contact.php or about-us.php
		
		*/	
	
	
		$requestedUri =  explode('/', $_SERVER['REQUEST_URI']);
		$page = $_SERVER['HTTP_HOST'] == 'localhost' ? $requestedUri[2] : $requestedUri[1];
	
		!file_exists('./pages/'.$page.'.php') ? require_once('./pages/home.php') : require_once('./pages/'.$page.'.php'); 
	
	?>
	
    <!--Scripts-->
    <script src="js/jquery-3.1.1.min.js "></script>
    <script src="js/bootstrap.min.js "></script>
</body>

</html>
