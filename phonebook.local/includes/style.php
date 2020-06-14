<?php

	header('Content-type: text/css; charset:UTF-8');

?>

body {
	font: 12pt Calibri;
	width: 1000px;
	margin: auto;
	background-color: #27272f;
}

td, th {
	padding: 5px;
	height: 30px;
}

table {
	border-spacing: 0;
	width: 1000px;
	border-collapse: separate;
}

h1 {
	font: 40pt Segoe Script;
	color: white;
	text-align: left;
	padding: 60px 0 0 100px;
}

input[type='text'] {
	width: 300px;
	height: 45px;
	font-size: 18px;
	margin-bottom: 25px;
	padding-left: 10px;
	border-radius: 8px;
	border: none;
	border-top: 1px solid #70483e;
	border-bottom: 4px solid #1b1b23;
}

input[type='submit'], input[type='button'] {
	border-radius: 8px;
}

.tbodyB {
	background: white;
	border: -10px solid #1b1b23;
	border-radius: 15px;
}

.tableR {
	border-spacing: 0;
	border-radius: 10px;
	border-left: 5px solid #1b1b23;
	border-top: 5px solid #1b1b23;
	border-right: 5px solid #1b1b23;
	border-bottom: 5px solid #1b1b23;
}

.tableR th {
	background: #1b1b23;
	color: white;
	padding: 5px;
	position: sticky;
	top: 100px;
}

.container {
	width: 1000px;
	height: 100px;
	background:  #27272f;
	margin: 10px auto 0px auto;
	text-align: center;
	position: sticky;
	top: 0px;
	z-index: 1000;
}

.dws-submit {
	width: 80px;
	padding: 15px 15px;
	margin: 30px 0 0 0;
	font-size: 15px;
	color: #1b1b23;
	font-weight: bold;
	background-color: #e0a968;
	border: none;
	background-color: #e0a968;
	border-top: 1px solid #70483e;
	border-bottom: 3px solid #1b1b23;
	cursor: pointer;
}

.dws-download {
	width: 80px;
	padding: 15px 15px;
	margin: 30px 0 0 0;
	font-size: 15px;
	font-weight: bold;
	border: none;
	background-color: #e0a968;
	border-top: 1px solid #70483e;
	border-bottom: 3px solid #1b1b23;
	cursor: pointer;
}

.dws-input {
	margin: 30px 0 0 0;
}

.input1 {
	top: 30px;
	left: 90;
}

.button1 {
	position: absolute;
	top: 0;
	left: 250px;
}

.button2 {
	position: absolute;
	top: 0;
	right: 250px;
}

.heading {
	background-image: url(/pics/phone1.jpg);
	background-size: 100%;
	background-position-y: -200px;
	width: 100%;
	height: 400px;
	position: relative;
	border-radius: 120px;
	box-shadow: 0 -5px 0 #1b1b23;
}

