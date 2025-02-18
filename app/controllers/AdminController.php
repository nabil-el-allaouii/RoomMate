<?php
require_once(__DIR__ . '/../models/User.php');

require_once(__DIR__ . '/../models/Report.php');
require_once(__DIR__ . '/../models/Admin.php');
require_once(__DIR__ . '/../../core/Mailer.php');


class AdminController extends BaseController
{
  private $ReportModel;
  private $UserModel;
  private $AdminModel;
  private $Mailer;

  public function __construct()
  {
    if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== "admin") {
      header('Location: /login');
      exit();
    }

    $this->ReportModel = new Report();
    $this->UserModel = new User();
    $this->AdminModel = new Admin();
    $this->Mailer = new Mailer();
  }

  public function showReports()
  {
    $reports = $this->ReportModel->getReports();
    $this->render('admin/reports', ["reports" => $reports]);
  }

  public function showForgotPassword()
  {
    $requests = $this->AdminModel->getRequests();
    $this->render('admin/reset_password', ["requests" => $requests]);
  }

  public function deleteUser($id)
  {
    $this->UserModel->deleteUser($id);
    header('Location: /admin/users');
    exit();
  }

  public function deleteReport()
  {
    $id = htmlspecialchars($_POST['report_id']);
    $this->ReportModel->deleteReport($id);
    header('Location: /admin/reports');
    exit();
  }

  public function banUser()
  {
    if (isset($_POST['reporter_id'])) {
      $id = htmlspecialchars($_POST['reporter_id']);
    } else {
      $id = htmlspecialchars($_POST['reported_id']);
    }

    $annonce_id = htmlspecialchars($_POST['id']);
    $ban = $this->UserModel->banUser($id);
    if ($ban) {
      $this->ReportModel->confirmReport($annonce_id);
    }
    header('Location: /admin/reports');
    exit();
  }


  public function resetPassword()
  {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $reset = $this->AdminModel->resetPassword($email, $password);
    $subject = "Password Reset";
    $body = "<p>Your password has been reset to: <b>" . $password . "</b></p>";
    if ($reset) {
      $this->Mailer->sendEmail("maileryoucode@gmail.com", $subject, $body);
      $this->AdminModel->deleteRequest($email);
    } else {
      die("Error resetting password");
    }
    header('Location: /admin/reset_password');
    exit();
  }
}
