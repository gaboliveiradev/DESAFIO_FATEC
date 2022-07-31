<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/css_config.php" ?>
    <link rel="stylesheet" href="./../../../View/css/question_manage.css">
    <title>AGA Tecnologia - Área Administrativa | Visualizar Perguntas</title>
</head>
<body>
    <header>
        <?php include "./View/includes/cabecalho.php" ?>
    </header>

    <main>
        <section>
            <div class="container-search">
                <form action="/question-manage?query=" method="GET" class="form-search d-flex">
                    <input name="query" value="<?= (isset($_GET['query'])) ? $_GET['query'] : "" ?>" class="form-control me-2" type="search" placeholder="Buscar por palavra-chave" aria-label="Search">
                    <button class="btn-buscar btn btn-primary" type="submit">Buscar</button> 
                    <?php if(isset($_GET['query'])): ?>
                        <a href="/question/clear-query" class="btn-limpar btn btn-danger" type="submit">
                            <i class='bx bxs-x-square'></i>
                        </a>
                    <?php endif; ?>
                </form>
            </div>
            <div class="header-questions">
                <h4>Perguntas do Questionário [<?= count($arr_question) ?>]</h4>
            </div>
            <div class="container-questions">
                <?php foreach ($arr_question as $item): ?>
                    <div class="card">
                        <div class="card-body">
                            <?= $item->descricao ?>  
                            <div style="text-align: right;">
                                <a style="text-align: left;" href="/question/form?id=<?= $item->id ?>">
                                    Editar
                                </a>
                                <a href="/question/delete?id=<?= $item->id ?>">
                                    <i class='bx bxs-trash'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                <?php if (count($arr_question) == 0) : ?>
                    <?php if(isset($_GET['query'])): ?>
                        <p>
                            <a href="/question/clear-query">Não foi possível encontrar nenhuma pergunta com a palavra-chave ["<?= $_GET['query'] ?>"]. Clique aqui para limpar a sua busca</a>
                        </p>
                    <?php else: ?>
                        <p>
                            <a href="/question/form">Não existe nenhuma pergunta registrada em nosso questionário, clique aqui para cadastrar sua primeira pergunta.</a>
                        </p>
                    <?php endif; ?>
                <?php endif ?>
            </div>
        </section>
    </main>
    <?php include "./View/includes/js_config.php" ?>
</body>
</html>