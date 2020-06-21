<?php
	session_start();
	$_SESSION['login'] = $_POST['login'];
	$_SESSION['password'] = $_POST['password'];

 	header('Refresh: 1; url=includes/importcsv.php');
 	echo '
 			<head>
				<title>Телефонный справочник</title>
				<link rel="stylesheet" type="text/css" href="/includes/style.php"/>
			</head>
			
			<body>
			
				<div class="header_box">
					<p class="text_wait"> Подождите: идет обновление телефонной книги</h2>
				</div>
				

				<div id="fountainG">
					<div id="fountainG_1" class="fountainG"></div>
					<div id="fountainG_2" class="fountainG"></div>
					<div id="fountainG_3" class="fountainG"></div>
					<div id="fountainG_4" class="fountainG"></div>
					<div id="fountainG_5" class="fountainG"></div>
					<div id="fountainG_6" class="fountainG"></div>
					<div id="fountainG_7" class="fountainG"></div>
					<div id="fountainG_8" class="fountainG"></div>
				</div>
			</body>
		';

?>