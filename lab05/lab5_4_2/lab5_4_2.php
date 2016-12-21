<?php
$tsp=$_GET["tsp"];
$ct = isset($_GET["ct"])?$_GET["ct"]:"khong biet";
$choice=isset($_GET["choice"])?$_GET["choice"]:"";
echo"Ten san pham :$tsp<br>";
echo"Cach tim :$ct<br>";
echo"Loai san pham :";
	if (is_array($choice))
	{
		foreach($choice as $t)
		echo "$t"."<br>";
	}
	else echo $choice;
	

?>
