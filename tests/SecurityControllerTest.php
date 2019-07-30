<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/api/users');
        $rep=$client->getResponse();
        $this->assertSame(401,$client->getResponse()->getStatusCode());
        //$this->assertJsonStringEqualsJsonString($jsonstring,$rep->getContent());
    }
    public function testAjoutOk()
    {
        $client = static::createClient();
        $crawler = $client->request('POST', '/api/register',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{  "id": 11,
            "username": "username",
            "password": "passer",
            "roles": ["ROLE_Caissier"],
            "nomComplet": "caissier 2",
            "status": "Bloquer?",
            "proprietaire": "WARI"
        }');
        $rep=$client->getResponse();
        var_dump($rep);
        $this->assertSame(401,$client->getResponse()->getStatusCode());
    }
    public function testAjoutKo()
    {
        $client = static::createClient();
        $crawler = $client->request('POST', '/api/register',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{  "id": 11,
            "username": "username",
            "password": "passer",
            "roles": ["ROLE_Caissier"],
            "nomComplet": "",
            "status": "Bloquer?",
            "proprietaire": "WARI"
        }');
        $rep=$client->getResponse();
        var_dump($rep);
        $this->assertSame(401,$client->getResponse()->getStatusCode());
    }
}
