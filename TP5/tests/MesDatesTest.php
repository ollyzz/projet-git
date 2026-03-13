<?php

use PHPUnit\Framework\TestCase;
use UPJV\MesDates;

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