<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php
	//USO DE OPPERADORES LOGICOS
	/*if (isset($_POST["enviando"]))
	{
		$edad=$_POST["edad_usuario"];
		echo "$edad";
		if($edad<=18)
		{
			echo "eres menor de edad";
		}
		else if ($edad<=40)
			{
				echo "Eres Joven";
			}
		else if ($edad<=65)
		{
			echo "eres maduro, No Nicolas xD";
		}
		else 
		{
			echo "cuidate";
		}
	}*/
	
	//OPERADORES TERNARIOS

	if (isset($_POST["enviando"]))
	{
		$contra=$_POST["contra"];
		$nombre=$_POST["nombre_usuario"];
		/*if ($edad<18)
		{
			 echo "Eres menor de edad y no tienes acceso";
		}
		else
		{
			echo "Erer mayor de edad, puedes acceder";
		}*/
		
		//echo $edad<18 ? "Eres menor de edad, No puedes acceder" : "Puedes acceder eres mayor";//antes de los dos puntos es true, despues de los dos puntos es falso
		//$resultado= $edad<18 ? "Eres menor de edad, No puedes acceder" : "Puedes acceder eres mayor";//Tambien se puede almacenar el resultado en una variable
		$resultado= $nombre=="Kris" && $contra=="1234" ? "Datos correctos" : "Datos Incorrectos";//Tambien se puede almacenar el resultado en una variable
		echo $resultado;
	}	
?>