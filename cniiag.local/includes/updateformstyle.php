<?php

	header('Content-type: text/css; charset:UTF-8');

?>

* {
	border-spacing: 0;
	box-sizing: border-box;
	border: 0px solid black;
}

body {
	font: 12pt Calibri;
	margin: auto;
	background-color: #fafafa;
	background-image: url('/pics/logo2.png');
	background-size: 1000px;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center;
}

.header_box {
	padding: 8px;
	width: 100%;
	height: 50px;
	position: absolute;
	background: #27272f;
	top: 0;
}

.form_box {
	width: 600px;
	height: 32px;
	margin: auto;
	position: relative;
}

.form_container {
	width: 600px;
	height: 32px;
}

form {
	width: 600px;
	height: 32px;
	position: relative;
}

input {
	height: 32px;
	width: 223px;
	background: red;
	position: absolute;
	top:0;
	padding-left: 5px;
	border-radius: 3px;
	border: none;
	outline: none;
	background: #fafafa;
	color: black;
}

.button_submit {
	height: 32px;
	width: 70px;
	position: absolute;
	top:0;
	right: 0;
	border: none;
	outline: none;
	padding: 6px;
	background: gray;
	border-radius: 3px;
	text-align: center;
}

.button_cancel {
	position: absolute;
	top: 0;
	left: 0;
	text-decoration: none;
	height: 32px;
	width: 70px;
	padding: 6px;
	background: gray;
	border-radius: 3px;
	text-align: center;

}

.button_cancel a {
	text-decoration: none;
	color: black;
}

.input_login {
	left:	75px;
}

.input_password {
	right:	75px;
}