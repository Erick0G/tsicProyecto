<?php include("db.php"); ?> 
<!DOCTYPE html>
<html>
<!-- https://es.stackoverflow.com/questions/450986/frontend-como-hacer-un-catalogo-de-productos-en-html-->
<!-- https://www.youtube.com/watch?v=ZavZ2fcpvVY&ab_channel=VaidrollTeam-->
 <head>
    <meta charset="utf-8">
    <title>TSIC</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css">
 </head>
 <body>
  <header class="main-header text-center">
    <h1 style="color:white">Venta de Autos "Toretto"</h1>
    <nav>
      <a href="Registro.php" class="nav-link">Registrar Nuevos Productos</a>
    </nav>
  </header>

    <div class="row main-container middle-xs center-xs">
      <div class="col-md-8 col-sm-10 col-xs-11 col-lg-7">
        <div class="box">

          <div class="menu">
            <br>
            <header class="text-center">
              <img src="imagenes/macuin.jpg" height="130" width="230" alt="Logo de Tienda de Autos">
            </header>
            <h1>Cuchao</h1>
            <br>
            <div class="producto">
              <div class="row center-xs">
                <?php
                $query = "SELECT * FROM autos";
                $result_shirts = mysqli_query($conn, $query);    




                while($row = mysqli_fetch_assoc($result_shirts)) { ?>

                 <div clas="producto col-xs-10 col-sm-6 col-md-4">
                    <div class="card">
                      <img src="<?php echo $row['imagen']; ?>" alt="Playera Bam Bam">
                      <h3><?php echo $row['nombre']; ?></h3>
                      <p><?php echo $row['precio']; ?>k</p>
                      <input type="image" src="imagenes/agregar.png" onclick="cuenta()" width="35" height="35" />
                    </div>
                  </div>
                <?php } ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br/>
    <br/>


  </body>
</html>
