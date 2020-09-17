<?php
	session_start();
	$login = $_SESSION['login'];
	$password = $_SESSION['password'];

	header('Refresh: 0; url=/index.php');
	echo '
		<head>
		<title>Телефонный справочник</title>
		<link rel="stylesheet" type="text/css" href="/includes/style.php"/>
		</head>';

	if ($_POST['login']) {

		$login = $_POST['login'];
		$password = $_POST['password'];

	}
	else
	{
		$login = 'user';
		$password = 'user';
	}


include('db.php');

$dptable = "DROP TABLE `phonebook`;";

$crtable = "
CREATE TABLE `phone_numbers`.`PhoneBook`
	(
		`DepNum` TEXT NULL ,
		`DepName` TEXT NULL,
		`Position` TEXT NULL ,
		`Lastname` TEXT NULL ,
		`Name` TEXT NULL ,
		`Surname` TEXT NULL ,
		`Phone_1` TEXT NULL ,
		`Phone_2` TEXT NULL ,
		`Phone_3` TEXT NULL ,
		`Phone_4` TEXT NULL,
		`Object` TEXT NULL
		
	) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;
	";

$import = "
LOAD DATA INFILE 'c:\\\openserver\\\openserver\\\userdata\\\php_upload\\\phone_numbers.csv'
INTO TABLE `phonebook`
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\\\n'
IGNORE 1 ROWS;
";

mysqli_query($connection, $dptable);

time_nanosleep ( 2 , 0 );

mysqli_query($connection, $crtable);

time_nanosleep ( 2 , 0 );

mysqli_query($connection, $import);

mysqli_close($connection);

//	echo 'post: ' . $_POST['login'] . '<br />';
//	echo 'post: ' . $_POST['password'] . '<br />';
//
//	echo 'Nepost: ' . $login . '<br />';
//	echo 'Nepost: ' . $password;

?>