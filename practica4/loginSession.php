<?php 
include 'db.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "select * from tbl_usuario where username = '$username' and password = '$password'";
    $result = $conexion->query($sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "id: ".$row["id_usuario"]
            ." - Name: "
            .$row["username"]
            ." ".$row["password"]."<br>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido</h1>
</body>
</html>
