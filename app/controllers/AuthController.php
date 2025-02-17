<?php
require_once(__DIR__ . '/../models/User.php');
require_once "../core/Mailer.php";
class AuthController extends BaseController
{

    private $UserModel;
    public function __construct()
    {

        $this->UserModel = new User();
    }
    public function showVerify(){
        $this->render('/verify');
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
                $verifyToken = md5(rand());
                $body = "
                Hello,
                
                Thank you for signing up. Please use the verification code below to verify your email:
                
                Verification Code: **$verifyToken**
                
                Or click the link below to verify your email:";

                $user = [$name, $hashed_password, $email];

                $lastInsertedId = $this->UserModel->register($user);
                if($lastInsertedId){
                    $Attach = $this->UserModel->verifyToken($verifyToken , $lastInsertedId);
                    $send = new Mailer;
                    $send->sendEmail($Attach , "Verify Your Email", $body);
                    header("location: /verify/{$lastInsertedId}");
                }
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

    public function handleVerify($id){
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $Verify = $_POST["verification"];
            $GetVerified = $this->UserModel->GetVerified($Verify , $id);
            if($GetVerified){
                header("location: /profile");
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
}
