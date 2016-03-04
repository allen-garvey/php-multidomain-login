<!DOCTYPE html>
<html>
<head>
	<title><?= APP_NAME ?> - Login</title>
	<style>
		html,body{
			margin: 0;
			font-family: Helvetica, Arial, sans-serif;
		}
		.header_title{
			text-align: center;
			margin: 0;
		}
		.container{
			max-width: 40em;
			margin: 12em auto 0;
		}
		.login_form{
			background-color: #ccc;
			padding: 3em;
			border-radius: 5px;
		}
		input,button{
			font-size: 1.2em;
		}
		input{
			display: block;
			width: 25em;
			max-width: 100%;
			padding: 0.25em 0.1em;
			margin-bottom: 1em;
		}
		button{
			float: right;
			cursor: pointer;
		}
		.legal{
			text-align: center;
		}
	</style>
</head>
<body>
	<?php include(LOGIN_VIEWS_PATH.'login-form.php'); ?>
</body>
</html>