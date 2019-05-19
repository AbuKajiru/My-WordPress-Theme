<?php
  session_start();
  require "php/myfunctions.php";
  
  if (checkSession("yes return") == true) {
    header("Location: view-house");
  }elseif (checkSession("yes return") == false) {
    //do nothing
  }
?>

<?php get_header() ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <?php wp_head() ?>
  </head>
  <body>

    <!--Navigation-->
    <header>
      <div class="nav">
        <ul>
          <a href="<?php echo site_url( '/home' ) ?>"><li class="selected">Home</li></a>
          <a href="<?php echo site_url( '/sign-up'); ?>"><li>Sign Up</li></a>
        </ul>
      </div>

      <div class="hidden-nav">
        <button onclick="myFunction()" class="button3"> &#9776;</button>
        <div id="myarrow" class="arrow-up"></div>
        <div id="myDropdown" class="dropdown-cont">
          <a href="<?php echo site_url( '/home' ) ?>" class="selected-dropdown">Home</a>
          <a href="<?php echo site_url( '/sign-up'); ?>">Contact</a>
        </div>
      </div>
    </header>

    <main>
      <section class="my-title">
        <h1 class="main-title">Abu's Real Estate Business.</h1>
        <h4 class="sub-title"> "All your needs in one place."</h4>
      </section>

      <section class="content">
        <div class="content-container">
          <?php if ($_SESSION['alert']!=''):?>
            <div class="alert">
              <p><?php echo $_SESSION['alert'];?></p>
            </div>
          <?php endif;?>

          <div class="content-notice">
            <p>Please Login Below To Access The System.</p>
          </div>
          <div class="content-login">
            <form class="content-form" action="<?php bloginfo( 'template_url' )?>/php/login.php" method="post">
              <label for="home-username"> Username: </label><br>
              <input id="home-username" type="text" name="username" placeholder= "Choose your username..." required><br>
              <label for="home-password"> Password: </label><br>
              <input id="home-password" type="password" name="password" placeholder="Enter security key values..." required><br>
              <input type="submit" name="submit" value="Login">
            </form>
            <div id="manage-login">
              <p class="manage-login-text">Don't have an account? <a href=" <?php echo site_url( '/sign-up' ) ?> ">Create Account</a></p>
            </div>
          </div>
        </div>
      </section>
    </main>

  </body>
</html>

<?php get_footer() ?>
