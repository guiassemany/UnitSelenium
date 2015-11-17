<?php

require_once 'vendor/autoload.php';

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;


class testeFormulario extends PHPUnit_Extensions_Selenium2TestCase
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

    public function testaFormulario()
    {
        $this->url('/index.php');

        // No index.php

        // Preenche o campo nome
        $element = $this->byId('inputNome'); // funciona como o getElementById() do JS
        $element->value('Guilherme Assemany');

        // Preenche o email
        $this->byName('dados[email]')->value('guilherme@assemany.com');

        // Seleciona a fruta
        $this->select($this->byId('inputFrutas'))->selectOptionByLabel('Laranja');

        // Clica no checkbox da cidade
        $this->byId('inputCidadeSalvador')->click();

        // Clica no par ou ímpar
        $this->byId('inputNumeroPar')->click();

        // Envia o formulário
        $this->byCssSelector('button.btn-primary')->click(); // Seleciona o botão pela classe CSS

        // No postForm.php - Após o submit do form

        // Nome
        $element = $this->byId('resultadoNome');
        $innerText = $element->text();
        $this->assertEquals('Guilherme Assemany', $innerText);

        // Email
        $innerText = $this->byId('resultadoEmail')->text();
        $this->assertEquals('guilherme@assemany.com', $innerText);

        // Frutas
        $this->assertEquals('laranja', $this->byId('resultadoFrutas')->text());

        // Cidade
        $this->assertEquals('salvador', $this->byId('resultadoCidade')->text());

        // Par ou Impar
        $this->assertEquals('par', $this->byId('resultadoNumero')->text());
    }

}
