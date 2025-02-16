<?php

class Admin extends User {

    private $conn;

    public function __construct() {
        $instance = Database::getinstance();
        $this->conn = $instance->getconn();
    }

    public function forgotPassword($email) {
        try {
            $sql = "SELECT * FROM users WHERE email = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                $sql = "INSERT INTO reset_pass (email) VALUES (?)";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute([$email]);
                return true;
            }
            return false;
        } catch (PDOException $e) {
            // echo "Error: " . $e->getMessage();
            die( 'error inserting email pass: ' . $e->getMessage());
        }
    }

    public function resetPassword($email, $password) {
        try {
            $sql = "UPDATE users SET password = ? WHERE email = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$password, $email]);
            return true;
        } catch (PDOException $e) {
            die( 'error updating password: ' . $e->getMessage());
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
    }
}