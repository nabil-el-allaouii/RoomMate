<?php
require_once(__DIR__.'/../config/db.php');

class Rapports {
    private $conn;
    private $categories ;

    public function __construct()
    {
        $instance = Database::getinstance();
        $this->conn = $instance->getconn();
    }

    public function getRapports()
    {
        $query = "SELECT * FROM reports";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

