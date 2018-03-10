<?php
/**
 * Created by PhpStorm.
 * User: Romino
 * Date: 10.03.2018
 * Time: 16:26
 */
require("connectDB.php");




class Database
{
    function sendQuery ($query){
        $db = new ConnectDB();
        $result = $db->connect()->query($query);
        return $result;



    }

    function createUserInDatabase ($username, $password)
    {
        $query = "INSERT INTO Users (userName, userPw) VALUES ('$username', '$password')";
        return $this->sendQuery($query);
    }


}