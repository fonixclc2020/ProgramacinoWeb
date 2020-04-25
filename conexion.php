<?php
//recibir los datos que salen del formulario metodo post
$usr = $_POST['usuario'];  //creamos los variables para almacenar usuario
$pas = $_POST['contra']; //variable que almacenara pasword

$conec = mysqli_connect("localhost","root","","isc8"); //conexion a BD
$consulta = "select *from login where usr='$usr'  and pas='$pas'";  //se crea la consulta en la tabla

$res = mysqli_query($conec,$consulta); //se ejecuta la consulta

$fila = mysqli_num_rows($res);  // si encuentra valores(filas) en la bd se almacena en $fila
if($fila>0){ //si la fila es mayor que 0 entra en la condiconal
header("location:bienvenidos.html"); //al entrar en la condiconal redirecciona a otra pagina 

}else{ //de lo contrario marca error 
    echo "Error en la idenficicacion";
}
mysqli_free_result($res); //liberar memoria que contiene almacenado la consulta 
mysqli_close($conec); //al terminar el proceso tambien se desconecta la conexion 
?>
