<?php
namespace UPJV;

class MesDates {
    public function demain() {
        $date = new \DateTime('tomorrow');
        $resultat = ['demain' => $date->format('d-m-Y')];
        return json_encode($resultat);
    }
}