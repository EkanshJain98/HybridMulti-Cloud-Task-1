<html>


<p>hello this is my terraform html based file</p>
<br>
<?php
  $cloudfront = "head -n1 mydesti.txt";
  $img_path = "https://"./$cloudfront."/spider_man.jpg";
  echo "<img src='${img_path}' width=100 height=100>";
?>
    </html>
