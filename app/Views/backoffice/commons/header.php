<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">REGIME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("backoffice/BoUserController/list") ?>" >
          UTILISATEURS
        </a>
      </li>
      <li>
        <a class="nav-link" href="<?php echo base_url("backoffice/BoRegimeController/list") ?>" >
          REGIMES
        </a>
      </li>
      <li>
        <a class="nav-link" href="<?php echo base_url("backoffice/BoActiviteController/list") ?>" >
          ACTIVITES
        </a>
      </li>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">LISTE</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-success my-2 my-sm-0" href="<?php echo base_url("UserController/logout") ?>">Logout</a>
    </form>
  </div>
</nav>
