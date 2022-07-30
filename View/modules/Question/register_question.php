<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/css_config.php" ?>
    <link rel="stylesheet" href="./../../../View/css/register_question.css">
    <title>AGA Tecnologia - Área Administrativa | Cadastrar Perguntas</title>
</head>
<body>
    <header>
        <?php include "./View/includes/cabecalho.php" ?>
    </header>
    <main class="container-question flex">
        <form action="/question/save" method="POST" class="form-question">
            <div class="form-floating">
              <textarea name="descricao" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
              <label for="floatingTextarea2">Escreva sua pergunta...</label>
            </div>
            <div class="d-grid gap-2">
              <br>
              <button class="btn btn-dark" type="submit">Registrar</button>
            </div>
        </form>
    </main>
    <?php include "./View/includes/js_config.php" ?>
</body>
</html>