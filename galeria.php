<?php include "cabecalho.php" ?>

<?php

$bd = new SQLite3("filmes.db");

$sql = "SELECT * FROM filmes";
$filmes = $bd->query($sql);


?>

<body>
    <nav class="nav-extended  teal darken-1">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li class="active"><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar Filme</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1 class="sombra-text"> Filmes Add </h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent teal darken-4">
                <li class="tab"><a class="active" href="#todos">Todos</a></li>
                <li class="tab"><a href="#assistidos">Assistidos</a></li>
                <li class="tab disabled"><a href="#favoritos">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">

            <?php while ($filme = $filmes->fetchArray()) : ?>
                <div class="col s12 m6 l3">
                    <div class="hidencard card hoverable">
                        <div class="card-image">
                            <img src="<?= $filme["poster"] ?>">
                            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
                        </div>
                        <div class="card-content">
                            <span class="card-title"><?= $filme["titulo"] ?></span>
                            <p class="valign-wrapper"><i class="material-icons yellow-text">star</i><?= $filme["nota"] ?></p>
                            <p class="hidenS" ><?= $filme["sinopse"] ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

        </div>
    </div>


</body>

<?php if(isset($_GET["msg"])) : ?>
<script>
    M.toast({
        html: '<?= $_GET["msg"] ?>'
    });
</script>
<?php endif ?>

</html>