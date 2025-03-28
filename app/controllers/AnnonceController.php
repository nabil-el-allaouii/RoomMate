<?php
require_once __DIR__ . '/../Models/Annonce.php';

class AnnonceController extends BaseController
{

    public function __construct()
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit();
        }
    }

    public function addAnnonce()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $type = $_POST['type'] ?? '';
            $status = 'pending';
            $title = $_POST['title'] ?? '';
            $description = $_POST['description'] ?? '';
            $budget = $_POST['budget'] ?? 0;
            $capacity = $_POST['capacity'] ?? 1;
            $room_type = $_POST['room_type'] ?? null;
            $city = $_POST['city'] ?? '';
            $preferences = isset($_POST['preferences']) ? implode('-', $_POST['preferences']) : ' ';
            $from_date = $_POST['from_date'] ?? null;
            $to_date = $_POST['to_date'] ?? null;
            $user_id = $_SESSION['user_id'] ?? 0;

            $annonce = new Annonce($user_id, $type, $status, $title, $description, $budget, $capacity, $room_type, $city, $preferences, $from_date, $to_date);
            if ($annonce_id = $annonce->ajouterAnnonce()) {

                if ($type === 'offer') {
                    if (isset($_FILES['photos'])) {
                        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
                        foreach ($_FILES['photos']['tmp_name'] as $key => $tmp_name) {
                            $fileName = $_FILES['photos']['name'][$key];
                            $fileTmp = $_FILES['photos']['tmp_name'][$key];
                            $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

                            if (in_array($fileExt, $allowed)) {
                                $fileNameNew = uniqid('', true) . '.' . $fileExt;
                                $fileDestination = 'uploads/' . $fileNameNew;
                                move_uploaded_file($fileTmp, $fileDestination);
                                $annonce->ajouterPicAnnonce($annonce_id, $fileDestination);

                                header('Location: /annonces');
                            }
                        }
                    }

                    header('Location: /annonces');
                    exit;
                } else {
                    echo '';
                }
            }
            include __DIR__ . '/../Views/user/addAnnonce.php';
        }
    }

    public function showAnnonces()
    {
        $annonces =  Annonce::getAllAnnonces();
        // var_dump($annonces);
        include __DIR__ . '/../Views/recherche.php';
    }
    public function showMyAnnonces()
    {
        $annonces =  Annonce::getAllMyAnnonces();
        // var_dump($annonces);
        include __DIR__ . '/../Views/mes_annonces.php';
    }

    public function deleteAnnonce()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $annonce_id = $_POST['annonce_id'] ?? null;
            var_dump($annonce_id);
            if ($annonce_id) {
                if ($annonce =  Annonce::supprimerAnnonce($annonce_id)) {
                    header('Location: /mesannonces');
                    exit;
                } else {
                    echo 'Erreur lors de la suppression de l\'annonce';
                }
            }
        }
    }

    public function showAnnonceDetails($id)
    {
        $annonce = Annonce::getAnnonceById($id);
        if ($annonce['type'] === 'demand') {
            $this->render('single-demand.view', ['annonce' => $annonce]);
        } else {
            $photos = Annonce::getAnnoncePhotos($id);
            $this->render('single-offer.view', ['annonce' => $annonce, 'photos' => $photos]);
        }
    }

    public function reportAnnonce()
    {
        $annonce_id = htmlspecialchars($_POST['annonce_id']);
        $reporter_id = htmlspecialchars($_POST['reporter_id']);
        $reported_id = htmlspecialchars($_POST['reported_id']);
        $description = htmlspecialchars($_POST['description']) ?? '';
        $type = htmlspecialchars($_POST['type']);

        $report = new Report();
        $report->setReport($annonce_id, $reporter_id, $reported_id, $description, $type);

        $report->addReport();
        header('Location: /matching');
        exit;
    }
}
