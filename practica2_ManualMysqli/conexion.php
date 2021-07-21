<?php include "header.php"; ?>


  <div class="container" style="font-family: 'STIX Two Math', serif;"> 
    <div class="card border-0 shadow my-5">
      <div class="card-body p-5">
        <h1 class="font-weight-light">Conectar a mysql con php</h1>
            <p class="lead">
              <h3>¿Cual son los argumentos o parametros necesario en una conexion?</h3>
              <p>
                Para poder llevar la conexion requiere 4 argumentos.
                <ol>
                  <li>EL servidor web que normalmente es una ip,un dominio o localhost</li>
                  <li>El usuario de bases de datos </li>
                  <li>El password de usuario</li>
                  <li>El nombre de bd</li>
                </ol>
              </p>


              <h3>Ejemplo de una conexion sencillas utilizando mysqli</h3>
              <p>
                Para poder utilizar el API de mysqli, solo necesitamos llamar la fuuncion que vamos utilizar 
                ,en este caso con usar la funcion "mysqli_connect", seguido de los 4 parametros necesarios:
                <p>
                  <p>$servidor="localhost";</p>
                  <p>$usuario="root";</p>
                  <p>$password="";</p>
                  <p>$bd="mi bd";</p>
                  <p>$conexion =mysqli_connect ($servidor,$usuario,$password,$bd);</p>
                </p>
                De esa forma podemos conectar a mysql de una forma corta.
              </p>
            </p>
      </div>
    </div>
  </div>

<?php include "footer.php"; ?>
    

    