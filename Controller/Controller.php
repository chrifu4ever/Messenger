<?php
/**
 * Created by PhpStorm.
 * User: Romino
 * Date: 10.03.2018
 * Time: 16:21
 */
require ("Model/Database.php");

class Controller
{

    function createUser ($userName, $userPassword)
    {
        $database = new Database();
        $dbElement = $database->createUserInDatabase($userName,$userPassword);
        echo $dbElement->fetch_field()->userName;
    }






}