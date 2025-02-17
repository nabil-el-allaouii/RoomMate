<?php

class Admin extends User {

    private $conn;

    public function __construct() {
        $instance = Database::getinstance();
        $this->conn = $instance->getconn();
    }

    public function forgotPassword($email) {

            try {
            $sql = "INSERT INTO reset_pass (email) VALUES (?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$email]);
            return true;
        } catch (PDOException $e) {
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

}