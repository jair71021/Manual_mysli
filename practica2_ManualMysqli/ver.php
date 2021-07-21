<?php include "header.php"; ?>


  <div class="container" style="font-family: 'STIX Two Math', serif;"> 
    <div class="card border-0 shadow my-5">
      <div class="card-body p-5">
        <h1 class="font-weight-light">Maneras de mostrar datos con php y mysqli</h1>
        <p class="lead">
          <h3>Mostar datos con mysqli_fetch_row</h3>
          <p>
            Esta funcion nos permite convertir  una consulta mysql a una 
            arreglo de una dimension ,por lo tanto podemos obtener el valor de un campo de la
            consulta por medio de un indice, la funcion myysqli_fetch_array_row lleva como parametro una repuesta 
            de una ejecucion mysql
          </p>
          <h3>Ejemplo de uso de myysqli_fetch_array_row</h3>
          <p>
            <p>$sql ="SELECT campo1,campo2,campo3 from  t_table";</p>
            <p>$repuesta = mysqli_query( $conexion,$sql);</p>
            <p>$datos = mysqli_fetch_row($repuesta);</p>
            <p> echo $datos[0];  //Esto nos retornara la informacion del campo1 </p>
          </p>
          <h3> Ejemplo de loop de datos con mysqli_fetch_row</h3>
          <p>
            <p>while($datos= mysqli_fetch_row ($repuesta)){ // ,mientras datos sea ejecutados ,continuara </p>
              <p>echo $datos[0] //Esto, nos permite obtener todos los datos de la coluumna  </p>
              <p>}</p>
          </p>

          <hr>
          <h3>Mostar datos con mysqli_fetch_array</h3>
          <p>
            Esta funcion nos permite convertir  una consulta mysql a una 
            arreglo asociativo ,por lo tanto podemos obtener el valor de un campo de la
            consulta por medio de una llava, la funcion mysqli_fetch_array lleva como parametro una repuesta 
            de una ejecucion mysql y el objeto de una conexion.
          </p>
          <h3> Ejemplo de loop de datos con mysqli_fetch_array</h3>
          <p>
            <p>$sql ="SELECT campo1,campo2,campo3 from  t_table";</p>
            <p>$repuesta = mysqli_query( $conexion,$sql);</p>
            <p>while($datos= mysqli_fetch_array ($repuesta)){ // ,mientras datos sea ejecutados ,continuara </p>
              <p>echo $datos["campo1"] //Esto, nos permite obtener todos los datos de la coluumna  </p>
              <p>}</p>
          </p>

        </p>
      </div>
    </div>
  </div>


<?php include "footer.php"; ?>
    

    