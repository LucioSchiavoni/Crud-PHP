<?php 
session_start();
include("db.php");

if(isset($_POST['save_task'])){

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$email = $_POST['email'];

$query = "INSERT INTO users(nombre, apellido, edad, email) VALUES ('$nombre', '$apellido', '$edad', '$email')";
$result = mysqli_query($conn, $query);

if(!$result){
    die("Pincho");
}

$_SESSION['message'] = 'Usuario creado exitosamente!';

header("Location: ../index.php");


} 

?>