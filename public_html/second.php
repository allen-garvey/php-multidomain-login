<?php

require_once('../inc/config.php');
AuthController::authenticate();

?>

<a href="<?= AuthController::LOGOUT_URL; ?>">Logout</a>
<p>This is another page. This is a test to see if you'll get redirected back here after login</p>
