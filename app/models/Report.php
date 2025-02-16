<?php
require_once(__DIR__.'/../config/db.php');

class Report {
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
        try {
            $query = "SELECT * FROM reports WHERE status = 'pending'";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    } 

    public function confirmReport($id)
    {
        try {
            $query = "UPDATE reports SET status = 'resolved' WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->execute(['id' => $id]);
            return true;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function addReport($data)
    {
        try {
            $query = "INSERT INTO reports (user_id, description) VALUES (?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute($data);
            return true;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

