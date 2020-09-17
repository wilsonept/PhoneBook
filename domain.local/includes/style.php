<?php

	header('Content-type: text/css; charset:UTF-8');

?>

* {
	border-spacing: 0;
	box-sizing: border-box;
	border: 0px solid white;
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
	position:relative;
	background: #27272f;
	top:0px;
}

.input_box {
	width: 437px;
	height: 32px;
	margin: auto;
	position: relative;
}


form {
	width: 400px;
  	margin: 0 0 auto auto;
}

input {
	width: 100%;
	height: 32px;
	padding-left: 5px;
	border: 1px solid gray;
	border-radius: 3px;
	outline: none;
	background: #fafafa;
	color: black;
}

button, .button_pancake {
	height: 32px;
	border: none;
	background: gray;
	cursor: pointer;
	outline: none;
	border: none;
	color: #404040;
}

.button_search {
	top: 0;
	right: 0px;
	width: 62px;
	border-radius: 0 3px 3px 0;
	position: absolute;
}

.button_search:before {
	content: "\f002";
	font-family: FontAwesome;
	font-size: 16px;
	color: #1b1b23;
}

.button_search:hover  {
	background-color: darkgray;
}

.button_search:hover input {
	border: 1px solid gray;
}


.button_pancake{
	padding: 6px;
	width: 32px;
	height: 32px;
	background: gray;
	position: absolute;
	top: 0;
	border-radius: 3px;
	text-align: center;
}

.button_pancake:before {
	content: "\f0c9";
	font-family: FontAwesome;
	font-size: 16px;
	color: #1b1b23;
}

.dropdown_content{
	display:none;
	position: absolute;
	border-radius: 3px;
	top: 32px;
	min-width: 170px;
	background-color: gray;
	z-index: 1;
}

.dropdown_content a {
	color: black;
	text-decoration: none;
	display: block;
}

.dropdown_content a:hover {
	background-color: darkgray;
}

.button_pancake:hover {
	background-color: darkgray;
}

.button_pancake:hover .dropdown_content {
	display: block;
}

.table_box {
	position: relative;
	top: 15px;
}

.table_header {
	background: #1b1b23;
	color: lightgray;
}

th {
	padding: 10px;
	position: sticky;
	top: 0px;
	background: #1b1b23;
	z-index: 1;
}

table {
	margin:auto;
	border-spacing: 0px;
	border-radius: 10px;
	border-left: 5px solid #1b1b23;
	border-top: 5px solid #1b1b23;
	border-right: 5px solid #1b1b23;
	border-bottom: 5px solid #1b1b23;
	background-color: lightgray;
	opacity: 92%;
}

td {
	padding: 10px;
}

.tr_one {
	background: white;
	opacity: 92%;
	z-index: 1;
}

.tr_two {
	background-color: lightgray;
	opacity: 85%;
	text-shadow: 5px black;
	z-index: 1;
}

.text_wait{
	text-align: center;
	font-family: 12pt Calibri;
	color: #afafaf;
	vertical-align: center;
	font-weight: bold;
}






#fountainG{
	position:relative;
	width:222px;
	height:27px;
	margin:auto;
	top:10px;
}

.fountainG{
	position:absolute;
	top:0;
	background-color:rgba(245,242,223,0.49);
	width:27px;
	height:27px;
	animation-name:bounce_fountainG;
		-o-animation-name:bounce_fountainG;
		-ms-animation-name:bounce_fountainG;
		-webkit-animation-name:bounce_fountainG;
		-moz-animation-name:bounce_fountainG;
	animation-duration:1.5s;
		-o-animation-duration:1.5s;
		-ms-animation-duration:1.5s;
		-webkit-animation-duration:1.5s;
		-moz-animation-duration:1.5s;
	animation-iteration-count:infinite;
		-o-animation-iteration-count:infinite;
		-ms-animation-iteration-count:infinite;
		-webkit-animation-iteration-count:infinite;
		-moz-animation-iteration-count:infinite;
	animation-direction:normal;
		-o-animation-direction:normal;
		-ms-animation-direction:normal;
		-webkit-animation-direction:normal;
		-moz-animation-direction:normal;
	transform:scale(.3);
		-o-transform:scale(.3);
		-ms-transform:scale(.3);
		-webkit-transform:scale(.3);
		-moz-transform:scale(.3);
	border-radius:18px;
		-o-border-radius:18px;
		-ms-border-radius:18px;
		-webkit-border-radius:18px;
		-moz-border-radius:18px;
}

#fountainG_1{
	left:0;
	animation-delay:0.6s;
		-o-animation-delay:0.6s;
		-ms-animation-delay:0.6s;
		-webkit-animation-delay:0.6s;
		-moz-animation-delay:0.6s;
}

#fountainG_2{
	left:28px;
	animation-delay:0.75s;
		-o-animation-delay:0.75s;
		-ms-animation-delay:0.75s;
		-webkit-animation-delay:0.75s;
		-moz-animation-delay:0.75s;
}

#fountainG_3{
	left:55px;
	animation-delay:0.9s;
		-o-animation-delay:0.9s;
		-ms-animation-delay:0.9s;
		-webkit-animation-delay:0.9s;
		-moz-animation-delay:0.9s;
}

#fountainG_4{
	left:83px;
	animation-delay:1.05s;
		-o-animation-delay:1.05s;
		-ms-animation-delay:1.05s;
		-webkit-animation-delay:1.05s;
		-moz-animation-delay:1.05s;
}

#fountainG_5{
	left:111px;
	animation-delay:1.2s;
		-o-animation-delay:1.2s;
		-ms-animation-delay:1.2s;
		-webkit-animation-delay:1.2s;
		-moz-animation-delay:1.2s;
}

#fountainG_6{
	left:139px;
	animation-delay:1.35s;
		-o-animation-delay:1.35s;
		-ms-animation-delay:1.35s;
		-webkit-animation-delay:1.35s;
		-moz-animation-delay:1.35s;
}

#fountainG_7{
	left:166px;
	animation-delay:1.5s;
		-o-animation-delay:1.5s;
		-ms-animation-delay:1.5s;
		-webkit-animation-delay:1.5s;
		-moz-animation-delay:1.5s;
}

#fountainG_8{
	left:194px;
	animation-delay:1.64s;
		-o-animation-delay:1.64s;
		-ms-animation-delay:1.64s;
		-webkit-animation-delay:1.64s;
		-moz-animation-delay:1.64s;
}



@keyframes bounce_fountainG{
	0%{
	transform:scale(1);
		background-color:rgb(0,62,117);
	}

	100%{
	transform:scale(.3);
		background-color:rgb(93,177,247);
	}
}

@-o-keyframes bounce_fountainG{
	0%{
	-o-transform:scale(1);
		background-color:rgb(0,62,117);
	}

	100%{
	-o-transform:scale(.3);
		background-color:rgb(93,177,247);
	}
}

@-ms-keyframes bounce_fountainG{
	0%{
	-ms-transform:scale(1);
		background-color:rgb(0,62,117);
	}

	100%{
	-ms-transform:scale(.3);
		background-color:rgb(93,177,247);
	}
}

@-webkit-keyframes bounce_fountainG{
	0%{
	-webkit-transform:scale(1);
		background-color:rgb(0,62,117);
	}

	100%{
	-webkit-transform:scale(.3);
		background-color:rgb(93,177,247);
	}
}

@-moz-keyframes bounce_fountainG{
	0%{
	-moz-transform:scale(1);
		background-color:rgb(0,62,117);
	}

	100%{
	-moz-transform:scale(.3);
		background-color:rgb(93,177,247);
	}
}