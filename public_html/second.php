<?php

require_once('../inc/config.php');
authenticate();



include(VIEWS_PATH.'header.php');

echo "This is another page. This is a test to see if you'll get redirected back here after login";

include(VIEWS_PATH.'footer.php');
