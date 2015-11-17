<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>PHP Unit + Selenium - Assemany</title>
  </head>
  <body>
    <div class="container">

      <h1>PHP Unit + Selenium - Assemany</h1>

      <form class="form-horizontal" method="POST" id="form" action="postForm.php">
        <!-- Nome -->
        <div class="control-group">
          <label class="control-label" for="inputNome">Nome</label>
          <div class="controls">
            <input type="text" name="dados[nome]" id="inputNome" class="input-large">
          </div>
        </div>

        <!-- Email -->
        <div class="control-group">
          <label class="control-label" for="inputEmail">Email</label>
          <div class="controls">
            <input type="email" name="dados[email]" id="inputEmail" class="input-large">
          </div>
        </div>

        <!-- Frutas -->
        <div class="control-group">
          <label class="control-label" for="inputFrutas">Qual fruta você mais gosta ?</label>
          <div class="controls">
            <select name="dados[frutas]" id="inputFrutas">
              <option value="maca">Maçã</option>
              <option value="laranja">Laranja</option>
              <option value="uva">Uva</option>
            </select>
          </div>
        </div>

        <!-- Cidade -->
        <div class="control-group">
          <label class="control-label">Você quer ir para...</label>
          <div class="controls">
            <label class="checkbox">
              <input type="checkbox" name="dados[cidade][]" value="salvador" id="inputCidadeSalvador">Salvador
            </label>
            <label class="checkbox">
              <input type="checkbox" name="dados[cidade][]" value="saopaulo" id="inputCidadeSaoPaulo">São Paulo
            </label>
            <label class="checkbox">
              <input type="checkbox" name="dados[cidade][]" value="recife" id="inputCidadeRecife">Recife
            </label>
          </div>
        </div>

        <!-- Número -->
        <div class="control-group">
          <label class="control-label">Par ou ímpar?</label>
          <div class="controls">
            <label class="radio">
              <input type="radio" name="dados[parimpar]" id="inputNumeroImpar" value="impar">Ímpar
            </label>
            <label class="radio">
              <input type="radio" name="dados[parimpar]" id="inputNumeroPar" value="par">Par
            </label>
          </div>
        </div>

        <!-- Botão -->
        <div class="control-group">
          <div class="controls">
            <button type="submit" class="btn btn-primary" id="btnSubmit">Cadastrar</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
