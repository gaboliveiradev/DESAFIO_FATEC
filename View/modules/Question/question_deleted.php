<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/css_config.php" ?>
    <link rel="stylesheet" href="./../../../View/css/question_deleted.css">
    <title>AGA Tecnologia - Área Restrita - Ver Perguntas Deletadas</title>
</head>
<body>
    <header>
        <?php include "./View/includes/cabecalho.php" ?>
    </header>
    <main>
        <section>
            <div class="container-search">
                <form action="/question/deleted?query=" method="GET" class="form-search d-flex">
                    <input name="query" value="<?= (isset($_GET['query'])) ? $_GET['query'] : "" ?>" class="form-control me-2" type="search" placeholder="Buscar por palavra-chave" aria-label="Search">
                    <button class="btn-buscar btn btn-primary" type="submit">Buscar</button> 
                    <?php if(isset($_GET['query'])): ?>
                        <a href="/question/deleted/clear-query" class="btn-limpar btn btn-danger" type="submit">
                            <i class='bx bxs-x-square'></i>
                        </a>
                    <?php endif; ?>
                </form>
            </div>
            <div class="header-questions">
                <h4>Perguntas Deletadas [<?= count($arr_question_deleted) ?>]</h4>
            </div>
            <div class="container-questions">
                <?php foreach ($arr_question_deleted as $item): ?>
                    <div class="card">
                        <div class="card-body">
                            <?= $item->descricao ?>  
                            <div style="text-align: right;">
                                <a style="text-align: left;" href="/question/to-restore?id=<?= $item->id ?>">
                                    Restaurar
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                <?php if (count($arr_question_deleted) == 0) : ?>
                    <p>
                        Não existe nenhuma pergunta deletada.
                    </p>
                <?php endif ?>
            </div>
        </section>
    </main>

    <?php include "./View/includes/js_config.php" ?>
</body>
</html>