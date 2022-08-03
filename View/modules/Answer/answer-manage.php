<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/css_config.php" ?>
    <link rel="stylesheet" href="./../../../View/css/answer_manage.css">
    <title>AGA Tecnologia - Área Administrativa | Gerenciar Respostas</title>
</head>

<body>
    <header>
        <?php include "./View/includes/cabecalho.php" ?>
    </header>
    <main>
        <section>
            <div class="header-questions">
                <h4>
                    Respostas do Questionário [<?= count($arr_answer_question) ?>]
                </h4>
            </div>
            <div class="filter-questions">
                <div class="container text-left">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle text-decoration-none" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Filtrar por Pergunta
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <?php foreach($arr_answer_question_filter as $item): ?>
                            <li><a class="nav-link text-dark" href="/answer-manage?filter=<?= $item->id?>"><?= $item->descricao ?></a></li>
                        <?php endforeach; ?>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="nav-link text-danger" href="/answer-manage/clear-filter">Limpar Filtros</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
            <div class="container-questions">
                <?php foreach ($arr_answer_question as $item): ?>
                    <div class="card">
                      <div class="card-body">
                        <p>
                            <strong>Pergunta:</strong> <br> <?= $item->pergunta ?>
                        </p>
                        <p class="card-text">
                            <strong>Resposta:</strong> <br> <?= $item->resposta ?>
                        </p>
                      </div>
                      <div class="card-footer text-muted">
                        <?= $item->data_envio ?>
                      </div>
                    </div>
                <?php endforeach ?>
                <?php if(count($arr_answer_question) == 0 || count($arr_answer_question_filter) == 0): ?>
                    <p>Não existe nenhuma resposta cadastrada no momento.</p>
                <?php endif; ?>
            </div>
        </section>
    </main>
    <?php include "./View/includes/js_config.php" ?>
</body>
</html>