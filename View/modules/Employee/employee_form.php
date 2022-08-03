<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/css_config.php" ?>
    <link rel="stylesheet" href="./../../../View/css/employee_form.css">
    <title>AGA Tecnologia - Área Restrita | Cadastrar Funcionário</title>
</head>
<body>
    <header>
        <?php include "./View/includes/cabecalho.php" ?>
    </header>
    <main class="container-employee flex">
        <form action="/employee/save" method="POST" class="form-employee">
            <div class="text-center">
                <h3>AGA Tecnologia - Cadastrar Funcionário</h3>
                <hr>
            </div>
            <input type="hidden" name="id" value="<?= $model->id ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input value="<?= $model->nome ?>" name="name_employee" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input value="<?= $model->email ?>" name="email_employee" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <?php if(!isset($_GET['id'])): ?>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input value="<?= $model->pass ?>" name="password_employee" type="password" class="form-control" id="exampleInputPassword1">
                </div>
            <?php endif; ?>
            <div class="mb-3 form-check">
                <input name="adm_employee" value="S" type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Administrador</label>
            </div>
            <div class="d-grid gap-2">
                <?php $msg = (!isset($_GET['id'])) ? "Registrar" : "Atualizar" ?>
                <button class="btn btn-dark" type="submit"><?= $msg ?></button>
            </div>
        </form>
    </main>
    <?php include "./View/includes/js_config.php" ?>
</body>
</html>