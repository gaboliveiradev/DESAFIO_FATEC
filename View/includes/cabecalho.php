<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./../../../View/assets/aga_logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            <b>AGA</b> Tecnologia
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Questionário</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Perguntas
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/question-manage">Visualizar</a></li>
                <li><a class="dropdown-item" href="/question/form">Cadastrar</a></li>
              </ul>
            </li>
            <?php if($_SESSION['user']->adm == "S"): ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Funcionários
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Visualizar</a></li>
                  <li><a class="dropdown-item" href="#">Cadastrar</a></li>
                </ul>
              </li>
            <?php endif; ?>
          </ul>
          <form class="d-flex">
            <?php if(isset($_SESSION['user'])): ?>
              <a href="/logout?exit=true" class="btn btn-light" type="submit">Logout</a>
            <?php else: ?>
              <a href="/login" class="btn btn-light" type="submit">Área Restrita</a>
            <?php endif; ?>
          </form>
        </div>
    </div>
</nav>