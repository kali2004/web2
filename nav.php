<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php">Hlavní menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="info.php">info <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kontakty.php">kontakty</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mapa.php">mapa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="galerie.php">galerie</a>
      </li>
    </ul>
    <span class="navbar-text">
      <?php 
        include "time.php";
      ?>
    </span>
  </div>
</nav>