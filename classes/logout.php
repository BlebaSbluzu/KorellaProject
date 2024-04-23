<?php

use classes\session;

require_once 'session.php';
    $session = new session();
    $session->forgetSession();
?>