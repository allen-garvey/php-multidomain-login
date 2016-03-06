<!DOCTYPE html>
<html>
<head>
	<title><?= APP_NAME ?> - Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
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
		.alert{
			text-align: center;
		}
		.container{
			max-width: 40em;
			margin: 6em auto;
		}
		.login_form{
			background-color: #ccc;
			padding: 3em;
			border-radius: 5px;
		}
		input{
			font-size: 1.2em;
		}
		input{
			display: block;
			width: 25em;
			max-width: 100%;
			padding: 0.25em 0.1em;
			margin-bottom: 1em;
		}
		@media screen and (min-width: 700px){
			.form-group.captcha{
				display: flex;
			}
			.form-group.captcha .btn{
				margin-left: 3em;
			}
		}
		.form-group.captcha{
			margin-top: 2em;
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
		.form-group.captcha .btn{
			cursor: pointer;
			flex-basis: 6em;
			font-size: 1em;
		}
		.legal{
			text-align: center;
		}
		
	</style>
</head>
<body>
	<div class="container">
		<?php if(!empty($flash)): ?>
			<div class="alert alert-<?= $flash['class']; ?>" role="alert">
				<?= $flash['message']; ?>
			</div>
		<?php endif; ?>
		<?php include(LOGIN_VIEWS_PATH.'login-form.php'); ?>
	</div>
</body>
</html>





