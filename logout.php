<?php
use classes\session;
require_once '../classes/session.php';
$session = new session();
$session->forgetSession();
?>