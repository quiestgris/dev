<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Routing\Annotation\Route;

class MailTest extends WebTestCase {


    public function testMail() :void {
        $client = static::createClient();
        $client->request("GET","envoyer-mail");

        $this->assertResponseIsSuccessful();
        $this->assertEmailCount(1);
    }
}