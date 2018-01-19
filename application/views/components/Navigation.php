<nav class="navbar navbar-light navbar-expand-md navigation fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Rai.com.ng</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>">home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>gallery">gallery</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              services
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="<?php echo base_url(); ?>services/cars">Car Sales</a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>services/maintenance">Car Maintenance</a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>services/carparts">Car Parts Sales</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>contact">contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>login">login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>