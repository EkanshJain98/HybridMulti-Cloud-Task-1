<html>
<body>
<h1>EKANSH JAIN</h1>
<h3>KING OG BLOGGING</h3>

<p>hello this is my terraform PHP based file</p>
<br>
<?php
  $cloudfront_url = `head -n1 mydesti.txt`;
  $img_path = "https://".$cloudfront_url."/spider_man.jpg";
  echo "<br>";
  echo "<img src='{$img_path}' width=100 height=100>";
?>
</body>
</html>
