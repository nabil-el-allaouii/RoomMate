<?php 

class HomeController extends BaseController {


   public function index() {
      // var_dump($_SESSION['user_loged_in_id']);die();
      if(!isset($_SESSION['user_loged_in_id'])){
         header("Location: /login ");
         exit;
      }
    $this->renderDashboard('admin/index');
   }

   public function showAddAnnonce() {
      
      $this->render('user/addAnnonce');
     }

   public function showProfile() {
      
      $this->render('/profil');
     }
     
     public function ShowHome(){
         $this->render('/index');
     }
     
     public function showChat(){
        $this->render('user/chat');
     }
}