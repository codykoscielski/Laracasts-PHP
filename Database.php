<?php
//Connect to the database
class Database {
    //This instance varaibal is now available in the entire class
    public $connection; 
    //The construct will run as soon as a new instance of the DB class is called
    public function __construct() {
        $dns = 'mysql:host=localhost;port=3306;dbname=php-demo;charset=utf8mb4';
        $this->connection = new PDO($dns, 'root', 'root'); 
    }

    public function query($query) {
        $statement = $this->connection->prepare($query);
        
        $statement->execute();
        
        return $statement;
    }
}