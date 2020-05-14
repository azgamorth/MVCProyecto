<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
  .container {
    text-align: center;
  }
</style>
<body>


<div class="container">
  <h2>Vista de ejemplo</h2>
  <p>Por medio de este ejemplo me muestra el modelo vista controlador en PHP</p>   
 
  <table class="table">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody class="container">
    <?php
      foreach ($datos as $dato){
    ?><tr>
        <td><?php echo $dato["nombre"]. " "; ?></td>
        <td><?php echo $dato["apellido"]. " "; ?></td>
        <td><?php echo $dato["correo"]. " "; ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>

    
    
    
    
