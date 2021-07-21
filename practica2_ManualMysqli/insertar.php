<?php include "header.php"; ?>


  <div class="container" style="font-family: 'STIX Two Math', serif;"> 
    <div class="card border-0 shadow my-5">
      <div class="card-body p-5">
        <h1 class="font-weight-light">Insert datos con php a mysql usando mysqli</h1>
        <p class="lead">
            Para poder insertar datos desde php con mysqli ,solo necesitamos crear la cadena de sql valida y 
            ejecutarla con una conexion valida ,los parametros a ser inserttados deben ir en variables como
            convesion, no necesitamos mas que saber la repuesta de mysqli_query para saber si se llevo con exito la insercion
          <h3>Ejemplo de como insertar con php a muysql </h3>
          <p>$sql ="INSERT INTO t_tabla(campo1,campo2) VALUES ('$variable1','$variable2')" </p>
          <p>$repuesta=mysqli_query($conexion,$sql);</p>
          <p>La variable $repuesta nos retorna uun 1 o un 0 si se ejecuuto o no ,asi si se logro </p>
      
        </p>
      </div>
    </div>
  </div>

<?php include "footer.php"; ?>
    

    