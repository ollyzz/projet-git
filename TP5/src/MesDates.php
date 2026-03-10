<?php

namespace UPJV;

/**
 * Classe de gestion des dates pour le TD.
 */
class MesDates
{
    /**
     * Renvoie un objet JSON contenant la date de demain.
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
