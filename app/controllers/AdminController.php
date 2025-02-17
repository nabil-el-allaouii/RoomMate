<?php 
require_once (__DIR__.'/../models/User.php');
require_once (__DIR__.'/../models/Report.php');

class AdminController extends BaseController {
    private $ReportModel ;
    private $UserModel;

    public function __construct(){

        $this->ReportModel = new Report();
        $this->UserModel = new User();

     }

   public function showReports() {
    $reports = $this->ReportModel->getReports();
    $this->render('admin/reports', ["reports" => $reports]);
   }

   public function showForgotPassword () {
    $this->render('admin/reset_password');
   }

   public function deleteUser($id) {
    $this->UserModel->deleteUser($id);
    header('Location: /admin/users');
    exit();
   }

   public function deleteReport() {
    $id = htmlspecialchars($_POST['report_id']);
    $this->ReportModel->deleteReport($id);
    header('Location: /admin/reports');
    exit();
   }

   public function banUser() {
    $id = htmlspecialchars($_POST['reporter_id']) ?? htmlspecialchars($_POST['reported_id']);
    $ban =$this->UserModel->banUser($id);
    if ($ban) {
      $this->ReportModel->confirmReport($id);
    }
    header('Location: /admin/reports');
    exit();
   }   
}