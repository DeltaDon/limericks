<?php
  $dir = '/var/www/test/';
  $text = 'Default text';
  if (isset($_GET['text'])) $text = $_GET['text'];
  if (isset($_GET['file'])) {
    if (isset($_GET['dir'])) {
      $dir .= trim($_GET['dir'],'/') . '/';
      mkdir($dir);
    }
    file_put_contents($dir . $file,$text);
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Limericks</title>
</style><link href="common.css" rel="stylesheet" type="text/css" /></head>

<body>
<h2>Favorite Limericks</h2>
<h3><?= $subtitle ?></h3>
<table border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td><a href="Nantucket.html">There once was a man from Nantucket</a></td>
  </tr>
  <tr>
    <td><a href="Nepal.html">There once was a man from Nepal</a></td>
  </tr>
  <tr>
    <td><a href="Japan.html">There once was man from Japan</a></td>
  </tr>
  <tr>
    <td><a href="Brighton.html">There once was a sailor from Brighton</a></td>
  </tr>
</table>
<table border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td><a href="Peru.html">There once was a man from Peru</a></td>
  </tr>
   <tr>
    <td><a href="Cuba.html">There was a young man from Cuba</a></td>
  </tr>
   <tr>
    <td><a href="Tibet.html">There once was a man from Tibet</a></td>
  </tr>
   <tr>
    <td><a href="Bather.html">A bather whose clothing was strewed</a></td>
  </tr>
</table>
</body>
</html>
