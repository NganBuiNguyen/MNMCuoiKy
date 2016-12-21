



<hr>
<fieldset>
<form action="" method="post" enctype="multipart/form-data">
Ten dang nhap:<input type="text" name="ten" value="<?php echo  (isset($_POST['ten']))?$_POST['ten']:""; ?>"><br/>
Mat khau: <input type="password" name="pass1" value="<?php echo (isset($_POST['pass1']))? $_POST['pass1']:""; ?>"  ><br/>
Nhap lai mat khau: <input type="password" name="pass2" value="<?php echo (isset($_POST['pass2']))? $_POST['pass2']:""; ?>" ><br/> 
Gioi tinh:
<input type="radio" name="gioitinh" value="1">Nu
<input type="radio" name="gioitinh" value="2">Nam<br/>
Tinh<&nbsp;><select name="tinh">
	<option value="1">Khanh Hoa</option>
    <option <?php if (isset($_POST['tinh'])&& $_POST['tinh']=='2') echo  "selected=\"selected\"";?> value="2">Binh Thuan</option>
    <option  <?php if(isset($_POST['tinh']) && $_POST['tinh'] =='3')echo "selected=\"selected\""; ?>value="3">Hung Yen</option>
</select><br/>
So thich :Du lich<input type="checkbox" name="sothich">
		Nghe nhac<input type="checkbox" name="sothich">
        Choi game<input type="checkbox" name="sothich">
        <br/>

Hinh anh:<input type="file" name="hinh[]" multiple="multiple"><br/>
<input type="submit" name="sub" value="DangKy"><br/>
</form>
</fieldset>
 <?php 
function postindex($k, $v=""){
	if(isset($_POST[$k])) return $_POST[$k];
	return $v;
}
function kiemtra(){
	$err = "";
	$ten = postindex ("ten");
	$pass1= postindex ("pass1");
	$pass2= postindex ("pass2");
	if ($ten== "")
	{
		$err.=" Can nhap ten:<br>";
	}
	if ($pass1== "")
	$err.="Nhap mat khau:<br>";
	if ($pass1 != $pass2)
	$err.=" Mk nhap lai khong dung:<br>";
	return $err;
	
}
if (postindex("DangKy") !=""){
	echo good;
}
echo kiemtra();

 if (isset($_FILES["hinh"]))
{
	foreach ($_FILES["hinh"]["name"] as $i=> $name){
	if ($_FILES["hinh"]["error"][$i]!=0)
	{
		echo "Err!"; exit;	
	}	
	$tenfile = $_FILES["hinh"]["name"][$i];
	$src = $_FILES["hinh"]["tmp_name"][$i];
	$type = $_FILES["hinh"]["type"][$i];
	$arr = array("image/jpeg", "image/gif", "image/png");
	if (in_array($type, $arr)==false)
	{
		echo "Khong dung loai file!";
		exit;	
	}
	if(move_uploaded_file($src, "image/".$tenfile))
	{
		?>
        <img src="image/<?php echo $tenfile;?>">
        <?php	
	}
	else
	{
	  echo "Err!";	
	}
	}
}


	
	
	
	


    



