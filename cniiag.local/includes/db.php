<?php

	if ($_SESSION['login'])
	{

		$login = $_SESSION['login'];
		$password = $_SESSION['password']; 

	}
	else
	{
		$login = 'user';
		$password = 'user';
	}

	$connection = mysqli_connect('127.0.0.1', "$login", "$password", 'phone_numbers');

	if ($connection == false)
	{
		echo 'Не удалось подключиться к базе данных! <br>';
		echo mysqli_connect_error();
		exit();
	}
	else
	{
		//echo 'good';
		//echo $login . '<br />';
		//echo $password;
	}

?>