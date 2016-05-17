<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>str</title>
</head>
<body>

<form name="loginform" method="post" action="" id="loginform">
	    <table style="width:260px;height:203px;">
		        <tr>
		            <td colspan="2" style="height:20px;">Logowanie</td>
		        </tr>
		        <tr>
		        	<td>Imie:</td>
		        	<td><input name="imie" type="text" id="imie" value="" style="width:100px;height:18px;"></td>
		    	</tr>
		        <tr>
		            <td>Nazwisko:</td>
		            <td><input name="nazwisko" type="text" id="nazwisko" value="" style="width:100px;height:18px;"></td>
		        </tr>
		        <tr>
		        	<td>Email:</td>
		        	<td><input name="email" type="text" id="email" value="" style="width:100px;height:18px;"></td>
		    	</tr>
		    	<tr>
		        	<td>Data Urodzenia(rrrr-mm-dd):</td>
		        	<td><input name="dataur" type="text" id="dataur" value="" style="width:100px;height:18px;color:#C2C2"></td>
		    	</tr>

		    	<tr>
		            <td colspan="2"><input class="loginform_button" type="submit" name="login" value="Wejdź!" id="goin" style="width:90px;height:20px;"></td>
		        </tr>
	    </table>
</form>

<?php 
if ($_POST) { //po przyciśnięciu przycisku post wykona się wszystko pod spodem
					$imie = trim($_POST['imie']); //funkcja TRIM wyrzuca białe znaki(spacje, entery) z inputa
					$nazwisko = trim($_POST['nazwisko']);//przypisuje do zmiennej $nazwisko wartość z formularza
					$email = trim($_POST['email']);
					$data_urodzenia = trim($_POST['dataur']);

					$imiespr='/^[A-Z]{1}+[a-ząćęłńóśźż]*$/'; // to co ma sprawdzać
					$nazwiskospr='/^[A-Z]{1}+[a-ząćęłńóśźż]*$/';
					$emailspr='/^[a-zA-Z0-9\.\-_]+\@[a-zA-Z0-9\.\-_]+\.[a-z]{2,3}$/D';
					$data_urodzeniaspr='/^([0-9]{4})[-\.]([0-9]{1,2})[-\.]([0-9]{1,2})$/'; //rrrr-mm-dd

					if (preg_match($imiespr, $imie)) { echo "Wpisałeś dobre imie<br/>";} //funkcja sprawdzająca
					else{echo "Wpisałeś złe imie<br/>";	}

					if (preg_match($nazwiskospr, $nazwisko)) { echo "Wpisałeś dobre nazwisko<br/>";}
					else{echo "Wpisałeś złe nazwisko<br/>";}

					if (preg_match($emailspr, $email)) { echo "Wpisałeś dobry email<br/>";}
					else{echo "Wpisałeś zły email<br/>";}

					if (preg_match($data_urodzeniaspr, $data_urodzenia)) { echo "Wpisałeś dobrą datę urodzenia<br/>";}
					else{echo "Wpisałeś złą datę urodzenia<br/>";}

					if (strlen($imie) > 10 || strlen($nazwisko) > 10) { //jeżeli długość znaków jest większa niż 10 to wyskoczy to co w ifie
						echo "ZA DUŻO ZNAKÓW W IMIENIU LUB NAZWISKU<br/>";
						} 
			}
 ?>





</body>
</html>

