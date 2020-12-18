<?php
    function getConnection() {
        $host = "localhost";
        $username = "root";
        $password = "";
        $nameDB = "webshop";
        $conn = null;
        try {
            $conn = new PDO("mysql:host=$host;dbname=$nameDB", $username, $password);
            return $conn;
        } catch (Exception $e) {
           $e->getMessage();
        }
        return $conn;
    }
?>