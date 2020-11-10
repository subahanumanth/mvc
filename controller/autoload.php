<?php

spl_autoload_register(function ($className) {
    $fileName = "./model/".$className.".php";
    if(file_exists($fileName)) {
        require($fileName);
    } else {
        echo "file not found";
    }
});
