<?php
require_once(__DIR__.'/../models/conversation.php');
require_once(__DIR__.'/../models/Messages.php');

class ChatController extends BaseController {
    private $conversation;
    private $message;

    public function __construct() {
        $this->conversation = new Conversation();
        $this->message = new Message();
    }

    public function startConversation($user_one, $user_two) {
        return $this->conversation->createConversation($user_one, $user_two);
    }

    public function getConversations($user_id) {
        $conversations = $this->conversation->getConversations($user_id);
        return $conversations;
    }

    public function sendMessage($conversation_id, $sender_id, $message) {
        return $this->message->sendMessage($conversation_id, $sender_id, $message);
    }   
    
    public function getMessages($conversation_id) {
        return $this->message->getMessages($conversation_id);
    }

    public function showChat(){
        $conversations = $this->getConversations($_SESSION['user_id']);
        $this->render('user/chat', ['conversations' => $conversations]);
     }

}