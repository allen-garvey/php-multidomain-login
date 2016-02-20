<div class="container">
	<div class="login_form">
		<h1 class="header_title"><?= APP_NAME ?></h1>
		<form method="POST" action="" class="login_form">
			<div class="form-group">
				<label for="<?= LOGIN_FORM_USER; ?>">Username</label>
				<input type="text" placeholder="Username" id="<?= LOGIN_FORM_USER; ?>" name="<?= LOGIN_FORM_USER; ?>" autofocus="autofocus" />
				<label for="<?= LOGIN_FORM_PASS; ?>">Password</label>
				<input type="password" placeholder="Password" id="<?= LOGIN_FORM_PASS; ?>" name="<?= LOGIN_FORM_PASS; ?>" />
				<label for="<?= LOGIN_FORM_CAPTCHA; ?>"><?= $captcha_text; ?></label>
				<input type="number" placeholder="?" id="<?= LOGIN_FORM_CAPTCHA; ?>" name="<?= LOGIN_FORM_CAPTCHA; ?>" />
				<button type="submit">Login</button>
			</div>
			<div class="form-errors">
				<?php 
					if (isset($form_errors)) {
						echo $form_errors;
					}
				?>
			</div>
		</form>
	</div>
</div>