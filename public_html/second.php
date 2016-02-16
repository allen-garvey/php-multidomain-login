<?php

require_once('../inc/config.php');
authenticate();



include(LOGIN_VIEWS_PATH.'header.php');

echo "This is another page. This is a test to see if you'll get redirected back here after login";

include(LOGIN_VIEWS_PATH.'footer.php');
