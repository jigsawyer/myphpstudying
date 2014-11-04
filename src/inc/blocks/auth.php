<?php
 /**
 * Myproject
 *
 * @category  Myproject
 * @package   Myproject_${MODULE_NAME}
 * @author    Andrii Khovaiev <ankho@smile.fr>
 * @copyright 2014 Smile
 */
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo "poshel nahuj";
    exit;
} else {
    echo 'privet '.$_SERVER['PHP_AUTH_USER'];
    echo 'parol '.$_SERVER['PHP_AUTH_PW'];
    $req = Registry::instance();
    $req->setRequest(new Request('sdasd'));
}