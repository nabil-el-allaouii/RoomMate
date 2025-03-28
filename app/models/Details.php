<?php
require_once __DIR__."/../Config/db.php";
class Details {
    protected $user_id;
    protected $bio;
    protected $current_city;
    protected $budget;
    protected $room_type;
    protected $origin_city;
    protected $preferences;
    protected $education_year;
    protected $profile_pic;

    public function __construct( $user_id, $bio, $current_city, $budget, $room_type, $origin_city, $preferences, $education_year, $profile_pic,$from_date,$to_date) {
        $this->user_id = $user_id;
        $this->bio = $bio;
        $this->current_city = $current_city;
        $this->budget = $budget;
        $this->room_type = $room_type;
        $this->origin_city = $origin_city;
        $this->preferences = $preferences;
        $this->education_year = $education_year;
        $this->profile_pic = $profile_pic;
        $this->from_date = $from_date;
        $this->to_date = $to_date;

    }
    private function getDB() {
        return Database::getinstance()->getconn();
    }
    public function ajouterDetails() {
        $db = $this->getDB();
        $query = "INSERT INTO details (user_id, bio, current_city, budget, room_type, origin_city, preferences, education_year, profile_pic,from_date,to_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)";
        $stmt = $db->prepare($query);
        $stmt->execute([$this->user_id, $this->bio, $this->current_city, $this->budget, $this->room_type, $this->origin_city, $this->preferences, $this->education_year, $this->profile_pic, $this->from_date,$this->to_date]);
        return $db->lastInsertId();
    }
    public static function getUserDetails($user_id) {
        $db = Database::getinstance()->getconn();
        $query = "SELECT * FROM details WHERE user_id = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$user_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
    ?>
