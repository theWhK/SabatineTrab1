<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="#"><strong>sbtnx</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item <?php if ($paginaAtual == 'Home') echo 'active'; ?>">
            <a class="nav-link" href="#">Página inicial <span class="sr-only">(página atual)</span></a>
        </li>
        <li class="nav-item <?php if ($paginaAtual == 'Programação Linear') echo 'active'; ?>">
            <a class="nav-link" href="#">Prog. Linear</a>
        </li>
        <li class="nav-item <?php if ($paginaAtual == 'Programação Dinâmica') echo 'active'; ?>">
            <a class="nav-link" href="#">Prog. Dinâmica</a>
        </li>
        </ul>
    </div>
</nav>