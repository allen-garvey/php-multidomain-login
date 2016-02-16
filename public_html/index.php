<?php

require_once('../inc/config.php');
authenticate();



include(LOGIN_VIEWS_PATH.'header.php');

echo "Hello there! It looks like you're logged in";

include(LOGIN_VIEWS_PATH.'footer.php');
