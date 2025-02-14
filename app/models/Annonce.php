<?php
require_once __DIR__."/../Config/db.php";
class Annonce {
    protected $id;
    protected $user_id;
    protected $type;
    protected $status;
    protected $title;
    protected $description;
    protected $budget;
    protected $capacity;
    protected $room_type;
    protected $city;
    protected $preferences;
    protected $from_date;
    protected $to_date;
    protected $created_at;

    public function __construct( $user_id, $type, $status, $title, $description, $budget, $capacity, $room_type, $city, $preferences, $from_date, $to_date) {
        $this->user_id = $user_id;
        $this->type = $type;
        $this->status = $status;
        $this->title = $title;
        $this->description = $description;
        $this->budget = $budget;
        $this->capacity = $capacity;
        $this->room_type = $room_type;
        $this->city = $city;
        $this->preferences = $preferences;
        $this->from_date = $from_date;
        $this->to_date = $to_date;
    }
    private function getDB() {
        return Database::getinstance()->getconn();
    }


    public function ajouterAnnonce() {
        $db = $this->getDB();
        $query = "INSERT INTO annonces (user_id, type, status, title, description, budget, capacity, room_type, city, preferences, from_date, to_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->execute([$this->user_id, $this->type, $this->status, $this->title, $this->description, $this->budget, $this->capacity, $this->room_type, $this->city, $this->preferences, $this->from_date, $this->to_date]);
        return $db->lastInsertId();
    }

    public static function supprimerAnnonce($id) {
        $db = Database::getinstance()->getconn(); 
        $query = "DELETE FROM annonces WHERE id = ?";
        $stmt = $db->prepare($query);
        return $stmt->execute([$id]);
    }
    public static function getAllAnnonces(){
        $db = Database::getinstance()->getconn(); 
        $query = "SELECT * FROM annonces"; 
        $stmt = $db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function getAllMyAnnonces(){
        $user_id = $_SESSION['user_id'];
        $db = Database::getinstance()->getconn(); 
        $query = "SELECT * FROM annonces where user_id=$user_id";
        $stmt = $db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function ajouterPicAnnonce($annonce_id,$fileDestination) {
        $db = $this->getDB();
        $query = "INSERT INTO annonce_photos (annonce_id, photo) VALUES (?, ?)";
        $stmt = $db->prepare($query);
        $stmt->execute([$annonce_id, $fileDestination]);
    }



}
        
    





