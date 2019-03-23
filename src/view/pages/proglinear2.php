<?php require PATH_ABS.'/view/assets/snippets/head.php'; ?>
<?php require PATH_ABS.'/view/assets/snippets/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-5">
            <h1>Programação Linear</h1>
        </div>
        <div class="col-sm-12">
            <hr>

            <!-- balão de erro -->
            <div class="alert alert-danger" role="alert">
                Há erros no formulário:
                <ul>
                    <li>Preencha todos os campos</li>
                </ul>
            </div>
            <!-- fim do balão de erro -->

            <form>
                <h4 class="font-weight-bold">Função-objetiva</h4>
                <div class="form-group">
                    <span class="wlices--func--texto">
                        Z =
                    </span>
                    <input class="wlices--func--input" type="text" name="">
                    <span class="wlices--func--texto">
                        X<sub>1</sub>
                    </span>
                    <span class="wlices--func--texto">
                        +
                    </span>
                    <input class="wlices--func--input" type="text" name="">
                    <span class="wlices--func--texto">
                        X<sub>2</sub>
                    </span>
                </div>

                <h4 class="font-weight-bold mt-5">Restrições</h4>
                <div class="form-group">
                    <input class="wlices--func--input" type="text" name="">
                    <span class="wlices--func--texto">
                        X<sub>1</sub>
                    </span>
                    <span class="wlices--func--texto">
                        +
                    </span>
                    <input class="wlices--func--input" type="text" name="">
                    <span class="wlices--func--texto">
                        X<sub>2</sub>
                    </span>
                    <span class="wlices--func--texto">
                        <=
                    </span>
                    <input class="wlices--func--input" type="text" name="">
                </div>
                <div class="form-group">
                    <input class="wlices--func--input" type="text" name="">
                    <span class="wlices--func--texto">
                        X<sub>1</sub>
                    </span>
                    <span class="wlices--func--texto">
                        +
                    </span>
                    <input class="wlices--func--input" type="text" name="">
                    <span class="wlices--func--texto">
                        X<sub>2</sub>
                    </span>
                    <span class="wlices--func--texto">
                        <=
                    </span>
                    <input class="wlices--func--input" type="text" name="">
                </div>
                <div>
                    <span class="wlices--func--texto">
                        X<sub>1</sub>, X<sub>2</sub> >= 0
                    </span>
                </div>

                <div class="form-group mt-5">
                    <button type="submit" class="btn btn-primary">Próximo passo ></button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require PATH_ABS.'/view/assets/snippets/foot.php'; ?>