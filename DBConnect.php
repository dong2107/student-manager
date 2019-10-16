<?php

class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct($dsn, $username, $password)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
    }

    public function connect()
    {
        $conn = null;
        try {
            $conn = new PDO($this->dsn, $this->username, $this->password);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
        return $conn;
    }
}