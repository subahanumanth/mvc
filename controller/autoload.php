<?php
spl_autoload_register(function ($className)
{
    $fileName = $_SERVER['DOCUMENT_ROOT'] . "/model/" . $className . ".php";
    if (file_exists($fileName))
    {
        require ($fileName);
    }
    else
    {
        echo "file not found  " . $className . "  " . $fileName . "<br>";
    }
});


