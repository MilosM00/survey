<?php

class User
{
    private $connection;
    private $table = "user";

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->getConnection();
    }
}