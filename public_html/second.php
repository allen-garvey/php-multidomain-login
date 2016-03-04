<?php

require_once('../inc/config.php');
authenticate();

?>

<a href="<?= LOGOUT_URL; ?>">Logout</a>
<p>This is another page. This is a test to see if you'll get redirected back here after login</p>
