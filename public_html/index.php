<?php

require_once('../inc/config.php');
AuthController::authenticate();

?>

<a href="<?= AuthController::LOGOUT_URL; ?>">Logout</a>
<p>Hello there! It looks like you're logged in</p>

