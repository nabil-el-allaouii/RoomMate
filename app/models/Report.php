<?php
require_once(__DIR__.'/../config/db.php');

class Report {
    private $conn;
    private $reporter_id;
    private $reported_id;
    private $annonce_id;
    private $description;
    private $type;

    public function __construct()
    {
        $instance = Database::getinstance();
        $this->conn = $instance->getconn();
    }

    public function setReport($annonce_id, $reporter_id, $reported_id, $description, $type)
    {
        $this->annonce_id = $annonce_id;
        $this->reporter_id = $reporter_id;
        $this->reported_id = $reported_id;
        $this->description = $description;
        $this->type = $type;
    }

    public function getReports()
    {
        try {
            $query = "SELECT r.*, u.name as reporter_name, u2.name as reported_name, a.title as annonce_title FROM reports r
            INNER JOIN users u ON r.reporter_id = u.id
            INNER JOIN users u2 ON r.reported_id = u2.id
            INNER JOIN annonces a ON r.annonce_id = a.id WHERE r.status = 'pending'";

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
    
    public function addReport()
    {
        try {
            $query = "INSERT INTO reports (annonce_id, reporter_id, reported_id, description, type) VALUES (:annonce_id, :reporter_id, :reported_id, :description, :type)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute(['annonce_id' => $this->annonce_id, 'reporter_id' => $this->reporter_id, 'reported_id' => $this->reported_id, 'description' => $this->description, 'type' => $this->type]);
            return true;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

