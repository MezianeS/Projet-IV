<nav class="navbar navbar-expand-lg navbar-dark navbar--custom">
  <div class="container-fluid">
    <a class="navbar-brand" href=" <?php echo URLROOT; ?> "> <?php echo SITENAME; ?>  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href=" <?php echo URLROOT; ?> ">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mr-auto" href=" <?php echo URLROOT; ?>/pages/about">A propos</a>
        </li>
      </ul>


      <ul class="navbar-nav">
        <?php if(isset($_SESSION['user_id'])) :  ?>
          <li class="nav-item">
              <a class="nav-link" aria-current="page" href='<?php if(isLoggedInAdmin() == true) { ?> <?php echo URLROOT; ?>/admins/index"><?php } ?>'
              >Bonjour <?php echo $_SESSION['user_name']; ?>  </a>
              </li>
          <li class="nav-item">
              <a class="nav-link" aria-current="page" href=" <?php echo URLROOT; ?>/users/logout ">Déconnexion</a>
              </li>
        <?php else : ?>
             <li class="nav-item">
              <a class="nav-link" aria-current="page" href=" <?php echo URLROOT; ?>/users/register ">S'inscrire</a>
              </li>
              <li class="nav-item">
             <a class="nav-link" href=" <?php echo URLROOT; ?>/users/login">Se connecter</a>
            </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>