<?php 
require_once (__DIR__.'/../models/User.php');
require_once (__DIR__.'/../models/Report.php');

class AdminController extends BaseController {
    private $ReportModel ;

    public function __construct(){

        $this->ReportModel = new Report();

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
}