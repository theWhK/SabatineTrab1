<body>
<?php
require_once './constants.php';
require_once('view/template.php');
require_once('simplex.php');
$simplex = new Simplex;
$tela = new template;
$tela->SetTitle('Método Simplex');
$tela->SetProjectName('Sabatinex');
session_start();

$conteudo='';

$conteudo=$conteudo.'
    <div>
        <h1>Programação Linear</h1>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="alert alert-danger w-100 mb-3" role="alert">
                <strong>Sem solução</strong>
                <p class="mt-2">Não existe solução possível com os dados informados.</p>
            </div>
            <button class="btn mr-3" style="background-color: #aaaaaa; color: white; width: 160px" onclick="window.location.href=\'/\'" >Voltar ao inicio</button>
            <button class="btn" style="background-color: #ffc40d; color: white; width: 160px">Corrigir Valores</button>
        </div>
    </div>';


$conteudo = $conteudo .
	'
<script>
window.onload = function() {
    //localStorage.clear();
}
</script>
';

$tela->SetContent($conteudo);
$tela->ShowTemplate();
?>