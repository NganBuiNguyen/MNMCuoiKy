<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab5_1</title>
</head>

<body>
<fieldset>
<legend>Form </legend>
<form action="lab5_5_3.2.php" method="post" enctype="multipart/form-data">
Tên đăng nhập:<input type="text" name="ten" ><br>
Mật khẩu: <input type="password" name="pass1" /><br />
Nhập lại mật khẩu: <input type="password" name="pass2" /><br />
Giới tính :<input type="radio" name="gt" value="Nam">Nam
		  <input type="radio" name="gt" value="Nu">Nữ<br>
Sở thích: <input type="checkbox" name="check[]" value="Du lich" />Du lịch
		  <input type="checkbox" name="check[]" value="Shopping" />Shopping
          <input type="checkbox" name="check[]" value="Game" />Game<br />
Hình ảnh <input type="file" name="hinh" /><br />
Tỉnh: <select name="choice">
			<option  value="hcm" >Hồ Chí Minh </option>
            <option value="hn">Hà Nội</option>
            <option value="dn">Đà Nẵng </option>
            <option value="hu">Huế</option>
	  </select><br />
			
<input type="submit" name="submit" value="submit" ><input type="submit" name="reset" value="reset" />
</form>
</fieldset>

</body>
</html>