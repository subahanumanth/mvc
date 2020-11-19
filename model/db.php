<?php

class db
{
    public function connection()
    {
        $conn = mysqli_connect("localhost", "hanu", "1234", "profile");
        return $conn;
    }
    public function close($conn)
    {
        return mysqli_close($conn);
    }
}

?>
