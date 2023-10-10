<?php

class Database
{
    private $host = 'localhost:3307';
    private $user = 'root';
    private $password = '12345678';
    private $dbName = 'music_world_db';

    protected function connect()
    {
        $db = new mysqli($this->host, $this->user, $this->password, $this->dbName);
        if ($db->connect_error) {
            die("Connection error: " . $db->connect_error);
        }
        return $db;
    }
}
