<?php
include('db.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM users WHERE id = $id";
    $results = mysqli_query($conn, $query);
}
if(!$query){
   die('Error');
}
$_SERVER['message'] = 'Usuario eliminado';
header('Location: ../index.php');
?>