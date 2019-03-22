<?php require PATH_ABS.'/view/assets/snippets/head.php'; ?>
<?php require PATH_ABS.'/view/assets/snippets/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-5">
            <h1>Programação Linear</h1>
            <p class=" lead">Faça aqui o cálculo de Programação Linear pelo método Simplex. A quantidade de variáveis e restrições é ilimitada, ao contrário das inequações, que são limitadas para menor ou igual.</p>
        </div>
        <div class="col-sm-12">
            <hr>

            <!-- balão de erro -->
            <div class="alert alert-danger" role="alert">
                Há erros no formulário:
                <ul>
                    <li>Preencha o campo "Quantidade de variáveis" com apenas números</li>
                </ul>
            </div>
            <!-- fim do balão de erro -->

            <form>
                <div class="form-group row">
                    <label class="col-4">Objetivo</label> 
                    <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="objetivo" id="objetivo_0" type="radio" class="custom-control-input" value="max" aria-describedby="objetivoHelpBlock" required="required"> 
                        <label for="objetivo_0" class="custom-control-label">Maximizar</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="objetivo" id="objetivo_1" type="radio" class="custom-control-input" value="min" aria-describedby="objetivoHelpBlock" required="required"> 
                        <label for="objetivo_1" class="custom-control-label">Minimizar</label>
                    </div> 
                    <span id="objetivoHelpBlock" class="form-text text-muted">Qual a intenção do sistema com as variáveis?</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-form-label" for="qtdVars">Quantidade de variáveis</label> 
                    <div class="col-8">
                    <input id="qtdVars" name="qtdVars" type="text" class="form-control" aria-describedby="qtdVarsHelpBlock" required="required"> 
                    <span id="qtdVarsHelpBlock" class="form-text text-muted">A quantidade de termos que há na sua função-objetivo</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="qtdRest" class="col-4 col-form-label">Quantidade de restrições</label> 
                    <div class="col-8">
                    <input id="qtdRest" name="qtdRest" type="text" class="form-control" aria-describedby="qtdRestHelpBlock" required="required"> 
                    <span id="qtdRestHelpBlock" class="form-text text-muted">A quantidade de restrições que serão aplicadas no sistema</span>
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Próximo passo ></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require PATH_ABS.'/view/assets/snippets/foot.php'; ?>