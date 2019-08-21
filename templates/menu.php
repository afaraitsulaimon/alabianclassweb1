<section id="siteMenu">
  <div class="row">
    <nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-target="#mainNav" data-toggle="collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="nav navbar-nav">
          <li <?php if($title == "Home") echo 'class="active"' ?>><a href="index.php">Home</a></li>
          <li <?php if($title == "About") echo 'class="active"' ?>><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li <?php if($title == "Contact") echo 'class="active"' ?>><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </nav>
  </div>
</section>
<!-- END OF SITE MENU -->