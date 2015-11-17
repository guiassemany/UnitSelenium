# PHPUnit + Selenium - Assemany

Testes básicos do PHPUnit + Selenium

## Como usar

* Instale o PHPUnit de forma global - ``` composer global require "phpunit/phpunit=4.6.*" ``` - Certifique que o phpunit está no PATH do seu sistema.
* Para ter certeza que o PHPUnit está ok, execute: ``` phpunit --version ```
* Instale as dependências do composer ``` composer install ```
* Inicie o servidor do PHP na pasta **webapp** - ```php -S localhost:8000 -t webapp```
* Inicie o servidor do Selenium
	* Para testar com Chrome: ```java -jar selenium-server-standalone-2.48.2.jar -Dwebdriver.chrome.driver=/Users/Assemany/Code/UnitSelenium/chromedriver```
	* Para testar com FireFox: ```java -jar selenium-server-standalone-2.48.2.jar```

*Atenção - Se for testar com o Firefox, é necessário algumas modificações no arquivo de teste*

``` php
// testes/testeTitulo.php ou testes/testeFormulario.php
// Linha 19 - Trocar
$driver = RemoteWebDriver::create($hostDoSelenium, DesiredCapabilities::chrome());
// Para
$driver = RemoteWebDriver::create($hostDoSelenium, DesiredCapabilities::firefox());

// Linha 23 - Trocar
$this->setBrowser('chrome');     
// Para
$this->setBrowser('firefox');
```

#### Executando os testes

##### Teste do Título da Página
``` php
phpunit testes/testeTitulo.php
```

##### Teste do Formulário
``` php
phpunit testes/testeFormulario.php
```
