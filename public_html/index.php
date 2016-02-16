<?php

require_once('../inc/config.php');
authenticate();



include(VIEWS_PATH.'header.php');

echo "Hello there! It looks like you're logged in";

include(VIEWS_PATH.'footer.php');
