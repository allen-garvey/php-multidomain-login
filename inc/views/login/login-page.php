<!DOCTYPE html>
<html>
<head>
	<title><?= APP_NAME ?> - Login</title>
	<style>
		*{
			box-sizing: border-box
		}
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
		.form-group.captcha{
			margin-top: 2em;
			display: flex;
			align-items: baseline;
		}
		.form-group.captcha label{
			flex-basis: 35%;
			font-size: 1.25em;
		}
		.form-group.captcha input{
			flex-grow: 1;
		}
		.form-group.captcha input::-webkit-input-placeholder {
		   text-align: center;
		}

		.form-group.captcha input:-moz-placeholder { /* Firefox 18- */
		   text-align: center;  
		}

		.form-group.captcha input::-moz-placeholder {  /* Firefox 19+ */
		   text-align: center;  
		}

		.form-group.captcha input:-ms-input-placeholder {  
		   text-align: center; 
		}
		button{
			cursor: pointer;
			margin-left: 3em;
			flex-basis: 6em;
			height: 1.85em;
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