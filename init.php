<?php

use myPHPNotes\LinkedIn;

require_once "LinkedIn.php";

$app_id = "78kgzmt3tvmwy0";
$app_secret = "FzupODRi4goWnDtT";
$callback = "http://localhost/linkedinsearch/";
$scopes = "r_emailaddress r_basicprofile r_liteprofile";
$ssl = false; //TRUE FOR PRODUCTION ENV.

$linkedin = new LinkedIn($app_id, $app_secret, $callback, $scopes, $ssl);