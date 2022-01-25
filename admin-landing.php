<?php
  session_start();

  if (!isset($_SESSION['loggedIN'])) {
    # code...
    header('Location: admin-login.php');
    exit();
    
  }
  include 'modules/admin-top-nav.php'  
?>
<link rel="stylesheet" href="./css/admin-landing.css">

    <main id="main">
      <section id="manage-news">
        <a href="#" id="manage-news-button" class="manage-button">Manage News</a>
        <div id="news-buttons" class="news-buttons">
        <a href="./add-news.php" class="manage-button">Add News</a>
        <a href="./edit-news.php" class="manage-button">Edit News</a>
        <a href="#" class="manage-button">Delete News</a>
      </div>
      </section>
      <section id="manage-users">
        <a href="#" id="manage-user-button"  class="manage-button">Manage Users</a>
        <div id="user-buttons" class="user-buttons">
        <a href="#" class="manage-button">Add Users</a>
        <a href="#" class="manage-button">View Users</a>
        <a href="#" class="manage-button">Delete Users</a>
      </div>
      </section>
    </main>

    <script src="./js/admin-landing.js"></script>
    <?php
      include 'modules/footer.php';
    ?>