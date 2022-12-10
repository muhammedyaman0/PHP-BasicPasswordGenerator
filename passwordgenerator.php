<html>
<head>
<title>Rastgele Şifre Oluşturucu</title>

</head>
 
<body>

	<form action="passwordgenerator.php" method="post">
		Şifre Uzunluğu Seçin <br>
		<input type="text" name="uzunluk"><br><br>
		<input type="submit" name="buton" value="ŞİFRE OLUŞTUR!">
		<br> <br>
	</form>

<?php

function sifreolustur($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}

	if(isset($_POST["buton"])){
		$uzunluk=$_POST["uzunluk"];
		echo sifreolustur($uzunluk)."\n";
	}

?>

</body>
</html>
 
