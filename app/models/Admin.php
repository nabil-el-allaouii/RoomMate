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
        $password = password_hash($password, PASSWORD_DEFAULT);
        try {
            $sql = "UPDATE users SET password = ? WHERE email = ?";
            $stmt = $this->conn->prepare($sql);
           if($stmt->execute([$password, $email])){
            return true;
           }else{
            die( 'error updating password: ' . $e->getMessage());
           }
        } catch (PDOException $e) {
            die( 'error updating password: ' . $e->getMessage());
        }
    }

    public function getRequests() {
        try {
            $sql = "SELECT * FROM reset_pass";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die( 'error getting requests: ' . $e->getMessage());
        }
    }

    public function deleteRequest($email) {
        try {
            $sql = "DELETE FROM reset_pass WHERE email = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$email]);
            return true;
        } catch (PDOException $e) {
            die( 'error deleting request: ' . $e->getMessage());
        }
    }

}