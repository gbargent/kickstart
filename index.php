<html>
<body style="color: #fff; margin: 0px auto; background-image: url('images/background-hd-wallpaper-2.jpg'); overflow: hidden;">
<!-- <div style="float: right; position: relative; right: 30px; top: 30px; -webkit-filter: invert(100%); filter: invert(100%); opacity:0.6;"> -->
<div style="float: right; position: relative; right: 30px; top: 30px; opacity:0.6;">
<img src="images/NetworkIcon.png" height="300px" width="300px" >
</div>
<div style="color: #fff; padding: 25px; min-height: 80px;">
  <h1>Welcome to <?php echo $_SERVER['SERVER_NAME']; ?> <!-- ks.argent.hn --></h1>
</div>
<div style="position: relative; left: 20px; top: 10px;">
<?php
  if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != ".." && $file != "index.php" && $file != "repo" && $file != ".index.php.swp" && $file != "images" && $file != "Packages") {
        $thelist .= '<li><a href="'.$file.'" target="_blank"><font color="#fff">'.$file.'</font></a></li>';
      }
    }
    closedir($handle);
  }
?>
<h2>List of available KickStart files:</h2>
<ul><?php echo $thelist; ?></ul>
</div>

</body>
</html>
