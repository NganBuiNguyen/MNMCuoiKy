<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab5_1</title>
</head>

<body>
<?php
echo "REQUEST:";
print_r($_REQUEST);
echo "<hr>POST<br>";
print_r($_POST);

?><hr>
<a href="lab5_2.php?x=1&y=2&z=3">Link 1</a><br>
<a href="lab5_2.php?x[]=1&x[]=2&y=3">Link 2</a><br>
<a href="lab5_2.php?mod=product&ac=detail&id=1">Link 3</a><br>
<a href="lab5_2.php?mod=product&ac=list&name=a&page=2">Link 4</a><br>
<hr>
<?php
$a = isset($_POST["x"])?$_POST["x"]:"";
$b = isset($_POST["y"])?$_POST["y"]:"";
$c = isset($_POST["z"])?$_POST["z"]:"";
?>
<fieldset>
<legend>Form 1</legend>
<form action="lab5_5.1.php" method="post">
Nhập x:<input type="text" name="x" value="<?php echo $a; ?>" /><br>
Nhập y:<input type="text" name="y" value="<?php echo $b; ?>"/><br>
Nhập z:<input type="text" name="z" value="<?php echo $c; ?>"/><br>
<input type="submit" >
</form>
</fieldset>

<fieldset>
<legend>Form 2</legend>
<form action="lab5_5.1.php" method="post">
Nhập x1:<input type="text" name="s[]" value="1" /><br>
Nhập x2:<input type="text" name="v[]" value="2"  /><br>
Nhập y:<input type="text" name="u" value="3"><br>
<input type="submit" >
</form>
</fieldset>

<?php
$ten = isset($_POST["ten"])?$_POST["ten"]:"";
$gt = isset($_POST["gt"])?$_POST["gt"]:"";
$cnam =""; if ($gt=="1") $cnam='checked="checked" ';
$cnu =""; if ($gt=="0") $cnu='checked="checked" ';
//$st = isset($_POST["st"])?$_POST["st"]:"";
?>
<?php
function ktra($value,$arr)
{
	if(in_array($value,$arr))
	return "checked";
	else return "";
	
	}
$arrST=isset($_POST["st"])?$_POST["st"]:array();
?>
<fieldset>
<legend>Form 3</legend>
<form action="lab5_5.1.php" method="post">
Nhập tên:<input type="text" name="ten" value="<?php echo $ten;?>" ><br>
giới tính:<input type="radio" name="gt" value="1" <?php echo $cnam;?>>Nam
		  <input type="radio" name="gt" value="0" <?php echo $cnu;?>>Nữ<br>
Sở Thích:<input type="checkbox" name="st[]" value="tt" <?php echo ktra('tt',$arrST); ?>/>Thể Thao
		<input type="checkbox" name="st[]" value="dl" <?php echo ktra('dl',$arrST);?>/>Du Lịch
		<input type="checkbox" name="st[]" value="game" <?php echo ktra('game',$arrST); ?>/>Game<br>
<input type="submit" >
</form>
</fieldset>
</body>
</html>