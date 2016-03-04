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
		<?php //bootstrap buttons ?>
		.btn {
		  display: inline-block;
		  padding: 6px 12px;
		  margin-bottom: 0;
		  font-size: 14px;
		  font-weight: normal;
		  line-height: 1.42857143;
		  text-align: center;
		  white-space: nowrap;
		  vertical-align: middle;
		  -ms-touch-action: manipulation;
		      touch-action: manipulation;
		  cursor: pointer;
		  -webkit-user-select: none;
		     -moz-user-select: none;
		      -ms-user-select: none;
		          user-select: none;
		  background-image: none;
		  border: 1px solid transparent;
		  border-radius: 4px;
		}
		.btn:focus,
		.btn:active:focus,
		.btn.active:focus,
		.btn.focus,
		.btn:active.focus,
		.btn.active.focus {
		  outline: thin dotted;
		  outline: 5px auto -webkit-focus-ring-color;
		  outline-offset: -2px;
		}
		.btn:hover,
		.btn:focus,
		.btn.focus {
		  color: #333;
		  text-decoration: none;
		}
		.btn:active,
		.btn.active {
		  background-image: none;
		  outline: 0;
		  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
		          box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
		}

		.btn-primary {
		  color: #fff;
		  background-color: #337ab7;
		  border-color: #2e6da4;
		}
		.btn-primary:focus,
		.btn-primary.focus {
		  color: #fff;
		  background-color: #286090;
		  border-color: #122b40;
		}
		.btn-primary:hover {
		  color: #fff;
		  background-color: #286090;
		  border-color: #204d74;
		}
		.btn-primary:active,
		.btn-primary.active,
		.open > .dropdown-toggle.btn-primary {
		  color: #fff;
		  background-color: #286090;
		  border-color: #204d74;
		}
		.btn-primary:active:hover,
		.btn-primary.active:hover,
		.open > .dropdown-toggle.btn-primary:hover,
		.btn-primary:active:focus,
		.btn-primary.active:focus,
		.open > .dropdown-toggle.btn-primary:focus,
		.btn-primary:active.focus,
		.btn-primary.active.focus,
		.open > .dropdown-toggle.btn-primary.focus {
		  color: #fff;
		  background-color: #204d74;
		  border-color: #122b40;
		}
		.btn-primary:active,
		.btn-primary.active,
		.open > .dropdown-toggle.btn-primary {
		  background-image: none;
		}
		<?php //bootstrap default theme buttons ?>
		.btn-default,
		.btn-primary,
		.btn-success,
		.btn-info,
		.btn-warning,
		.btn-danger {
		  text-shadow: 0 -1px 0 rgba(0, 0, 0, .2);
		  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .15), 0 1px 1px rgba(0, 0, 0, .075);
		          box-shadow: inset 0 1px 0 rgba(255, 255, 255, .15), 0 1px 1px rgba(0, 0, 0, .075);
		}
		.btn-default:active,
		.btn-primary:active,
		.btn-success:active,
		.btn-info:active,
		.btn-warning:active,
		.btn-danger:active,
		.btn-default.active,
		.btn-primary.active,
		.btn-success.active,
		.btn-info.active,
		.btn-warning.active,
		.btn-danger.active {
		  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
		          box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
		}
		.btn:active,
		.btn.active {
		  background-image: none;
		}
		.btn-primary {
		  background-image: -webkit-linear-gradient(top, #337ab7 0%, #265a88 100%);
		  background-image:      -o-linear-gradient(top, #337ab7 0%, #265a88 100%);
		  background-image: -webkit-gradient(linear, left top, left bottom, from(#337ab7), to(#265a88));
		  background-image:         linear-gradient(to bottom, #337ab7 0%, #265a88 100%);
		  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff337ab7', endColorstr='#ff265a88', GradientType=0);
		  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
		  background-repeat: repeat-x;
		  border-color: #245580;
		}
		.btn-primary:hover,
		.btn-primary:focus {
		  background-color: #265a88;
		  background-position: 0 -15px;
		}
		.btn-primary:active,
		.btn-primary.active {
		  background-color: #265a88;
		  border-color: #245580;
		}
	</style>
</head>
<body>
	<?php include(LOGIN_VIEWS_PATH.'login-form.php'); ?>
</body>
</html>