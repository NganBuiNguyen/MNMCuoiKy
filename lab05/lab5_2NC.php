<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab5_1</title>
</head>

<body>
<?php
//echo "REQUEST:";
//print_r($_REQUEST);
//echo "<hr>POST<br>";
//print_r($_POST);

?><hr>
<a href="lab5_2.php?x=1&y=2&z=3">Link 1</a><br>
<a href="lab5_2.php?x[]=1&x[]=2&y=3">Link 2</a><br>
<a href="lab5_2.php?mod=product&ac=detail&id=1">Link 3</a><br>
<a href="lab5_2.php?mod=product&ac=list&name=a&page=2">Link 4</a><br>
<hr>
<?php
$x = isset($_POST["x"])?$_POST["x"]:"";
$y = isset($_POST["y"])?$_POST["y"]:"";
$z = isset($_POST["z"])?$_POST["z"]:"";
echo "x=$x<br>";
echo "y=$y<br>";
echo "z=$z<br>";

?>
<fieldset>
<legend>Form 1</legend>
<form action="lab5_2NC.php" method="post" enctype="multipart/form-data">
Nhập x:<input type="text" name="x" value="<?php echo $x;?>" ><br>
Nhập y:<input type="text" name="y" value="<?php echo $y;?>"><br>
Nhập z:<input type="text" name="z" value="<?php echo $z;?>" ><br>
<input type="submit" name="sm" value="gui" >
</form>
</fieldset>
<hr />
<?php
$x1 = isset($_POST["x1"])?$_POST["x1"]:"";
$x2 = isset($_POST["x2"])?$_POST["x2"]:"";
$y2 = isset($_POST["y2"])?$_POST["y2"]:"";
echo "x1=$x1<br>";
echo "x2=$x2<br>";
echo "y=$y2<br>";
?>
<fieldset>
<legend>Form 2</legend>
<form action="lab5_2NC.php" method="post">
Nhập x1:<input type="text" name="x1" value="<?php echo $x1;?>" ><br>
Nhập x2:<input type="text" name="x2" value="<?php echo $x2;?>" ><br>
Nhập y:<input type="text" name="y2" value="<?php echo $y2;?>" ><br>
<input type="submit"  name="sm"value="gui" >
</form>
</fieldset>
<hr />
<?php
$t = isset($_POST["ten"])?$_POST["ten"]:"";
$gt = isset($_POST["gt"])?$_POST["gt"]:"";
$cnam =""; if ($gt=="nam") $cnam='checked="checked" ';
$cnu =""; if ($gt=="nu") $cnu='checked="checked" ';
//$sthich = isset($_POST["st"])?$_POST["st"]:"khong co";
echo "ten cua ban la :$t<br>";
echo "Gioi tinh: $gt <br>";
echo "So thich:";
/*if (is_array($sthich))
{
	foreach($sthich as $t)
	  echo "$t ";
}
else echo $sthich;*/

?>


<fieldset>
<legend>Form 3</legend>
<form action="lab5_2NC.php" method="post">
Nhập tên:<input type="text" name="ten" value="<?php echo $t;?>" ><br>
giới tính:<input type="radio" name="gt" value="nam" <?php echo $cnam;?>/>Nam
		  <input type="radio" name="gt" value="nu" <?php echo $cnu;?>/>Nữ<br>
Sở Thích:<input type="checkbox" name="st" value="tt" <?php if(isset($_POST["st"])&&$_POST["st"]=='tt')
 echo 'checked="checked"';?> />Thể Thao
		<input type="checkbox" name="st" value="dl" <?php if(isset($_POST["st"])&&$_POST["st"]=='dl')
 echo 'checked="checked"';?> />Du Lịch
		<input type="checkbox" name="st" value="game" <?php if(isset($_POST["st"])&&$_POST["st"]=='game')
 echo 'checked="checked"';?>/>Game<br>
<input type="submit" name="sm" value="gui" >
</form>
</fieldset>
</body>
</html>