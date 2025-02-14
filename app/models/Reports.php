<?php
require_once(__DIR__.'/../config/db.php');

class Reports {
    private $conn;
    private $user_id;
    private $annonce_id;
    private $description;
    private $type;

    public function __construct()
    {
        $instance = Database::getinstance();
        $this->conn = $instance->getconn();
    }

    public function getReports()
    {
        $query = "SELECT * FROM reports";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $reports = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $reports;
    }

    public function confirmReport($id)
    {
        $query = "UPDATE reports SET status = 'resolved' WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['id' => $id]);
    }
    
    public function addReport($data)
    {
        $query = "INSERT INTO reports (user_id, description) VALUES (?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($data);
    }
}

