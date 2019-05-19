<?php
  session_start();
  require 'php/myfunctions.php';

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
            <a href="<?php echo site_url( '/add-house' ) ?>"><li>Home</li></a>
            <a href="<?php echo site_url( '/sign-up'); ?>"><li class="selected">Sign Up</li></a>
          </ul>
        </div>

        <div class="hidden-nav">
          <button onclick="myFunction()" class="button3"> &#9776;</button>
          <div id="myarrow" class="arrow-up"></div>
          <div id="myDropdown" class="dropdown-cont">
            <a href="<?php echo site_url( '/home' ) ?>">Home</a>
            <a href="<?php echo site_url( '/sign-up'); ?>" class="selected-dropdown">Contact</a>
          </div>
        </div>
      </header>

      <main>
        <section class="my-title">
          <h1 class="main-title">Create An Account.</h1>
        </section>

        <section class="content">
          <div class="content-container">
            <div class="content-notice">
              <p>Please Login Below To Access The System.</p>
            </div>
            <div class="content-login">
              <form class="content-form" action="<?php bloginfo( 'template_url' )?>/php/create-account.php" method="post">
                <label for="sign-firstname"> First Name: </label><br>
                <input id="sign-firstname" type="text" name="fname" placeholder="Enter Your First Name..." required>
                <label for="sign-lastname"> Last Name: </label><br>
                <input id="sign-lastname" type="text" name="lname" placeholder="Enter Your Last Name..." required>
                <label for="sign-username"> Username: </label><br>
                <input id="sign-username" type="text" name="username" placeholder="Enter your username here..." required><br>
                <label for="sign-password"> Password: </label><br>
                <input id="sign-password" type="password" name="password" placeholder="Choose Your Password..." required><br>
                <label for="sign-password-repeat"> Repeat Password: </label><br>
                <input id="sign-password-repeat" type="password" name="password-repeat" placeholder="Repeat Your Password..." required><br>
                <input id="sign-submit" type="submit" name="submit" value="Login">
              </form>
              <div id="manage-login">
                <p class="manage-login-text">Already have an account? <a href="<?php echo site_url( '/home' )?>">Sign In</a></p>
              </div>
            </div>
          </div>
        </section>

      </main>
    </body>
  </html>

<?php get_footer() ?>
