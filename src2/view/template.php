<?php  

// Aqui nós configuramos os SET e GET. 
// Fazemos a chamada para o Bootstrap

class template
{
	public $title;
	public $content;
	public $projectName;
	public $table;

	public $deixarPaginaNaoVisivel;

	public function SetTitle($t)
	{
		$this->title = $t;
	}

	public function GetTitle()
	{
		return $this->title;
	}

	public function SetContent($c)
	{
		$this->content = $c;
	}

	public function GetContent()
	{
		return $this->content;
	}

	public function SetProjectName($p)
	{
		$this->projectName = $p;
	}

    public function GetProjectName()
    {
		return $this->projectName;
	}

	public function ShowTemplate()
	{
		if ($this->deixarPaginaNaoVisivel) {
			$eitapreula = "visibility:hidden";
		}

	  	echo '
			<!DOCTYPE html>
			<html lang="pt">
				<head>
			    	<meta charset="utf-8">
				    <meta http-equiv="X-UA-Compatible" content="IE=edge">
			    	<meta name="viewport" content="width=device-width, initial-scale=1">
			 	   	<title>'    .$this->GetTitle().    '</title>
							<!--link href="css/bootstrap.css" rel="stylesheet"-->
							<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
			    	<link href="view/bootstrap/css/app.css" rel="stylesheet">
				</head>

			  	<body style="'.$eitapreula.'">
						<!--navbar-->';
						
				require(PATH_ABS.'/meudeusdoceu/header.php');

				echo '
					<!--navbar-->
					
					<div class="container theme-showcase">
			    		<div class="row">
			    			<div class="center">
			   					'.$this->GetContent().'
			  				</div>
			    		</div><!--row-->
					</div><!--container theme-showcase-->

					<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
					<!--script src="js/bootstrap.min.js"></script-->
    			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
				</body>
			</html>
	  	';
	}
}
?>