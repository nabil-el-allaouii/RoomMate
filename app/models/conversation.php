<?php
require_once(__DIR__.'/../config/db.php');

class Conversation {
    private $db;

    public function __construct() {
        $instance = Database::getinstance();
        $this->db = $instance->getconn();    
    }
    // check if the conversation already exists
    public function isConversationExists($user_one, $user_two): bool {
        $stmt = $this->db->prepare("
            SELECT id FROM conversations 
            WHERE (user_one = :user_one AND user_two = :user_two) 
            OR (user_one = :user_two AND user_two = :user_one)
        ");
        $stmt->execute(['user_one' => $user_one, 'user_two' => $user_two]);
        return $stmt->fetch(PDO::FETCH_ASSOC) ? true : false;
    }
    
    public function createConversation($user_one, $user_two) {
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['chatbtn'])) {
            if ($this->isConversationExists($user_one, $user_two)) {
                return "La conversation existe déjà";
            }
            
            $stmt = $this->db->prepare("INSERT INTO conversations (user_one, user_two) VALUES (:user_one, :user_two)");
            $stmt->execute(['user_one' => $user_one, 'user_two' => $user_two]);
            
            return $this->db->lastInsertId();
        }
    }
    

    public function getConversations($user_id){
            $stmt = $this->db->prepare("SELECT c.*, u.name as name_receiver , d.profile_pic as photo_profil 
                                        FROM conversations c 
                                        INNER JOIN users u ON c.user_two = u.id
                                        INNER JOIN details d ON u.id = d.user_id
                                        WHERE c.user_one = :user_id OR c.user_two = :user_id;");
            $stmt->execute(['user_id' => $user_id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getConversationId($mate_id, $my_id){
        $stmt = $this->db->prepare("SELECT id FROM conversations WHERE (user_one = :mate_id AND user_two = :my_id) OR (user_one = :my_id AND user_two = :mate_id)");
        $stmt->execute(['mate_id' => $mate_id, 'my_id' => $my_id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['id'] : false;
    }


}
?>