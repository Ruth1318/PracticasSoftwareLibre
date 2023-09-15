<?php 
include 'db.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "Insert into tbl_usuario (username, password) values ('$user','$pass')";

    if($conexion->query($sql)){
        echo "New record created successfull";
    }else{
        echo "Error".$sql."<br>".$conexion->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>

<body>
    <form action="login.php" method="post">
        <table>
            <tbody>
                <tr>
                    <td>
                    <label for="">Usuario</label>
                    <input type="text" name="user">
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="">Contraseña</label>
                    <input type="password" name="pass">
                    </td>
                </tr>
                <tr>
                    <td>
                <button type="submit">Enviar!</button>
                </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>