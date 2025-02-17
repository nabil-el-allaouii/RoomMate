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
        if(isset($_POST['sendbutton'])){
            $user_one = $_SESSION['user_id'];
            $user_two = $_POST['receiver_id'];
            return $this->conversation->createConversation($user_one, $user_two);
        }
    }

    public function getConversations($user_id) {
        
        $conversations = $this->conversation->getConversations($user_id);

        return $conversations;
    }

    public function sendMessage() {
        $conversation_id = $_POST['conversation_id'];
        $sender_id = $_POST['sender_id'];
        $message = $_POST['message'];
        $receiver_id = $_POST['receiver_id'];
        $this->message->sendMessage($conversation_id, $sender_id, $message);
        header('Location: /chat/'.$receiver_id);
        exit();
    }   
    

    public function getMessages($conversation_id) {
        $messages = $this->message->getMessages($conversation_id);
        return $messages;
    }

    // public function showChat($user_id){
    //     $conversations = $this->getConversations($user_id);
    //     $this->render('user/chat', ['conversations' => $conversations]);
    // }

    public function showMessage(){
        $conversation_id = $this->getConversationId($_GET['mate_id'], $_GET['my_id']);
        $messages = $this->getMessages($conversation_id);
        $this->renderMessage('user/chat', ['conversations' => $messages]);
    }

    public function showChat($user_id){
        $my_id = $_SESSION['user_id'];
        $conversation_id = $this->getConversationId($my_id, $user_id);
        $messages = $this->getMessages($conversation_id);
        $conversations = $this->getConversations($my_id);
        // var_dump($conversations);
        // die();
        $this->renderUser('chat', ['conversations' => $messages, 'info' => $conversations]);
    }

    public function getConversationId($mate_id, $my_id) {
        $conversation_id = $this->conversation->getConversationId($mate_id, $my_id);
        return $conversation_id;
    }

}
