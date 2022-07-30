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
                            <a style="text-align: left;" href="">
                                <i class='bx bxs-message-square-edit'></i>
                            </a>
                            <a href="">
                                <i class='bx bxs-trash'></i>
                            </a>
                        </div>
                    </p>
                </div>
                <hr>
            <?php endforeach ?>
        </section>
    </main>
    <?php include "./View/includes/js_config.php" ?>
</body>
</html>