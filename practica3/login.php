<?php
session_start();
$username = isset($_POST['username'])?$_POST['username']:'';
$password = isset($_POST['password'])?$_POST['password']:'';

$userdb='ruth';
$passdb='123';




if ($userdb==$username && $passdb==$passdb) {
    $_SESSION['username']=$username;
    header('Location:Index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="row container">
    <form action="" method="post">
        <div class="col-md-6 mt-2">
            <label for="username">Escribe tu usuario</label>
            <input type="text" class="form-control" id=""name="username">
        </div>
        <div class="col-md-6 mt-2">
            <label for="password">Escribe tu contraseña:</label>
            <input class="form-control" name="password" type="password" id="">
        </div>
        <div class="col-md-6 mt-2">
           <button type="submit" class="btn btn-primary">logearse</button>
        </div>
    </form>
</div>    

</body>
</html>