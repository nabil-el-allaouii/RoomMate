<?php
require_once __DIR__ . "/../Config/db.php";
require_once __DIR__ . "/../models/Annonce.php";
require_once __DIR__ . "/../models/Details.php";


class MatchingController
{

    public function __construct()
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit();
        }
    }

    private function calculerCompatibilite($userDetails, $annonce)
    {
        $score = 0;

        if (abs($userDetails['budget'] - $annonce['budget']) <= 100) {
            $score += 25;
        }

        if (strcasecmp($userDetails['current_city'], $annonce['city']) == 0) {
            $score += 25;
        }

        $userPrefs = explode('-', $userDetails['preferences']);
        $annoncePrefs = explode('-', $annonce['preferences']);
        $matchingPrefs = array_intersect($userPrefs, $annoncePrefs);
        $score += count($matchingPrefs) * 10;

        $userStartDate = strtotime($userDetails['from_date']);
        $userEndDate = strtotime($userDetails['to_date']);
        $annonceStartDate = strtotime($annonce['from_date']);
        $annonceEndDate = strtotime($annonce['to_date']);

        if (($userStartDate <= $annonceEndDate) && ($userEndDate >= $annonceStartDate)) {
            $score += 25;
        }
        return $score;
    }
    public function showMatchingResults()
    {
        $user_id = $_SESSION['user_id'];

        $userDetails = Details::getUserDetails($user_id);

        if (!$userDetails) {
            echo "Utilisateur non trouve ";
            return;
        }
        $annonces = Annonce::getAllAnnonces();
        $matchingAnnonces = [];

        foreach ($annonces as $annonce) {
            $compatibilityScore = $this->calculerCompatibilite($userDetails, $annonce);
            if ($compatibilityScore >= 50) {
                $annonce['compatibility_score'] = $compatibilityScore;
                $matchingAnnonces[] = $annonce;
            }
        }
        usort($matchingAnnonces, function ($a, $b) {
            return $b['compatibility_score'] - $a['compatibility_score'];
        });
        include __DIR__ . "/../views/matching_results.php";
    }
}
