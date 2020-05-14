<!DOCTYPE html>
<html lang="en">
<head>
  <title>MVCProject</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
  .container {
    text-align: center;
    margin:center;
    margin-top: 120px;
  }
.letra{

  color: gold;
  font-size: 50px;
}

.parrafo{

  color: maroon;
  font-size:20px ;

}

.fila{
  margin-left: 50px;
  text-align: center;
}

.table{
  margin-top: 50px;
}

</style>
<body>


<div class="container">
  <h2 class="letra">Modelo Vista Controlador</h2>
  <p class="parrafo">Por medio de este ejemplo me muestra el modelo vista controlador en PHP, 
    integrado con el servicio de nube de Heroku, con base de datos de remoteMYSQL, y accedido mediante GIT bash.</p>   
 
    <table class="table" class="content-aling-center">
    <thead>
     <tr>
    <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody class="">
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

    
    
    
    
