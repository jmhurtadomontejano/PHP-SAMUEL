<?php
	 //Hacer una pantalla de logue y que compruebe si es correcto o No, Si el usuario es correcto escribir CORRECTO, sino escribir INCORRECTO
	if($_POST['email']=="jmhurtadomontejano@gmail.com" && $_POST['password']=="1234"){

		echo "correcto";

	}	else {
		echo "incorrecto";
	}



?>