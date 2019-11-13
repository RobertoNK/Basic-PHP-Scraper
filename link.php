<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    
<div class="container">
<?php

include('./html/simple_html_dom.php');
require_once("main_index.php");
//http://www.palmbeachcodeschool.com/news/
$websiteUrl = "http://".$_POST["link"];

$html = file_get_html($websiteUrl);

$urls = array();
foreach($html->find('.uabb-blog-post-section') as $postDiv){
    
    foreach($postDiv -> find('a') as $a){
        $urls [] = $a ->attr['href'];
       }
       
}
echo "<h3>";
echo "links for website ".$websiteUrl.": "."<br>";
echo "</h3>"."<br>";
foreach($urls as $element){
    //echo $element;
    echo "<a href=".$element.">".$element."</a>"."<br>";
}

?>
</div>
</body>
</html>