<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic PHP Scraper</h2>
  <form action="link.php" method = "post">
    <div class="form-group">
      <label >Article finder:</label>
      <input  class="form-control" id="link" name = "link" placeholder="Enter link">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
   <br> 
  <form action="image.php" method = "post">
    <div class="form-group">
      <label >Image finder:</label>
      <input  class="form-control" id="img" name = "img" placeholder="Enter image link">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>

  <br> 
  <form action="text.php" method = "post">
    <div class="form-group">
      <label >Text finder:</label>
      <input  class="form-control" id="text" name = "text" placeholder="Enter text link">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php
    ////http://www.palmbeachcodeschool.com/news/
    //https://catswhocode.com/programming-blogs/
    //https://www.google.com/search?rlz=1C1GCEA_enUS853US853&biw=1366&bih=608&tbm=isch&sxsrf=ACYBGNTXl1Ex0qTTQIl3JZSew0z2IDTs7Q%3A1573618005694&sa=1&ei=VYHLXeD3KYiB5wL-76TICw&q=logo+ideas&oq=logo+ideas&gs_l=img.3..0l10.29334.31392..31557...0.0..0.66.547.10......0....1..gws-wiz-img.......0i67.aToPW2sP5U4&ved=0ahUKEwig9vbxp-blAhWIwFkKHf43CbkQ4dUDCAc&uact=5
?>

</body> 
</html>