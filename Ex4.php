<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body bgcolor=" green">
  <h3 align="center">

<body>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label  for="text">แม่สูตรคูณ</label><br>
<input type="text" name="f" id="f">
  <?php
      $count=1;
      $f=0;
      $sum=0;
      $f=$_POST['f'];
   ?>
   </p>
<p>
<?php
       while($count<=12)
  {
      $sum=$f*$count;
      echo "$f x $count = $sum <br>";
      $count=$count+1;
  }
?>
<input type="submit" name="submit" id="submit" value="ประมวลผล">
  </p>
  <p>&nbsp;</p>
  <p>&nbsp; </p>
</form>
</h3>
</body>
</html>