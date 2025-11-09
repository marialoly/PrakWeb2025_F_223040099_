<?php
spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class);
    $file = __DIR__ . '/' . $path . '.php';
    if (file_exists($file)) {
        require_once $file;
    } else {
        echo "File tidak ditemukan: $file <br>";
    }
});
?>
