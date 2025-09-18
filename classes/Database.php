<?php

class Database
{
    private $db_host = DB_HOST;
    private $db_name = DB_NAME;
    private $db_username = DB_USERNAME;
    private $db_password = DB_PASSWORD;

    public $connection;

    public function getConnection()
    {
        $this->connection = null;

        try
        {
            $this->connection = new PDO("mysql:host=$this->db_host;dbname=$this->db_name;username=$this->db_username;", $this->db_username, $this->db_password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        catch(PDOException $exception)
        {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->connection;
    }
}