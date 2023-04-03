<?php
    if($_POST){
        if($_POST['usuario'] == 'tenz' && $_POST['password'] == '12345' ){
            header("Location: index.php");
        }else{
            echo "<script> alert('Datos Incorrectos') </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>

            <div class="col-md-4">
                <h1>Inicio de Sesion:</h1>

                <form action="" method="post" class="form-control">
                    <label for="usuario">Usuario:</label>
                    <input class="form-control" type="text" name="usuario" id="usuario">

                    <label for="password">Password:</label>
                    <input class="form-control" type="text" name="password" id="password"> 

                    <button class="btn btn-success mt-3" type="submit">Login</button>
                </form>
            </div>

            <div class="col-md-4">

            </div>
        </div>
    </div>

</body>
</html>



        