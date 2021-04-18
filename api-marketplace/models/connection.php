<?php

class Connection
{

    public static function connect()
    {

        try {

            $link = new PDO("mysql:host=localhost;dbname=marketplace", "root", "123");

            $link->exec("set names utf8");

        } catch (PDOException $e) {

            die("Error: " . $e->getMessage());

        }

        return $link;

    }

}
