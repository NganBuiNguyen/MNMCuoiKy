<?php
	$ten = isset($_POST["ten"])?$_POST["ten"]:"";
 	$gt = isset($_POST["gt"])?$_POST["gt"]:"";
	$pass1=isset($_POST["pass1"])?$_POST["pass1"]:"";
	$pass2=isset($_POST["pass2"])?$_POST["pass2"]:"";
	if($ten=="")
	{
		?>
    <script language="javascript">
	alert("Chua nhap Ho ten");
	window.history.go(-1);//quay lai trang truoc
    </script>
	<?php
	exit;
	}
	else 
	echo "Ten đang nhap:".$ten."<br>";
	
	
	
	if ($pass1=="")
	{ //kg hop le
		?>
		<script language="javascript">
		alert("Chua nhap mat khau");
		window.history.go(-1);//quay lai trang truoc
		</script>
		<?php
		exit;
	}
	
	else if ($pass2=="")
	{ //kg hop le
		?>
		<script language="javascript">
		alert("Confing mat khau");
		window.history.go(-1);//quay lai trang truoc
		</script>
		<?php
		exit;
	}else if($pass1==$pass2)
	{
		echo "Mat khau".$pass1."<br>";
	}
	else 
	{
		?>
        <script language="javascript">
		alert("Mat khau khong khop");
		window.history.go(-1)
		</script>
        <?php
		exit;	
	}
	

	
	if ($gt=="")
	{ //kg hop le
		?>
		<script language="javascript">
		alert("Chua nhap GT");
		window.history.go(-1);//quay lai trang truoc
		</script>
		<?php
		exit;
	}
	else 
	echo "Gioi tinh :".$gt."<br>";
	
?>