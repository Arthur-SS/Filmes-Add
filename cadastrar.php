<?php include "cabecalho.php" ?>

<body>
    <nav class="nav-extended  teal darken-1">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">Galeria</a></li>
                <li class="active"><a href="cadastrar.php">Cadastrar Filme</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1 class="sombra-text"> Filmes Add </h1>
        </div>
    </nav>
    <div class="row">
        <form action="inserirFilme.php" method="POST">
            <div class="col s6 offset-s3">
                <div class="card">
                    <div class="card-content black-text">
                        <span class="card-title center">Adicionar Filme</span>

                        <!-- Input título -->
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="titulo" type="text" class="validate" name="titulo" required>
                                <label for="titulo">Titulo do filme</label>
                            </div>
                        </div>
                        <!-- Input Sinopse -->
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="sinopse" class="materialize-textarea" name="sinopse" ></textarea>
                                <label for="sinopse">Sinopse</label>
                            </div>
                        </div>

                        <!-- Input nota -->
                        <div class="row">
                            <div class="input-field col s5">
                                <input id="nota" type="number" step="0.1" min="0" max="10" class="validate" name="nota" required>
                                <label for="nota" class="valign-wrapper">Nota <i class="material-icons">star</i></label>
                            </div>
                        </div>

                        <!-- Input Aqruivo capa -->
                        <div class="file-field input-field">
                            <div class="valign-wrapper">
                                <div class="btn">
                                    <span><i class="material-icons white-text">search</i></span>
                                    <input  type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <div class="input-field">
                                        <input  id="capa" class="file-path validate" type="text" name="poster" required>
                                        <label for="capa">Procurar imagem</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Enviar e cancelar -->
                    <div class="card-action">
                        <a class="waves-effect waves-dark white black-text btn" href="galeria.php">Cancelar</a>
                        <button type="submit" class="waves-effect waves-light btn" href="#">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>