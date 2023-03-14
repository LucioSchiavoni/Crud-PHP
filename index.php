<div class="h-full flex center-item justify-center">
<?php
session_start();
include("includes/header.php");
include("includes/db.php");
?>

    <div class="mt-20 " >

    <?php if(isset($_SESSION['message'])) { ?>
    <div class="text-white text-3xl">
        <?= $_SESSION['message'] ?>
    </div>
        <?php session_unset(); } ?>

<form action="includes/save_task.php" method="POST">

<div class="form control mt-10">
        <label for="" class="label text-2xl text-white ">Nombre</label>
  <input type="text" name="nombre"  class="rounded input">
        
</div>
<div class="form control">
        <label for="" class="label text-2xl text-white ">Apellido</label>
  <input type="text" name="apellido"  class="rounded input">
        
</div>
<div class="form control" >
     <label for="" class="label text-2xl text-white mt-5">Edad  </label>
    <input type="text" name="edad"  class="rounded input" >
    </div>
    <div class="form control">
        <label for="" class="label text-2xl text-white ">Email</label>
  <input type="text" name="email"  class="rounded input">
</div>


<input class="btn rounded text-color-white m-5" type="submit" name="save_task" value="Enviar" >

</div>

</form>
<div class="flex center-item justify-center ">
<table class="table-auto">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Edad</th>
          <th>Email</th>
    </tr>
  </thead>
  <tbody>
     <?php  
       $query = "SELECT * FROM users";
       $result = mysqli_query($conn, $query);

      while($row = mysqli_fetch_array($result)){ ?>
    <tr>
    <td><?php echo $row['nombre'] ?></td>
    <td><?php echo $row['apellido'] ?></td>
    <td><?php echo $row['edad'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><a href="edit.php?id=<?php echo $row['id']?>" class="btn bg-accent-500 hover:bg-accent-600 w-24 text-2xl" >Editar </td>
        <td><a href="delete.php?id=<?php echo $row['id']?>" class="btn bg-accent-500 hover:bg-accent-600 w-24 text-2xl" value="Borrar">Borrar</td>
    </tr>

        <?php } ?>
  </tbody>
</table>
</div>
</body>
</div>
</html>

