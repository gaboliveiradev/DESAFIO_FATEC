<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/css_config.php" ?>
    <link rel="stylesheet" href="./../../../View/css/question_view.css">
    <title>AGA Tecnologia - Área Administrativa | Visualizar Perguntas</title>
</head>
<body>
    <header>
        <?php include "./View/includes/cabecalho.php" ?>
    </header>

    <main>
        <section>

        </section>
        <section>
            <div class="container-search">
                <form class="form-search d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar por palavra-chave" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </form>
            </div>
            <div class="header-questions">
                <h4>Perguntas Criadas</h4>
            </div>
            <div class="container-questions">
                <?php foreach ($model->arr_question as $item): ?>
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
                <?php if (count($model->arr_question) == 0) : ?>
                    <p>
                        <a href="/question/form">Não existe nenhuma pergunta registrada em nosso questionário, clique aqui para cadastrar sua primeira pergunta.</a>
                    </p>
                <?php endif ?>
            </div>
        </section>
    </main>
    <?php include "./View/includes/js_config.php" ?>
</body>
</html>