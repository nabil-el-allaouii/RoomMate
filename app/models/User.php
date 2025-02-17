<?php
require_once(__DIR__ . '/../config/db.php');
class User
{
    private $user_id;
    private $conn;

    public function __construct($user_id = "")
    {
        $instance = Database::getinstance();
        $this->conn = $instance->getconn();
        $this->user_id = $user_id;
    }

    public function register($user)
    {

        try {
            // Prepare and execute the insertion query
            $result = $this->conn->prepare("INSERT INTO users (name, password, email) VALUES (?, ?, ?)");
            $result->execute($user);
            return $this->conn->lastInsertId();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function login($userData)
    {
        $InfoAndCheck = [];
        try {
            $result = $this->conn->prepare("SELECT * FROM users WHERE email=?");
            $result->execute([$userData[0]]);
            $user = $result->fetch(PDO::FETCH_ASSOC);
            if ($user && password_verify($userData[1], $user["password"])) {
                $check = $this->conn->prepare("SELECT count(id) as count from details where user_id = ?");
                $check->execute([$user['id']]);
                $HasDetails = $check->fetch(PDO::FETCH_ASSOC);
                $InfoAndCheck["Checked"] = $HasDetails;
                $InfoAndCheck["info"] = $user;
                return  $InfoAndCheck;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function verifyToken($token, $userId)
    {
        try {
            $verify = $this->conn->prepare("UPDATE users SET token = ? WHERE id = ?");
            $verify->execute([$token, $userId]);
            return self::getEmail($userId);
        } catch (PDOException $e) {
            echo "Error " . $e->getMessage();
        }
    }

    public function getEmail($id)
    {
        $email = $this->conn->prepare("SELECT email from users where id = ?");
        $email->execute([$id]);
        $result = $email->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['email'] : null;
    }
    public function GetVerified($token, $id)
    {
        try {
            $Verified = $this->conn->prepare("UPDATE users set status = 'active' where token = ? and id = ?");
            $Verified->execute([$token, $id]);
            return true;
        } catch (PDOException $e) {
            echo "Error " . $e->getMessage();
        }
    }
}
