<body>
<?php
require_once './constants.php';
require('view/template.php');
$tela = new template;
$tela->deixarPaginaNaoVisivel = true;
session_start();
$tela->SetTitle('Pesquisa operacional, simplificada - Sabatinex');
$tela->SetProjectName('Sabatinex');

$conteudo='<h1 style="text-align:center;">Forma Padrão</h1>';
$conteudo=$conteudo.'<h5 style="text-align:center;">Nesta etapa a fórmula é transformada  na forma padrão e inclui-se as variáveis de folga/excesso.</h5><br><br>';
$conteudo=$conteudo.'<lu>';
$folga=1;
for ($l=1; $l <= $_SESSION['qtderestricoes'] ; $l++)
{ 
	if($_GET['relacao'.$l]=='<=')
	{
		$conteudo=$conteudo.'<li>Como a restrição '.$l.' é do tipo '.$_GET['relacao'.$l].' adiciona-se a variável de folga 
		1F<sub>'.$folga.'</sub>;
		</li>';
		$_SESSION['folga'.$l]=1;
	}

	if($_GET['relacao'.$l]=='>=')
	{
		$conteudo=$conteudo.'<li>Como a restrição '.$l.' é do tipo '.$_GET['relacao'.$l].' adiciona-se a variável de folga 
		-1F<sub>'.$folga.'</sub>;
		</li>';
		$_SESSION['folga'.$l]=-1;
	}
	$folga++;	
	$_SESSION['relacao'.$l]=$_GET['relacao'.$l];
}


$conteudo=$conteudo.'<div  class="col-lg-6">';

if ($_SESSION['objetivo']=='max')
{
	$conteudo=$conteudo.'<strong>Maximizar  </strong>';
}else{
	$conteudo=$conteudo.'<strong>Minimizar  </strong>';
}

//escreve a funcao Z
$funcao='';
for ($c=1; $c <= $_SESSION['qtdevariaveis'] ; $c++)
{ 
	$funcao=$funcao.$_GET['z'.$c].'X<sub>'.$c.'</sub>';
	$_SESSION['z'.$c]=$_GET['z'.$c];
	if($c<$_SESSION['qtdevariaveis'])
	{
		$funcao=$funcao.' + ';
	}
}
$conteudo=$conteudo.$funcao.'<br><br>';

//escreve as restrições
for ($l=1; $l <= $_SESSION['qtderestricoes'] ; $l++)
{ 
	for ($c=1; $c <=$_SESSION['qtdevariaveis']; $c++)
	{ 
		$conteudo=$conteudo.
		$_GET['r'.$l.'_'.$c].'X<sub>'.$c.'</sub>';
		$_SESSION['r'.$l.'_'.$c] = $_GET['r'.$l.'_'.$c];
		if($c<$_SESSION['qtdevariaveis'])
		{
			$conteudo=$conteudo.' + ';	
		}else{
			$conteudo=$conteudo.' '.$_GET['relacao'.$l].' '.$_GET['resultado'.$l];
			$_SESSION['relacao'.$c] = $_GET['relacao'.$l];
			$_SESSION['resultado'.$l] = $_GET['resultado'.$l];
		}
	}
	$conteudo=$conteudo.'<br>';
}

$conteudo=$conteudo.$_SESSION['restricaopadrao'];
$conteudo=$conteudo.'</div">';
$conteudo=$conteudo.' </div><div class="col-lg-6">';

if ($_SESSION['objetivo']=='max')
{
	$conteudo=$conteudo.'<strong>Maximizar   </strong>';
	$_SESSION['objetivo2']='+';
}else{
	$conteudo=$conteudo.'<strong>Minimizar  </strong>';
	$_SESSION['objetivo2']='-';
}

$funcao='';
for ($c=1; $c <= $_SESSION['qtdevariaveis'] ; $c++)
{ 
	$funcao=$funcao.$_GET['z'.$c.''].'X<sub>'.$c.'</sub>';
	$_SESSION['z'.$c.'']=$_GET['z'.$c.''];
	if($c<$_SESSION['qtdevariaveis'])
	{
		$funcao=$funcao.' + ';
	}
}

$aux=1;
$funcao=$funcao.' + ';

