<?php
//Incio de sesion;
session_start();

if (isset($_POST['preferencias'])) {
  //Cargamos los datos en la sesión.
  $_SESSION['idioma'] = $_POST['idioma'];
  $_SESSION['publico'] = $_POST['publico'];
  $_SESSION['zona'] = $_POST['zona'];
}


?>



<!doctype html>
<html lang="es">

<head>
    <title>Preferencias</title>
    <!-- Required meta tags -->
    <meta charset="Preferencias PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="cesar.css">
</head>

<body>


    <div class="row" height="100" width="100">



        <div id="contenedor" class="col-6 container center">
            <form name="formulario" method="POST" id="formulario" action=<?php echo $_SERVER['PHP_SELF'] ?>>
                <h3> Preferencias de Usario</h3>
                <div class="form-group center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-translate" viewBox="0 0 16 16">
                        <path
                            d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z" />
                        <path
                            d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z" />
                    </svg>
                    <label for="idima">Selecciona el Idioma</label><br>
                    <select class="custom-select mt-2" name="idioma" id="idioma">

                        <?php
                  $idioma=["Ingles","Español"];
                  foreach($idioma as $valor){
                      if(isset($_SESSION['idioma'])&&$_SESSION['idioma']==$valor){
                        echo "<option  selected=".$valor.">$valor</option>";
                      }else{
                        echo"<option value=".$valor.">$valor</option>";
                      }
                  
                  }

              ?>

                    </select>
                </div>
                <div class="form-group center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        <path fill-rule="evenodd"
                            d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                        <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                    </svg>
                    <label for="perfil">Perfil Público</label><br>
                    <select class="custom-select mt-2" name="publico" id="publico">
                        <?php    
          $publico=["Si","No"];
          foreach($publico as $valor){
              if(isset($_SESSION['publico'])&&$_SESSION['publico']==$valor){
                echo "<option selected=".$valor.">$valor</option>";

              }else{
                echo"<option value=".$valor.">$valor</option>";
              }
          }
          
          ?>
                    </select>
                </div>
                <div class="form-group center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-clock" viewBox="0 0 16 16">
                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                    </svg>
                    <label for="zonaHoraria">Zona Horaria</label><br>
                    <select class="custom-select mt-2" name="zona" id="zona">
                        <?php
              $zona=["GTM-2","GTM-1","GTM","GTM+1","GTM+2"];
              foreach($zona as $valor){
                if(isset($_SESSION['zona'])&&$_SESSION['zona']==$valor){
                  echo "<option selected=".$valor.">$valor</option>";
                }else{
                  echo "<option value=".$valor.">$valor</option>";
                }
              }

             ?>
                    </select>
                </div>
                <div class="row">
                    <div class="form-group center">
                        <button type="button" name="mostrar" id="mostrar" class=" mt-2 col-5 btn btn-success"><a
                                href="mostrar.php">Mostrar preferencias</a></button>
                        <input type="submit" name="preferencias" id="preferencias" class="mt-2 col-6 btn btn-primary"
                            value="Establecer preferencias">
                    </div>

                </div>
        </div>



        </form>
        <div class="row" height="100" width="100">

            <div class="col-6 container center">


                <?php if(isset($_SESSION['idioma'])&&isset($_SESSION["publico"])&&isset($_SESSION['zona'])){
  echo" <h4>______Preferencias guardadas______</h4>";
  echo"<pre>";
    print_r ($_SESSION);
  echo"</pre>";
}
?>
            </div>
        </div>
    </div>




    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>