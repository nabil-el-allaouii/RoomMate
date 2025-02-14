<?php
require_once(__DIR__.'/../config/db.php');

class Rapports {
    private $conn;

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
        $rapports = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rapports;
    }

    public function confirmRapport($id)
    {
        $query = "UPDATE reports SET status = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
    }
    
    public function ajouterRapport($data)
    {
        $query = "INSERT INTO reports (user_id, description, status) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($data);
    }

    public function anulationRapport($id)
    {
        $query = "UPDATE reports SET status = 'resolved' WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
    }
}