for ($l=1; $l <=$_SESSION['qtderestricoes']; $l++)
{ 
	if ($_SESSION['folga'.$l]>0)
	{
		$funcao=$funcao.$_SESSION['folga'.$l].'F<sub>'.$aux.'</sub>';
		$aux++;
	}else{
		$funcao=$funcao.'('.$_SESSION['folga'.$l].'F<sub>'.$aux.'</sub>)';
		$aux++;
	}

	if($l<$_SESSION['qtderestricoes'])
	{
		$funcao=$funcao.' + ';
	}
}



$conteudo=$conteudo.$funcao.'<br><br>';
//escreve as restrições com as variaveis
$aux = 1;
for ($l=1; $l <= $_SESSION['qtderestricoes'] ; $l++) { 
	for ($c=1; $c <=$_SESSION['qtdevariaveis']; $c++) { 
		$conteudo=$conteudo.
		$_GET['r'.$l.'_'.$c].'X<sub>'.$c.'</sub>';
		$_SESSION['r'.$l.'_'.$c] = $_GET['r'.$l.'_'.$c];
		if($c<$_SESSION['qtdevariaveis'])
		{
			$conteudo=$conteudo.' + ';	
		}else{
			if ($_SESSION['folga'.$l]>0)
			{
				$conteudo=$conteudo.' + '.$_SESSION['folga'.$l].'F<sub>'.$aux.'</sub>';
				$aux++;
			}else{
				$conteudo=$conteudo.' + ('.$_SESSION['folga'.$l].'F<sub>'.$aux.'</sub>) ';
				$aux++;
			}

			$conteudo=$conteudo.' = '.$_GET['resultado'.$l];
			$_SESSION['relacao'.$c] = $_GET['relacao'.$l];
			$_SESSION['resultado'.$l] = $_GET['resultado'.$l];
		}
	}
	$conteudo=$conteudo.'<br>';
}

$funcao='';
for ($c=1; $c <= $_SESSION['qtdevariaveis'] ; $c++)
{ 
	$funcao=$funcao.'X<sub>'.$c.'</sub>';
	$_SESSION['z'.$c.'']=$_GET['z'.$c.''];
	if($c<$_SESSION['qtdevariaveis'])
	{
		$funcao=$funcao.' , ';
	}
}

$aux=1;
for ($l=1; $l <= $_SESSION['qtderestricoes']; $l++)
{ 
	$funcao=$funcao.' , '.'F<sub>'.$aux.'</sub>';
	$aux++;
}

$funcao=$funcao.' >= 0';
$conteudo=$conteudo.$funcao;
$conteudo=$conteudo.'</div">';

$conteudo=$conteudo.
'
</div></div></div>
<br><br>
<form style="text-align:center;" action="resultado.php" method="GET"  class="form-horizontal">
	<fieldset>

	<!-- Button -->
		<div class="form-group">
    		<label class="checkbox-inline"  for="passoapasso-0">
      			<input type="checkbox" checked name="passoapasso" value="S" id="passoapassocheckbox">
      			Mostrar passo-a-passo
    		</label><br><br>
    		<button id="submit" name="submit" class="btn btn-success">Continuar</button>
  		</div>
		</div>
	</fieldset>
</form>
';

$conteudo = $conteudo .
'
<script>
function eventFire(el, etype){
	if (el.fireEvent) {
	  	el.fireEvent("on" + etype);
	} else {
	  	var evObj = document.createEvent("Events");
	  	evObj.initEvent(etype, true, false);
	  	el.dispatchEvent(evObj);
	}
}

window.onload = function() {
	var url_string = window.location.href;
	var url = new URL(url_string);
	var submitDireto = url.searchParams.get("submitDireto");
	var submitDetalhado = url.searchParams.get("submitDetalhado");

	if (submitDireto != null) {
		document.getElementById("passoapassocheckbox").checked = false;
		document.getElementById("submit").click();
	}

	if (submitDetalhado != null) {
		document.getElementById("passoapassocheckbox").checked = true;
		document.getElementById("submit").click();
	}
}
</script>
';

$tela->SetContent($conteudo);
$tela->ShowTemplate();
?>

