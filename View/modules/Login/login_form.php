<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/css_config.php" ?>
    <link rel="stylesheet" href="./../../../View/css/login_form.css">
    <title>AGA Tecnologia - Conectar-se a Área Restrita</title>
</head>

<body class="text-center flex">
    <main class="container-login container flex">
        <div class="form-login form-signin flex">
            <form action="/login/authenticate" method="POST">
                <img class="mb-4" src="./../../../View/assets/aga_logo.png" alt="" width="100" height="100">
                <h1 class="h3 mb-3 fw-normal"><strong>AGA</strong> Tecnologia - Área Restrita</h1>

                <div class="form-floating" class="col-md-6 offset-md-3">
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                </div>
                <br>
                <div class="form-floating">
                    <input name="senha" type="password" class="form-control" id="Senha" placeholder="Password">
                    <label for="floatingPassword">Senha</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <br>
                        <input name="lembrar-de-mim" type="checkbox"> Lembre de mim
                    </label>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Entrar</button>
                <a href="/question-manage" type="submit" class="btn btn-lg btn-danger">Voltar ao Questionário</a>
                <p class="mt-5 mb-3 text-muted">&copy; 2021–2022</p>
            </form>
        </div>
    </main>
    <?php include "./View/includes/js_config.php" ?>
</body>
</html>