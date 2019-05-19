<?php
  session_start();
  require 'php/myfunctions.php';

  checkSession();
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
            <a href="<?php echo site_url( '/view-house' ); ?>"><li>View Property</li></a>
            <a href="<?php echo site_url( '/add-house' ); ?>"><li class="selected">Add Property</li></a>
            <!--<a href="<?php //echo site_url( '/update-house' ); ?>"><li>Update Property</li></a>-->
            <a href="<?php echo site_url( '/logout' ); ?>"><li>Log out</li></a>
          </ul>
        </div>

        <div class="hidden-nav">
          <button onclick="myFunction()" class="button3"> &#9776;</button>
          <div id="myarrow" class="arrow-up"></div>
          <div id="myDropdown" class="dropdown-cont">
            <a href="<?php echo site_url( '/view-house' ); ?>">View Property</a>
            <a href="<?php echo site_url( '/add-house' ); ?>" class="selected-dropdown">Add Property</a>
            <!--<a href="<?php //echo site_url( '/update-house' ); ?>">Update Property</a>-->
            <a href="<?php echo site_url( '/logout' ); ?>">Log out</a>
          </div>
        </div>
      </header>

      <main>
        <section class="my-title">
          <h1 class="main-title">Add a House To Your Inventory</h1>
        </section>

        <section class="content">
          <div class="content-container">
            <div class="content-notice">
              <p>Please Fill Out The Details Below.</p>
            </div>
            <div class="content-login">
              <form class="content-form" action="<?php bloginfo( 'template_url' ) ?>/php/add-house.php" method="post" enctype="multipart/form-data">
                <label for="prop-name"> Name of Property: </label><br>
                <input id="prop-name" type="text" name="prop-name" placeholder= "Enter Property Name..." required ><br>
                <label for="location"> Area of Location: </label><br>
                <input id="location" type="text" name="location" placeholder= "Area of Location..." required ><br>
                <label for="category">Category</label><br>
                <select id="category" name="category">
                  <option value="sold">Sold</option>
                  <option value="in the market">In the Market</option>
                </select>
                <input type="submit" name="submit" value="Submit">
              </form>
            </div>
          </div>
        </section>
      </main>
    </body>
  </html>

<?php get_footer() ?>
