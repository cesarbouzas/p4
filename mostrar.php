<?php
session_start();
echo"<pre>";
print_r ($_SESSION);
echo"</pre>";

if(isset($_SESSION['idioma'])&&isset($_SESSION['publico'])&&isset($_SESSION['zona'])){
$idioma=$_SESSION['idioma'];
$publico=$_SESSION['publico'];
$zona=$_SESSION['zona'];
}
?>

<!doctype html>
<html lang="es">

<head>
    <title>Mostrar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <form id="formulario2" name="formulario2 "action="preferencias.php" method="POST">
    <label>Idioma= <?php echo $idioma;?> </label><br>
    <label>Perfil Público= <?php echo $publico;?> </label><br>
    <label>Zona= <?php echo $zona;?></label><br>
    <input type="hidden" name="idioma" value="<?php echo $idioma?>">
    <input type="hidden" name="publico" value="<?php echo $publico?>">
    <input type="hidden" name="zona" value="<?php echo $zona?>">
    <div class="row">
                    <div class="form-group center">
                        <button type="button" name="borrar" id="borrar" class=" mt-2 col-5 btn btn-success"><a
                                href="mostrar.php" onclick=<?php session_destroy() ?>>Borrar</a></button>
                        <input type="submit" name="preferencias" id="preferencias" class="mt-2 col-6 btn btn-primary"
                            value="Establecer preferencias">
                    </div>

                </div>
                </form>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>