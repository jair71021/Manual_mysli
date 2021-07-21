<?php include "header.php"; ?>


  <div class="container" style="font-family: 'STIX Two Math', serif;"> 
    <div class="card border-0 shadow my-5">
      <div class="card-body p-5">
        <h1 class="font-weight-light">Ejecucion de un query con mysqli</h1>
          <p class="lead">
            Para poder ejecutar un array un query de php al servidor de bases de datos mysql o mariadb con mysqli,
            requerimos  utilizar la fuuncion mysqli_query esta ya viene en el API nativo de php en su versiones
            5 o superior esta fuuncion requiere de dos parametros para poder ejecutarse correctamente,como son:

            <ol>
              <li>Conexion al servidor</li>
              <li>Cadena de sql valida</li>
            </ol>
            <h3>Ejemplo de uso de mysqli_query</h3>
            <p>$sql =" SELECT campo1, campo2 = FROM t_tabla";</p>
            <p>$repuestas = mysqli_query ($conexion,$sql);</p>

            <p>
              Siendo $sql la varible que contiene la cadena que forma un sql valido , la variable $repuestas
              obtiene un 0 o un 1 depediendo si mysqli_query se ejecuuto correctamente, la variablede $conexion 
              esta expuesta <a href ="conexion.php"> aqui</a>
            </p>
            <p>
              Entiendase que cualquier cadena sql que se desea ejecuutar ( select, insert, update,delete,)
              debe ser pasada a la funcion mysqli_query,siempre que se necesite hacer alguna peticion
            </p>
        </div>
    </div>
  </div>

<?php include "footer.php"; ?>
    

    