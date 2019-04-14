<body>
<?php
require_once './constants.php';
require('view/template.php');
$tela = new template;
$tela->SetTitle('Método Simplex');
$tela->SetProjectName('Sabatinex');
session_start();

//é criado dinimicamente os campos para preennche-los
if (isset($_GET['qtdevariaveis']) and isset($_GET['qtderestricoes']) and isset($_GET['objetivo']))
{
	$_SESSION['qtdevariaveis'] = $_GET['qtdevariaveis'];
	$_SESSION['qtderestricoes'] = $_GET['qtderestricoes'];
	$_SESSION['objetivo'] = $_GET['objetivo'];
}

$conteudo=$conteudo.'<strong>Função Objetiva</strong><br>';

//Monta Z = .......
$conteudo=$conteudo.'<form name="frmdefinicao" method="GET" action="formapadrao.php">';
if ($_SESSION['objetivo']=='max')
{
	$conteudo=$conteudo.'<strong>Maximizar  Z =  </strong>';
}else{
	$conteudo=$conteudo.'<strong>Minimizar  Z =  </strong>';
}

for ($i=1; $i <= $_SESSION['qtdevariaveis']; $i++)
{ 
	$conteudo=$conteudo.'<input type="number" step="0.001" name="z'.$i.'" size="3" maxlength="4"> X<sub>'.$i.'</sub>';
	if($i<$_SESSION['qtdevariaveis'])
	{
		$conteudo=$conteudo.' + ';
	}
}
$conteudo=$conteudo.'<br><br>';

//Monta requisicoes
$conteudo=$conteudo.'<br><br><strong>Restrições</strong><br>';

//L de linha   C de coluna
for ($l=1; $l <= $_SESSION['qtderestricoes']; $l++)
{ 
	for ($c=1; $c <= $_SESSION['qtdevariaveis'] ; $c++)
	{ 
		$conteudo=$conteudo.'<input type="number" step="0.001" name="r'.$l.'_'.$c.'" size="3" maxlength="4"> X<sub>'.$c.'</sub>';
		if($c<$_SESSION['qtdevariaveis'])
		{ 
			// se nao for a ultima coloca um ponto
	  	    $conteudo=$conteudo.' + ';
		}else{
			//se não acrescenta o resultado da linha
			$conteudo=$conteudo.'
				<!--<select id="relacao" name="relacao'.$l.'">
           			<option value= "<="> <=	</option>
				</select> --><span>   <=   </span>
        		<input type="number" step"0.001" name="resultado'.$l.'" size="3" maxlength="4">
			';
		}
	}
	$conteudo=$conteudo.'<br>';
}
$conteudo=$conteudo.'<br><br>';//espaçamento

//x1...>=0
$funcao='';
for ($c=1; $c <=$_SESSION['qtdevariaveis']; $c++)
{ 
	$funcao=$funcao.'X<sub>'.$c.'</sub>';
	if($c<$_SESSION['qtdevariaveis'] )
	{
		$funcao=$funcao.' , ';	
	}else{
		$funcao=$funcao.' >= 0;';
	}
}

$_SESSION['restricaopadrao']=$funcao;
$conteudo=$conteudo.$funcao;
$conteudo=$conteudo.'<br><br>';
$conteudo=$conteudo.'<button style="margin-right:10px" id="submit" name="submitDireto" class="btn btn-primary">Solução direta</button>';
//$conteudo=$conteudo.'<button id="submit" name="submitDetalhado" class="btn btn-primary">Ver passo a passo</button>';
$conteudo=$conteudo.'</form>';
$tela->SetContent($conteudo);
$tela->ShowTemplate();
?>