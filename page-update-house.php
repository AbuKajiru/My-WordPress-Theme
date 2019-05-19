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
            <a href="<?php echo site_url( '/add-house' ); ?>"><li>Add Property</li></a>
            <a href="<?php echo site_url( '/update-house' ); ?>"><li class="selected">Update Property</li></a>
            <a href="<?php echo site_url( '/logout' ); ?>"><li>Log out</li></a>
          </ul>
        </div>

        <div class="hidden-nav">
          <button onclick="myFunction()" class="button3"> &#9776;</button>
          <div id="myarrow" class="arrow-up"></div>
          <div id="myDropdown" class="dropdown-cont">
            <a href="<?php echo site_url( '/view-house' ); ?>">View Property</a>
            <a href="<?php echo site_url( '/add-house' ); ?>">Add Property</a>
            <a href="<?php echo site_url( '/update-house' ); ?>" class="selected-dropdown">Update Property</a>
            <a href="<?php echo site_url( '/logout' ); ?>">Log out</a>
          </div>
        </div>
      </header>

      <main>
        <section>
          <p>Add a House to your inventory</p>
        </section>

        <section class="content">
          <div class="content-container">
            <div class="content-notice">
              <p>To Update, Change the Values Below.</p>
            </div>
            <div class="content-login">
              <form class="content-form" action="#" method="post">
                <label for="prop-name"> Name of Property: </label><br>
                <input id="prop-name" type="text" name="prop-name" placeholder= "Enter Property Name..." required ><br>
                <label for="location"> Area of Location: </label><br>
                <input id="location" type="text" name="location" placeholder= "Area of Location..." required ><br>
                <label for="prop-image"> Upload Image File: </label><br>
                <input id="prop-image" type="file" name="prop-image" placeholder= "Select File..." required ><br>
                <label for="category">Category</label><br>
                <select id="category" name="category">
                  <option value="sold">Sold</option>
                  <option value="in the market">In the Market</option>
                </select>
                <input type="submit" name="submit" value="Update">
              </form>
            </div>
          </div>
        </section>
      </main>
    </body>
  </html>

<?php get_footer() ?>
