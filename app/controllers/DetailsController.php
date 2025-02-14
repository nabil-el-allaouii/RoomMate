<?php
require_once __DIR__.'/../Models/Details.php';   

class DetailsController {
    public function Details() {
        include __DIR__.'/../Views/details.php';
    }

    public function addDetails(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $bio = $_POST['bio'] ?? '';
            $current_city = $_POST['current_city'] ?? '';
            $budget = $_POST['budget'] ?? 0;
            $room_type = $_POST['room_type'] ?? '';
            $origin_city = $_POST['origin_city'] ?? '';
            $preferences = isset($_POST['preferences']) ? implode('-', $_POST['preferences']) : ' ';
            $education_year = $_POST['education_year'] ?? '';
            $user_id = $_SESSION['user_id'] ?? 0;
            $from_date = $_POST['from_date'] ?? 0;
            $to_date = $_POST['to_date'] ?? 0;

            if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] === 0) {
                $allowed = ['jpg', 'jpeg', 'png', 'gif'];
                $fileName = $_FILES['profile_pic']['name'];
                $fileTmp = $_FILES['profile_pic']['tmp_name'];
                $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

                if (in_array($fileExt, $allowed)) {
                    $fileNameNew = uniqid('', true) . '.' . $fileExt;
                    $fileDestination = 'uploads/' . $fileNameNew;
                    move_uploaded_file($fileTmp, $fileDestination);
                    $details = new Details($user_id,$bio,$current_city,$budget,$room_type,$origin_city,$preferences,$education_year,$fileDestination,$from_date,$to_date);
                    $details->ajouterDetails();

                header('Location: /details');
            }
        }
    }

}}
     
?>