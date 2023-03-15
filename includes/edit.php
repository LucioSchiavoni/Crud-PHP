<?php 
include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre =  $row['nombre'];
        $apellido = $row['apellido'];
        $edad = $row['edad'];
        $email = $row['email'];
    }
}

if(isset($_POST['update'])){
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];

            echo $nombre;
            echo $apellido;
            echo $edad;
            echo $email;
            echo $id;

            $query = "UPDATE users set nombre = '$nombre', apellido = '$apellido', edad = '$edad', email = '$email' WHERE id = '$id'";
            mysqli_query($conn, $query);

            header("Location: ../index.php");
}

?>

<?php include('header.php') ?>


  <p> Editar Registro</p> 
<form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST" class="mt-20">

<div class="form control mt-4">
<label>Nombre</label>
<input type="text" placeholder="Nombre" class="input input-bordered input-info w-full max-w-xs" name="nombre" <?php echo $nombre; ?>  />
</div>

<div class="form control  mt-4">
<label>Apellio</label>
<input type="text" placeholder="Apellido" class="input input-bordered input-info w-full max-w-xs" name="apellido" <?php echo $apellido; ?>  />
</div>
<div class="form control  mt-4">
<label>Edad</label>
<input type="text" placeholder="Edad" class="input input-bordered input-info w-full max-w-xs" name="edad" <?php echo $edad; ?>  />
</div>

<div class="form control  mt-4">
<label>Email</label>
<input type="email" placeholder="ejemplo@gmail.com" class="input input-bordered input-info w-full max-w-xs" name="email" <?php echo $email; ?>  />
</div>
<button class="btn bg-isolate-700 mt-20" name="update">Actualizar</button>

</form>

