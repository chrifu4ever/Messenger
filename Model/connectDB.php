<?php



class ConnectDB
{
    public function connect()
    {

        $sql = new mysqli("127.0.0.1", "messenger", "ZYCDPzlg05cGkHM9", "messenger");
        mysqli_set_charset($sql,"utf8");
        if ($sql->connect_errno) {
            echo "Failed to connect to MySQL: (" . $sql->connect_errno . ") " . $sql->connect_error;
        }

       return $sql;
    }
}

?>
