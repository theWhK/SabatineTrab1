<?php require PATH_ABS.'/view/assets/snippets/head.php'; ?>
<?php require PATH_ABS.'/view/assets/snippets/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-5">
            <h1>Programação Linear</h1>
            <h3>Forma padrão</h3>
            <p class="lead">Adiciona-se as variáveis de folga para transformação das inequações.</p>
        </div>
        <div class="col-sm-12">
            <hr>

            <? /*
            O bloco abaixo é clone do Isoide Imasu. A única alteração é a colocação da
            classe "wlices--forma-padrao--bloco" no wrapper de cada restrição e
            a remoção da classe de grade "col-lg-6".

            Facilita pois é só copiar e colar a lógica de montagem de layout
            deles, com poucas alterações.

            Lembrando que não tem aqueles textos listados antes, apenas os blocos
            de transformação das fórmulas. Não precisamos colocar as anotações que eles
            colocaram, já que faremos só com "<=".
            */ ?>

            <div class="wlices--forma-padrao--bloco"><strong>Maximizar </strong>4X<sub>1</sub> + 5X<sub>2</sub><br><br>1X<sub>1</sub> + 2X<sub>2</sub> &lt;= 4343<br>0X<sub>1</sub> + 4X<sub>2</sub> &lt;= 234<br>X<sub>1</sub> , X<sub>2</sub> &gt;= 0; </div>
            <div class="wlices--forma-padrao--bloco"><strong>Maximizar </strong>4X<sub>1</sub> + 5X<sub>2</sub> + 1F<sub>1</sub> + 1F<sub>2</sub><br><br>1X<sub>1</sub> + 2X<sub>2</sub> + 1F<sub>1</sub> = 4343<br>0X<sub>1</sub> + 4X<sub>2</sub> + 1F<sub>2</sub> = 234<br>X<sub>1</sub> , X<sub>2</sub> , F<sub>1</sub> , F<sub>2</sub> &gt;= 0</div>

            <form action="<?=URL_BASE?>/proglinear4" method="GET" class="form-horizontal">
                <div class="form-group">
                    <input type="hidden" name="passoapasso" value="S">
                    <button id="submit" name="submit" class="btn btn-primary">Ver passo-a-passo ></button>
                </div>
            </form>

            <form action="<?=URL_BASE?>/proglinear4" method="GET" class="form-horizontal">
                <div class="form-group">
                    <button id="submit" name="submit" class="btn btn-primary">Ver resultado ></button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require PATH_ABS.'/view/assets/snippets/foot.php'; ?>