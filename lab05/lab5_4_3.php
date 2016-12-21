<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab5_1</title>
</head>

<body>

<fieldset>
<legend>Form Nhap Lieu</legend>
<form action="lab5_4_3.php" method="post" enctype="multipart/form-data">
Ten dang nhap:<input type="text" name="ten" ><br>
Mat khau: <input type="password" name="pass1" /><br />
Nhap lai mat khau: <input type="password" name="pass2" /><br />

Giới tính:<input type="radio" name="gt" value="Nam">Nam
		  <input type="radio" name="gt" value="Nu">Nữ<br>
Sở Thích:<input type="checkbox" name="st[]" value="tt">Thể Thao
		<input type="checkbox" name="st[]" value="dl">Du Lịch
		<input type="checkbox" name="st[]" value="game">Game<br>
Hinh anh<input type="file" name="hinh" /><br />
Tinh <select  name="tinh[]">
	<option value="HCM">HCM</option>
    <option value="DN">Da Nang</option>
    <option value="H">Hue</option>
    <option value="HN">Ha Noi</option>
</select><br />
<input type="submit" name ="sm" value="Dang ky" ><&nbsp;><&nbsp;>
<input type="submit" name="reset" value="reset" >
</form>
</fieldset>

<?php
//print_r($_FILES);


function postIndex($k,$v="")
{
	if(isset($_POST[$k])) return $_POST[$k];
	return $v;
}
function KT()
{
	$err=" ";
	$ten=postIndex("ten");
	$ps1=postIndex("pass1");
	$ps2=postIndex("pass2");
	$gt=postIndex("gt");
	$sthich =postIndex("st");
	$tinh=postIndex("tinh");
	$arrImg = array("image/png", "image/jpeg", "image/bmp","image/jpg");
	if($ten=="")
	{
		$err.="can nhap ten <br>";
	}
	else
	{
		echo "Chao ban :$ten <br>";
	}
	if($ps1=="")
	{
		$err.="can nhap pass word <br>";
	}
	else
	{
		echo "Mat Khau cua ban la :$ps1 <br>";
	}
	if($gt=="")
	{
		$err.="can cho gioi tinh<br>";
	}
	else
	{
		echo "Gioi tinh cua ban la :$gt <br>";
	}
	echo "So thich cua ban : ";
	if (is_array($sthich))
	{
		foreach($sthich as $t)
	  	echo "$t ";
	}
	else echo $sthich;
	
	echo"<br>"."tinh cua ban la ";
	if (is_array($tinh))
	{
		foreach($tinh as $t)
		echo "$t"."<br>";
	}
	else echo $tinh;
	
	
	if($ps2!=$ps1)
	$err.="mat khau khong dung <br>";
	$errFile = $_FILES["hinh"]["error"];
		if ($errFile>0)
			$err .="Lỗi file hình <br>";
		else
		{
			$type = $_FILES["hinh"]["type"];
			if (!in_array($type, $arrImg))
				$err .="Không phải file hình <br>";
			else
			{	$temp = $_FILES["hinh"]["tmp_name"];
				$name = $_FILES["hinh"]["name"];
				if (!move_uploaded_file($temp, "image/".$name))
					$err .="Không thể lưu file<br>";
			?>
				<img src ="image/<?php echo $name; ?>">
                <?php
			}
		}
		
	return $err;
	
	
}
if(postIndex("sm")!="")
{
	
	?>
<div>
<?php
$s=KT();
if ($s=="") echo "Good";
else echo $s;
echo "</div>";
}

?>
</body>
</html>