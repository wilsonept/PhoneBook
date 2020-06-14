<!DOCTYPE html>
<html>
	<head>
		<title>Телефонный справочник</title>
		<link rel="stylesheet" type="text/css" href="includes/style.php"/>
	</head>

	<body>
		<div class='heading'>
			<h1>Справочник</h1>
		</div>
		<br>

		<div class='container'>		
			<form class='form' method='POST' action='/search.php'>
				<div class='input1'>
					<input class='dws-input' type='text' placeholder='Поисковый запрос' name='search'>
				</div>

				<div class='button1'>
					<input class='dws-submit' type='submit' value='Поиск'>
				</div>
			</form>
			<form class='form2' method='POST' action='share/actual.xlsx'>
				<div class='button2'>
					<input class='dws-download' type='submit' value='.xlsx'>
				</div>
			</form>
		</div>
		<br>
	</body>
</html>