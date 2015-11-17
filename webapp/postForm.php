<?php

$resultados = array(
    'nome' => '',
    'email' => '',
    'frutas' => '',
    'cidade' => array(),
    'parimpar' => '',
);

foreach ($resultados as $key => $value) {
    if (isset($_POST['dados'][$key])) {
        $resultados[$key] = $_POST['dados'][$key];
    }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>PHP Unit + Selenium - Assemany</title>
  </head>
  <body>
    <div class="container">
      <h1>Resultado do form</h1>
      <div class="span8 offset1">
        <table class="table table-striped">
          <caption><h3>Dados do Formulário</h3></caption>
          <thead>
            <tr>
              <th>Campo</th>
              <th>Valor</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Nome</td>
              <td><span id="resultadoNome"><?php echo htmlspecialchars($resultados['nome']); ?></span></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><span id="resultadoEmail"><?php echo htmlspecialchars($resultados['email']); ?></span></td>
            </tr>
            <tr>
              <td>Frutas</td>
              <td><span id="resultadoFrutas"><?php echo htmlspecialchars($resultados['frutas']); ?></span></td>
            </tr>
            <tr>
              <td>Cidade</td>
              <td>
                <span id="resultadoCidade">
                <?php
                   if (isset($resultados['cidade']) && is_array($resultados['cidade'])) {
                       foreach ($resultados['cidade'] as $cidade) {
                           $cidades[] = htmlspecialchars($cidade);
                       }
                       echo implode(', ', $cidades);
                   }
                ?>
                </span>
              </td>
            </tr>
            <tr>
              <td>Número</td>
              <td><span id="resultadoNumero"><?php echo htmlspecialchars($resultados['parimpar']); ?></span></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="span8 offset1">
        <a href="index.php">Retornar para o formulário</a>
      </div>
    </div>
  </body>
</html>
