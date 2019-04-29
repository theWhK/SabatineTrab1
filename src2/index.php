<body>
<?php

require_once './constants.php';

// redirect
header('Location: '.URL_BASE.'/inicio_simplex.php'); exit();

require('view/template.php');



//cria-se objeto da classe template e define a ele o titulo e o conteudo que será impresso
$tela = new template;
$tela->SetTitle('Método Simplex');
$tela->SetProjectName('Sabatinex');

$conteudo='
  <div class="container">
    <div class="row">
        <div class="col-sm-12 mt-5">
            <div class="jumbotron">
                <h1 class="display-4 text-break">Pesquisa operacional, <span class="font-weight-bold">automatizada</span>.</h1>
                <p class="lead">O Sabatinex resolve, passo a passo, os problemas de programação linear e programação dinâmica que você precisa. </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Programação linear</h5>
                <p class="card-text">Usando o método Simplex, o Sabatinex está pronto para resolver problemas de PL com variáveis e restrições ilimitadas em instantes.</p>
                <a href="'.URL_BASE.'/inicio_simplex.php" class="btn btn-primary">Calcular</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Programação dinâmica</h5>
                <p class="card-text">Resolva, rapidamente, problemas de PD (a.k.a mochila) com ilimitadas possibilidades de capacidade, valores e pesos.</p>
                <a href="'.URL_BASE.'/mochila.php" class="btn btn-primary">Calcular</a>
            </div>
            </div>
        </div>
    </div>
</div>
';

$tela->SetContent($conteudo);
$tela->ShowTemplate();
?>