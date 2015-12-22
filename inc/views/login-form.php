<div class="container">
	<form method="POST" action="" class="login_form">
		<div class="form-group">
			<input type="text" name="<?= LOGIN_FORM_USER; ?>" />
			<input type="password" name="<?= LOGIN_FORM_PASS; ?>" />
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