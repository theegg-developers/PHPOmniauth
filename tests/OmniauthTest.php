<?php
require_once __DIR__ . '/TestCase.php';
require_once __DIR__ . '/../src/TheEgg/PHPOmniauth/Omniauth.php';
class OmniauthTest extends TestCase {

  public function testBasicExample(){
    $crawler = $this->client->request('GET', '/');
    $this->assertTrue($this->client->getResponse()->isOk());
  }


  function testFacebookUrl(){
    $omniauth = new TheEgg\PHPOmniauth\Omniauth();
    $this->assertEquals($omniauth->facebook(), Redirect::to('https://facebook.com'));
  }

  function testFacebookCallback(){

  }

  function testOpenIdUrl(){
    $omniauth = new TheEgg\PHPOmniauth\Omniauth();
    $this->assertEquals($omniauth->open_id(), Redirect::to('https://google.com'));
  }

  function testOpenIdCallback(){
    
  }
}
