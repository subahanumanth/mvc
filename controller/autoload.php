<?php
spl_autoload_register(function ($className)
{
    $fileName = sprintf("%s/model/%s.php",$_SERVER['DOCUMENT_ROOT'], $className);
    if (file_exists($fileName))
    {
        require ($fileName);
    }
    else
    {
        echo sprintf("file not found  %s %s", $className, $fileName);
    }
});


