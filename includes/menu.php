<?php
include 'conn_banco.php';
?>

<div class="header-menu">
    <hr>
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">

            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0 snip1143">
                    <li class="nav-item">
                        <a class="nav-link active" href="../index.html" aria-current="page">Home<span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./galeria.html" aria-current="page">Galeria<span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./quemsomos.html" aria-current="page">Quem somos<span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./contato.html" aria-current="page">Contato<span class="visually-hidden">(current)</span></a>
                    </li>








                    <li class="nav-item dropdown">
                        <?php while ($categorias = $query_categories->fetch_assoc()) { ?>
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <select name="filtro" id="categorias">
                                    <option id="options-categorias" <?php if (isset($_GET['filtro']) && $_GET['filtro'] == $categorias['id_categorias']) echo "selected"; ?> value="<?php echo $categorias['id_categorias']; ?>">
                                        <?php echo $categorias['nome_categorias']; ?></option>
                                </select>
                            <?php } ?>
                            </div>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="O que você procura?">
                    <button class="btn btn-outline my-2 my-sm-0" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg></button>
                </form>
            </div>
        </div>
    </nav>
    <div class="topo-galeria container">
        <i><img src="../images/bolobanner.png" width="100%"></i>
        <!--fundo-->
    </div>
</div>