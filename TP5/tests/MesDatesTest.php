<?php

use PHPUnit\Framework\TestCase;
use UPJV\MesDates;

// AJOUTE CETTE LIGNE ICI (le chemin doit être correct par rapport au fichier de test)
require_once __DIR__ . '/../src/MesDates.php';

class MesDatesTest extends TestCase
{
    public function testDemainRenvoieJsonEtBonneDate()
    {
        $mesDates = new MesDates();
        $json = $mesDates->demain();

        // 1. Assertion : C'est bien du JSON
        $this->assertJson($json);

        // 2. Assertion : Le contenu est la date de demain
        $data = json_decode($json, true);
        $demainAttendu = (new DateTime('tomorrow'))->format('d-m-Y');
        
        $this->assertEquals($demainAttendu, $data['demain']);
    }
}