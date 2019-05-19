<?php
  session_start();
  require_once 'php/Dbconnect.php';
  require 'php/show_house.php';
  require 'php/myfunctions.php';

  checkSession();
?>

<?php get_header() ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title><?php bloginfo( 'title' );?></title>
      <?php wp_head() ?>
    </head>
    <body>
      <!--Navigation-->
      <header>
        <div class="nav">
          <ul>
            <a href="<?php echo site_url( '/view-house' ); ?>"><li class="selected">View Property</li></a>
            <a href="<?php echo site_url( '/add-house' ); ?>"><li>Add Property</li></a>
            <!--<a href="<?php// echo site_url( '/update-house' ); ?>"><li>Update Property</li></a>-->
            <a href="<?php echo site_url( '/logout' ); ?>?logout"><li>Log out</li></a>
          </ul>
        </div>

        <div class="hidden-nav">
          <button onclick="myFunction()" class="button3"> &#9776;</button>
          <div id="myarrow" class="arrow-up"></div>
          <div id="myDropdown" class="dropdown-cont">
            <a href="<?php echo site_url( '/view-house' ); ?>" class="selected-dropdown" >View Property</a>
            <a href="<?php echo site_url( '/add-house' ); ?>">Add Property</a>
            <!--<a href="<?php //echo site_url( '/update-house' ); ?>">Update Property</a>-->
            <a href="<?php echo get_template_directory_uri()?>/php/logout.php?logout">Log out</a>
          </div>
        </div>
      </header>

      <main>
        <section class="my-title">
          <h1 class="main-title">Hi, <?php echo $_SESSION['Username']."."; ?></h1>
        </section>

        <section class="mydata">
          <table>
            <thead>
              <tr>
                <th>Number</th>
                <th>Area</th>
                <th>Location</th>
                <th>Category</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($row = mysqli_fetch_array($query)): ?>
                <tr>
                  <td><?php echo $row['ID'];?></td>
                  <td><?php echo $row['Name'];?></td>
                  <td><?php echo $row['Area'];?></td>
                  <td><?php echo $row['Category'];?></td>
                  <td> <a href="<?php echo site_url('/update-house');?>"> <button type="button" name="buttonUpdate" class="buttonUpdate">Update Info</button> </a> </td>
                </tr>
                <?php $count--;?>
              <?php endwhile;?>
            </tbody>
          </table>
        </section>
      </main>
    </body>
  </html>

<?php get_footer() ?>
