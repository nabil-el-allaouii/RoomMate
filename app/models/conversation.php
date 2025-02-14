<?php
require_once(__DIR__.'/../config/db.php');

class Conversation {
    private $db;

    public function __construct() {
        $instance = Database::getinstance();
        $this->db = $instance->getconn();    
    }

    public function createConversation($user_one, $user_two) {
            $stmt = $this->db->prepare("INSERT INTO conversations (user_one, user_two) VALUES (:user_one, :user_two)");
            return $stmt->execute(['user_one' => $user_one, 'user_two' => $user_two]);
    }

    public function getConversations($user_id){
            $stmt = $this->db->prepare("SELECT * FROM conversations WHERE user_one = :user_id OR user_two = :user_id");
            $stmt->execute(['user_id' => $user_id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>