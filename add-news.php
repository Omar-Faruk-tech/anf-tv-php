
<?php 
  include 'modules/top-nav.php'
?>

<link rel="stylesheet" href="css/add-news.css">
  <main id="add-news-main">
    <section id="form-section">
      <form id="form">
        <h2 id="form-header">
          Add News
        </h2>
        <input type="text" name="subject" placeholder="Subject" id="subject-input">
        <input list="categories" name="category" placeholder="category" id="category">
        <datalist id="categories">
          <option value="Politics">
          <option value="Sports">
          <option value="Culture">
          <option value="Business">
          <option value="Entertainment">
          <option value="Science/ Technology">
        </datalist>
        <div id="checkboxes">
        <label for="top-story">Top story</label>
        <input type="checkbox" name="top-story" id="top-story">
        <label for="editors-pick">Editor's pick</label>
        <input type="checkbox" name="editors-pick" id="editors-pick">
        </div>
        <div id="image">
          <label for="image" id="image-upload-label">Image</label>
          <input type="file" id="image-upload-input" name="image" accept="image/*">
        </div>
        <div id="video">
          <label for="video" id="video-upload-label">Video</label>
          <input type="file" id="video-upload-input" name="video" accept="video/*">
      </div>
      <textarea name="news" id="content" placeholder="News content"></textarea>
      <div id="submit-container">
      <input type="submit" value="Add News" id="add-news-submit">
      </div>
      </form>
    </section>
  </main>
  <script src="./js/index.js"></script>
<?php
    include 'modules/footer.php'
?>