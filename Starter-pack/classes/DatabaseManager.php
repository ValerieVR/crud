<?php

// This class will manage the connection to the database
// It will be passed on the other classes who need it
class DatabaseManager{
    // These are private: only this class needs them
    private $host;
    private $name;
    private $password;
    // This one is public, so we can use it outside of this class
    // We could also use a private variable and a getter (but let's not make things too complicated at this point)
    public $database;

    public function __construct(string $host, string $name, string $password){
        $this->host = $host;
        $this->name = $name;
        $this->password = $password;
    }

    public function connect(){
        $this->database = "books";
        try {
            $connection = new PDO("mysql:host={$this->host};dbname={$this->database}",$this->name,$this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (PDOException $exception) {
            echo "Connection failed: " . $exception->getMessage();
        }
    }
}