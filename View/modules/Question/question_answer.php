<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/css_config.php" ?>
    <link rel="stylesheet" href="./../../../View/css/question_answer.css">
    <title>AGA Tecnologia - Responder Questionário | Feedback</title>
</head>

<body>
    <header>
        <?php include "./View/includes/cabecalho.php" ?>
    </header>
    <main class="container-question">
        <section class="section-header">
            <h1>Questionário</h1>
        </section>
        <section class="section-questions">
            <?php foreach($arr_question as $item): ?>
                <hr>
                <div class="card">
                  <div class="card-header">
                    <strong>Pergunta</strong>
                  </div>
                  <div class="card-body">
                    <p class="card-text">
                        <?= $item->descricao ?>
                    </p>
                    <div class="mb-3">
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                  </div>
                </div>
            <?php endforeach; ?>
        </section>
    </main>
    <?php include "./View/includes/js_config.php" ?>
</body>
</html>