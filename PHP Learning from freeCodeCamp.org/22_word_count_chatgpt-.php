<!DOCTYPE html>
<html>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <textarea name="textInput"></textarea>
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
  <?php
    if (isset($_POST["submit"])) {
      $text = $_POST["textInput"];
      $words = explode(" ", $text);
      $word_count = count($words);
      echo "<p>Word Count: $word_count</p>";
    }
  ?>
</body>
</html>
