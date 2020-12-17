<nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
  <a class="navbar-brand text-light font-weight-bold" href="/">DCGrupos</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link text-light" href="home">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle  text-light" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Grupos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Whatsapp">Whatsapp</a>
          <a class="dropdown-item" href="Facebook">Facebook</a>
          <a class="dropdown-item" href="Telegram">Telegram</a>
          <a class="dropdown-item" href="Discord">Discord</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="about">Nosotros</a>
      </li>
      <?php
        if (isset($_SESSION['username'])) {
          echo "
            <li class='nav-item dropdown'>
              <a class='nav-link dropdown-toggle text-light' href='#' id='navbarDropdownMenuLink' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
              ".$_SESSION['username']."</a>
              <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
                <a class='dropdown-item' href='logout'>Logout</a>
              </div>
            </li>
          ";
        }else{
          echo "
            <li class='nav-item'>
              <a class='nav-link text-light' href='login'>Login</a>
            </li>
          ";
        }
      ?>
      <li class="nav-item">
        <a class="btn btn-danger text-light" href="publicar">Publicar</a>
      </li>
    </ul>
  </div>
</nav>