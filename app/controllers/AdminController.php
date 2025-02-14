<?php 
require_once (__DIR__.'/../models/User.php');
require_once (__DIR__.'/../models/rapports.php');

class AdminController extends BaseController {
    private $RapportsModel ;

    public function __construct(){

        $this->RapportsModel = new Rapports();

     }

   public function Raports() {
    $rapports = $this->RapportsModel->getRapports();
    $this->renderDashboard('admin/raports', ["rapports" => $rapports]);
   }

   public function deleteUser($id) {
    $this->UserModel->deleteUser($id);
    header('Location: /admin/users');
    exit();
   }
}