<?php
function autoload($className) {
    $file = 'classes/' . $className . '.php';
    if (is_file($file)) {
        require_once $file;
    }
}
spl_autoload_register('autoload');
