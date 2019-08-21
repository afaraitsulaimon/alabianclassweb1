<?php 
    require_once("db-config.php");
    require_once("functions.php");
    require_once("process.php");
    $title = "Contact";
    require_once("templates/head.php") 
?>
  <body>

    <div class="container">
     <?php require_once("templates/header.php") ?>
     <?php require_once("templates/menu.php") ?>

      <section id="sectionTitle">
        <div class="pageTitle">
          <h1>Contact</h1>
        </div>
      </section>
      <!-- END OF PAGE TITLE -->
      <section id="content">
        <div class="row">
          <div class="col-sm-9 text-center" id="mainContent">
            <div class="row">
              <div class="col-sm-12">
                <?php 

                    if(isset($_GET["status"]) && $_GET["status"] == "success"){
                      echo "<div class='alert alert-success'>Record entered successfully</div>";
                    }elseif(isset($errorMessage)){
                      echo "<div class='alert alert-danger'>{$errorMessage}</div>";
                    }


                 ?>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" class="form" method="post">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="labelUser">Name*</label>
                        <input type="text" name="name" id="labelUser" value="<?php echo $name ?>" placeholder="Your Name" class="form-control">
                      </div>
                    </div>
                    <!-- END OF NAME -->
                   <div class="col-sm-6">
                      <div class="form-group">
                       <label for="labelPhone">Phone No*</label>
                       <input type="text" name="phoneNo" value="<?php echo $phoneNo ?>" id="labelPhone" placeholder="Your Phone" class="form-control">
                     </div>
                   </div>
                   <!-- END OF PHONE -->
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="labelEmail">Email*</label>
                        <input type="text" name="email" value="<?php echo $email ?>" id="labelEmail" class="form-control" placeholder="Your Email">
                      </div>
                    </div>
                    <!-- END OF EMAIL -->
                   <div class="col-sm-6">
                      <div class="form-group">
                       <label for="labelReferer">Referer</label>
                       <select id="labelReferer" class="form-control" name="referer">
                       	 <option value="Facebook">Facebook</option>
                       	 <option value="Twitter">Twitter</option>
                       	 <option value="Instagram">Instagram</option>
                         <option value="Nairaland">Nairaland</option>
                       	 <option value="" selected="selected">Please Choose</option>
                       </select>
                     </div>
                   </div>
                   <!-- END OF REFERER -->
                  </div>
                  <div class="row">
                  	<div class="col-sm-12">
                  		<div class="form-group">
                  			<label>Gender*</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  			<label>
                  				<input type="radio" name="gender" 
                          <?php if(isset($_POST["gender"]) && $_POST["gender"] == "Male") echo "checked" ?> value="Male">
                  				Male
                        </label>
                        <label>
                          <input type="radio" name="gender" 
                          <?php if(isset($_POST["gender"]) && $_POST["gender"] == "Female") echo "checked" ?>value="Female">
                          Female
                        </label>
                  		</div>
                  	</div>
                  </div>
                  <!-- END OF GENDER -->
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Education*</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>
                          <input type="checkbox" name="edu[]" value="UNIBEN">
                          UNIBEN
                        </label>
                          <label>
                            <input type="checkbox" name="edu[]" value="IMSU">
                            IMSU
                          </label>
                          <label>
                            <input type="checkbox" name="edu[]" value="FUTO">
                            FUTO
                          </label>
                          <label>
                            <input type="checkbox" name="edu[]" value="ALVAN">
                            ALVAN
                          </label>
                      
                      </div>
                    </div>
                  </div>
                  <!-- END OF EDUCATION -->
                
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="labelMessage">Message</label>
                        <textarea name="message" id="labelMessage" class="form-control"><?php echo $message ?> </textarea>
                      </div>
                      <input type="submit" name="send" value="Send" class="btn btn-primary">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <?php require_once("templates/sidebar.php") ?>
        </div>
      </section>
    </div>
   <?php require_once("templates/footer.php") ?>
   <?php require_once("templates/script.php") ?>
