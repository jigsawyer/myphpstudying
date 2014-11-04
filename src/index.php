<?php
include "inc/App.php";
include "inc/blocks/cookie.php";
$regi = Registry::instance();
print_r($regi->get('counter'));