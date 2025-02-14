<?php
require_once(__DIR__.'/../config/db.php');

class Message {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getconn();
    }

    public function sendMessage($conversation_id, $sender_id, $message) {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['conversation_id']) && isset($_POST['sender_id']) && isset($_POST['message'])) {
            $stmt = $this->db->prepare("INSERT INTO messages (conversation_id, sender_id, message) VALUES (:conversation_id, :sender_id, :message)");
            return $stmt->execute([
                'conversation_id' => $conversation_id,
                'sender_id' => $sender_id,
                'message' => $message
            ]);
        }
        return false;
    }
    public function getMessages($conversation_id) {
        $stmt = $this->db->prepare("SELECT * FROM messages WHERE conversation_id = :conversation_id ORDER BY created_at ASC");
        $stmt->execute(['conversation_id' => $conversation_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>