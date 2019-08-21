<?php
    $title = "About"; 
    require_once("templates/head.php") ?>
  <body>

    <div class="container">
     <?php require_once("templates/header.php") ?>
     <?php require_once("templates/menu.php") ?>
     
      <section id="sectionTitle">
        <div class="pageTitle">
          <h1>About Us</h1>
        </div>
      </section>
      <!-- END OF PAGE TITLE -->
      <section id="content">
        <div class="row">
          <div class="col-sm-9 text-center" id="mainContent">
            <div class="row">
              <div class="col-sm-4">
                <img src="images/mark.jpg" class="img-circle">
                <h2>Mark Zuckerbarg</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci eos nam, iusto, id debitis nesciunt delectus officiis porro incidunt voluptatibus aperiam sunt, beatae voluptatum saepe cum reprehenderit optio quisquam. Tempora.
                </p>
                <a href="#" class="btn btn-primary">Readmore</a>
              </div>
              <div class="col-sm-4">
                <img src="images/jerry.jpg" class="img-circle">
                <h2>Jerry Jang</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci eos nam, iusto, id debitis nesciunt delectus officiis porro incidunt voluptatibus aperiam sunt, beatae voluptatum saepe cum reprehenderit optio quisquam. Tempora.
                </p>
                <a href="#" class="btn btn-primary">Readmore</a>
              </div>
              <div class="col-sm-4">
                <img src="images/mayer.jpg" class="img-circle">
                <h2>Marrissa Mayer</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci eos nam, iusto, id debitis nesciunt delectus officiis porro incidunt voluptatibus aperiam sunt, beatae voluptatum saepe cum reprehenderit optio quisquam. Tempora.
                </p>
                <a href="#" class="btn btn-primary">Readmore</a>
              </div>
            </div>
          </div>
          <?php require_once("templates/sidebar.php") ?>
        </div>
      </section>
    </div>
    <?php require_once("templates/sidebar.php") ?>
    <?php require_once("templates/script.php") ?>
