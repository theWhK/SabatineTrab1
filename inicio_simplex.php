<body>
<?php
require_once './constants.php';
require('view/template.php');

//cria-se objeto da classe template e define a ele o titulo e o conteudo que será impresso
$tela = new template;
$tela->SetTitle('Pesquisa operacional, simplificada - Sabatinex');
$tela->SetProjectName('Sabatinex');

$conteudo='
  <form class="form-horizontal" action="restricoes.php" method="GET">
  
  <div class="form-group row">
  
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div >
    <h1>Programação Linear</h1>
    <p>
        Faça aqui o cálculo de Programação Linear pelo método Simplex. A quantidade de variáveis e restrições é ilimitada,
        ao contrário das inequações, que são limitadas para menor ou igual.
    </p>
    <hr>
    </div>

  <span id="objetivoHelpBlock" class="form-text text-muted">Qual a intenção do sistema com as variáveis?</span>
  <div class="custom-control custom-radio custom-control-inline">
      <input name="objetivo" id="objetivo_0" type="radio" class="custom-control-input" value="max" aria-describedby="objetivoHelpBlock" required="required"> 
      <label for="objetivo_0" class="custom-control-label">Maximizar</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
      <input name="objetivo" id="objetivo_1" type="radio" class="custom-control-input" value="min" aria-describedby="objetivoHelpBlock" required="required"> 
      <label for="objetivo_1" class="custom-control-label">Minimizar</label>
  </div>
  </div>
</div>
<div class="form-group row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
  <span id="qtdVarsHelpBlock" class="form-text text-muted">A quantidade de termos que há na sua função-objetivo</span>
  <input id="qtdevariaveis" name="qtdevariaveis" type="text" class="form-control" aria-describedby="qtdVarsHelpBlock" required="required" placeholder="Quantidade de variáveis"> 
  </div>
</div>
<div class="form-group row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
  <span id="qtdRestHelpBlock" class="form-text text-muted">A quantidade de restrições que serão aplicadas no sistema</span>
  <input id="qtderestricoes" name="qtderestricoes" type="text" class="form-control" aria-describedby="qtdRestHelpBlock" required="required" placeholder="Quantidade de restrições"> 
  </div>
</div> 
<div class="form-group row">
<div class="col-md-2"></div>
  <div class="col-md-8">
    <span id="qtdRestHelpBlock" class="form-text text-muted">A quantidade de iterações que serão realizadas</span>
    <input id="qtdRest" name="qtdRest" type="text" class="form-control" aria-describedby="qtdRestHelpBlock" required="required" placeholder="Máximo de loops (máx. 100)"> 
  </div>
</div> 
<div class="form-group row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
  <button name="submit" type="submit" class="btn btn-primary">Próximo passo ></button>
  </div>
</div>
<!--
    <fieldset>

        <legend>Método Simplex - Vamos inserir os valores abaixo e calular o simplex.</legend>

        <div class="form-group">
          <label class="col-md-4 control-label" for="qtdevariaveis">Qual a quantidade de variáveis?</label>  
          <div class="col-md-4">
            <input id="qtdevariaveis" name="qtdevariaveis" type="number" step="0.01" placeholder="Digite o valor da variável" class="form-control input-md" required="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="qtderestricoes">E de restrições?</label>  
          <div class="col-md-4">
            <input id="qtderestricoes" name="qtderestricoes" type="number" step="0.01" placeholder="Digite o valor de restrições" class="form-control input-md" required="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="objetivo">objetivo</label>
          <div class="col-md-4">
            <select id="objetivo" name="objetivo" class="form-control">
              <option value="max">Maximizar</option>
              <option value="min">Minimizar</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="submit"></label>
          <div class="col-md-4">
            <button name="submit" class="btn btn-primary btn-lg btn-block">Prosseguir</button>
          </div>
        </div>
    </fieldset>
    
    -->
  </form>
';


$conteudo = $conteudo .
	'
<script>
window.onload = function() {
	var item = localStorage.getItem(\'inicio_simplex\');
	item = JSON.parse(item);

    $(\'#qtdevariaveis\').val(item.qtdevariaveis);
    $(\'#qtderestricoes\').val(item.qtderestricoes);
    $(\'#qtdRest\').val(item.qtdRest);
    
    if (item.objetivo == \'max\') {
    	$(\'#objetivo_0\').attr(\'checked\', true);
    }
    
    if (item.objetivo == \'min\') {
    	$(\'#objetivo_1\').attr(\'checked\', true);
    }

}
</script>
';

$tela->SetContent($conteudo);
$tela->ShowTemplate();
?>

