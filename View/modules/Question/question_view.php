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
    <main class="container-question flex">
        <section class="section-question">
            <h5>Perguntas criadas</h5>
            <hr>
            <?php foreach ($model->arr_question as $item): ?>
                <div>
                    <p>
                        <?= $item->id ?> - <?= $item->descricao ?>
                        <div style="text-align: right;">
                            <a style="text-align: left;" href="/question/form?id=<?= $item->id ?>">
                                Editar
                            </a>
                            <a href="/question/delete?id=<?= $item->id ?>">
                                <i class='bx bxs-trash'></i>
                            </a>
                        </div>
                    </p>
                </div>
                <hr>
            <?php endforeach ?>
            <?php if (count($model->arr_question) == 0) : ?>
                <p>
                    <a href="/question/form">Não existe nenhuma pergunta registrada em nosso questionário, clique aqui para cadastrar sua primeira pergunta.</a>
                </p>
            <?php endif ?>
        </section>
    </main>
    <?php include "./View/includes/js_config.php" ?>
</body>
</html>