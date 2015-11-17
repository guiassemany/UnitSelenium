<?php

require_once 'vendor/autoload.php';

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;


class testeTitulo extends PHPUnit_Extensions_Selenium2TestCase
{

    public function setUp()
    {

      $urlDoSistema = 'http://localhost:8000/';
	    $hostDoSelenium = 'http://localhost:4444/wd/hub';

      //Define o WebDriver
      $driver = RemoteWebDriver::create($hostDoSelenium, DesiredCapabilities::chrome());

      //$this->setHost('localhost');    // Host do servidor Selenium
      $this->setPort(4444);             // Porta do Servidor do Selenium
      $this->setBrowser('chrome');
      $this->setBrowserUrl($urlDoSistema);

    }

    public function testaTitulo()
    {
        $this->url('/index.php');
        $this->assertEquals('PHP Unit + Selenium - Assemany', $this->title());
    }

}
