<div class="h-full ">
<?php
session_start();
include("includes/header.php");
include("includes/db.php");
?>

    <div  >

</div>
    <?php if(isset($_SESSION['message'])) { ?>
    <div class="text-white text-3xl">
        <?= $_SESSION['message'] ?>
    </div>
        <?php session_unset(); } ?>

<div class="ml-20 mt-4 text-4xl text-accent">
  <h1>Ingrese sus datos</h1>
</div>
<form action="includes/save_task.php" method="POST">

<div class="form control mt-28">
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
<div class="mt-40 ml-16">
<table class="table-auto">
  <thead>
    <tr>
      <th class="decoration-amber-700">Nombre</th>
      <th class="decoration-amber-700">Apellido</th>
      <th class="decoration-amber-700">Edad</th>
          <th class="decoration-amber-700">Email</th>
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
    <td><a href="includes/edit.php?id=<?php echo $row['id']?>" class="btn bg-accent-500 hover:bg-accent-600 w-24 text-2xl" >Editar </td>
        <td><a href="includes/delete.php?id=<?php echo $row['id']?>" class="btn bg-accent-500 hover:bg-accent-600 w-24 text-2xl" value="Borrar">Borrar</td>
    </tr>

        <?php } ?>
  </tbody>
</table>
</div>
</body>
</div>
</html>

