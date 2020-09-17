<!DOCTYPE html>
<html>
	<head>
		<title>Телефонный справочник</title>
		<link rel="stylesheet" type="text/css" href="/includes/style.php"/>
		<link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	</head>

	<body>

		<div class='header_box'>
			
			<div class='input_box'>
				
				<form method='POST' action='/search.php'>
				
					<input class='input_search' type='text' placeholder='Поисковый запрос' name='search'>
					<button class='button_search' type='submit'></button>
				
				</form>
	
				<div class='button_pancake'>
					<span class='settings'></span>
					<div class='dropdown_content'>
						<a href='share/actual.xlsx'>Загрузить .xlsx</a>
						<a href='/updateform.php'>Обновить справочник</a>
						<a href='Отправить запрос на изменение'>Отправить запрос на изменение</a>
					</div>

				</div>
			
			</div>
	</body>
</html>