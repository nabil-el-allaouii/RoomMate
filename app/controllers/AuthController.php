<?php
require_once(__DIR__ . '/../models/User.php');
require_once(__DIR__ . '/../models/Admin.php');
class AuthController extends BaseController
{

    private $UserModel;
    private $AdminModel;
    public function __construct()
    {

        $this->UserModel = new User();
        $this->AdminModel = new Admin();
    }

    public function showRegister()
    {

        $this->render('auth/register');
    }
    public function showleLogin()
    {

        $this->render('auth/login');
    }

    public function handleRegister()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['signup'])) {
                $name = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $user = [$name, $hashed_password, $email];

                $lastInsertedId = $this->UserModel->register($user);
                exit;
            }
        }
    }
    public function handleLogin()
    {


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['login'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $userData = [$email, $password];
                $user = $this->UserModel->login($userData);
                extract($user);
                
                if($info ){
                    $_SESSION['user_id'] = $info["id"];
                    $_SESSION['username'] = $info['name'];
                    $_SESSION['role'] = $info['role'];
                    $_SESSION['status'] = $info["status"];
                    if($Checked["count"] === 0){
                        header("location: /details");
                    }else{
                        header("location: /recherche");
                    }
                }
             }
        }
    }

    public function logout()
    {


        // if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["logout"])) {
        //  var_dump($_SESSION);die();
        if (isset($_SESSION['user_loged_in_id']) && isset($_SESSION['user_loged_in_role'])) {
            unset($_SESSION['user_loged_in_id']);
            unset($_SESSION['user_loged_in_role']);
            session_destroy();

            header("Location: /login");
            exit;
        }
        //   }
    }

    public function forgotPassword() {
        $email = htmlspecialchars($_POST['email']);
        $user = $this->UserModel->getUserByEmail($email);
        if ($user) {
          $this->AdminModel->forgotPassword($email);
        }
        header('Location: /login');
        exit();
    }
}
