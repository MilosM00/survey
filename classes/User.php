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

    public function userRegister($username, $password, $confirm_password)
    {
        if($password == $confirm_password)
        {
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            $query = "INSERT INTO " . $this->table . " (user_username, user_password) VALUES(:username, :password)";
            $stmt = $this->connection->prepare($query);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $hashed_password);
            $stmt->execute();

            header("location:login.php");
            exit;
        }

        else
        {
            header("location:register.php");
            exit;
        }
    }

    public function userLogin($username, $password)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE user_username = :username";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_OBJ);

        if($user && password_verify($password, $user->user_password))
        {
            $_SESSION["logged_in"] = true;

            header("location:dashboard.php");
            exit;
        }
    }
}