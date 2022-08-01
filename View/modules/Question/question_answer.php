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
        <?php if(!count($arr_question) == 0): ?>
          <section class="section-questions">
            <form action="/answer/save" method="POST">
              <?php 
                $pos = 1;
              ?>
              <?php foreach($arr_question as $item): ?>
                <hr>
                <div class="card">
                  <div class="card-header">
                    <strong>Pergunta <?= $pos ?></strong>
                  </div>
                  <div class="card-body">
                    <p class="card-text">
                        <?= $item->descricao ?>
                    </p>
                    <div class="mb-3">
                      <input type="hidden" name="id_<?= $pos ?>" value="<?= $item->id ?>">
                      <textarea name="question_<?= $pos ?>" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                  </div>
                </div>
                <?php 
                  $pos++;
                ?>
              <?php endforeach; ?>
              <br>
              <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Enviar</button>
              </div>
            </form>
          </section>
        <?php else: ?>
          <p>Não existe nenhuma pergunta neste questionário.</p>
        <?php endif; ?>
    </main>
    <?php include "./View/includes/js_config.php" ?>
</body>
</html>