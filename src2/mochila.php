<?php
require 'constants.php'
?>

<!doctype html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!--link href="css/bootstrap.css" rel="stylesheet"-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">    
    <script src="view/bootstrap/js/jquery.min.js"></script>
    <script src="view/bootstrap/js/scriptMochila.js"></script>
  </head>

  <html lang="pt">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Método Mochila</title>
            <!--link href="css/bootstrap.css" rel="stylesheet"-->
    			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link href="view/bootstrap/css/app.css" rel="stylesheet">
        </head>

          <body>
            <!--navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-info">
              <a class="navbar-brand" href="<?=URL_BASE?>"><strong>Sabatinex</strong></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="<?=URL_BASE?>'">Página inicial <span class="sr-only">(página atual)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?=URL_BASE?>'/proglinear1">Prog. Linear</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?=URL_BASE?>/progdinamica">Prog. Dinâmica</a>
                </li>
                </ul>
              </div>
            </nav> 
          <!--navbar-->

          <script src="view/bootstrap/js/jquery.min.js"></script>
          <!--script src="js/bootstrap.min.js"></script-->
    			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        </body>
      </html>
    <div class="container"> 
      <div id="panel" class="row">
        <div class="col-md-4 ">
              <h3 class="col-md-offset-4">Mochila</h3>
            <div class="panel-body">
              <div class="form-group">
                <label>Capacidade da mochila</label>            
                <input type="number" class="form-control" id="valCapacity" placeholder="0" />
              </div>
              <div class="form-group">
                <button id="btnBackPack" type="button" class="btn btn-primary btn-block" onclick="backpack();">Criar</button>
              </div>
              <div class="form-group">
                <label>Peso do item</label>
                <input type="number" class="form-control" id="valWeight" placeholder="0" />
              </div>
              <div class="form-group">
                <label>Valor do item</label>
                <input type="number" class="form-control" id="valValue" placeholder="0" />
              </div>             
              <div class="form-group">                  
                  <button id="btnAddItem" type="button" class="btn btn-primary btn-block" onclick="addItem();">Adicionar</button>
              </div>
          </div>
        
      </div>      
      
        <div class="col-md-8">
          <table id="tblItens" class="table table-striped">
            <thead>
              <tr>
                <th style="width: 60px;"></th>
                <th>Peso</th>
                <th>Valor</th>
              </tr>
            </thead>
            <tbody>
            </tdbody>
          </table>
        </div>
      <hr />      
      <div class="row">
        <div class="col-md-12">          
          <h2>Tabela Final</h2>
          <table id="tblSolution" class="table table-bordered">
            <thead></thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
      <hr />
      <div class="row">
        <div class="col-md-12">
          <h2>Solução Final</h2>
          <p>Os itens que devem ser levados são:</p>
          <div id="finalSolution"></div>
        </div>
      </div>
    </div>
  </body>
</html>