<?php
//Connect to the database
class Database {
    //This instance var is now available in the entire class
    public $connection; 
    //The construct will run as soon as a new instance of the DB class is called
    public function __construct($config) {

        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, 'root', 'root', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query) {
        $statement = $this->connection->prepare($query);
        
        $statement->execute();
        
        return $statement;
    }
}