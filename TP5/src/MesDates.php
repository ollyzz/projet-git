<?php

namespace UPJV;

/**
 * Classe de gestion des dates.
 */
class MesDates
{
    /**
     * Retourne la date de demain en JSON.
     *
     * @return string
     */
    public function demain()
    {
        $date = new \DateTime('tomorrow');
        $resultat = ['demain' => $date->format('d-m-Y')];

        return json_encode($resultat);
    }
}