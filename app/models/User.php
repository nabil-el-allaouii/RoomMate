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
    


    public function banUser($id) {
        try {
            $query = "UPDATE users SET status = 'banned' WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$id]);
            return true;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function unbanUser($id) {
        try {
            $query = "UPDATE users SET status = 'active' WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$id]);
            return true;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getUserByEmail($email) {
        try {
            $query = "SELECT * FROM users WHERE email = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$email]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die($e->getMessage());  
        }
    }

    public function getAllUsers() {
        try {
            $sql = "SELECT * FROM users WHERE role = 'user'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die( 'error getting all users: ' . $e->getMessage());
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
