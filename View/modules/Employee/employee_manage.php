<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./View/includes/css_config.php" ?>
    <link rel="stylesheet" href="./../../../View/css/employee_manage.css">
    <title>AGA Tecnologia - Área Restrita | Gerenciar Funcionários</title>
</head>
<body>
    <header>
        <?php include "./View/includes/cabecalho.php" ?>
    </header>
    <main class="container-employee">
        <section class="section-header">
            <h1>Funcionários</h1>
        </section>
        <section class="section-employees">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NOME</th>
              <th scope="col">EMAIL</th>
              <th scope="col">ADM</th>
              <th scope="col">AÇÃO</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($arr_employee as $item): ?>
                <tr>
                  <th scope="row"><?= $item->id ?></th>
                  <td><?= $item->nome ?></td>
                  <td><?= $item->email ?></td>
                  <?php $item->adm = ($item->adm == "S") ? "<i class='bx bx-check'></i>" : "<i class='bx bx-x'></i>" ?>
                  <td><?= $item->adm ?></td>
                  <td>
                    <a href=""><i class='bx bxs-pencil'></i></a>
                    <a href=""><i class='bx bxs-trash'></i></a>
                  </td>
                </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        </section>
    </main>
    <?php include "./View/includes/js_config.php" ?>
</body>
</html>