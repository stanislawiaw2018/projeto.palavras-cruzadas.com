
<?php
/*
    try {
        $conn = new PDO("mysql:host=mydbinstance.custksmrwqt0.us-east-2.rds.amazonaws.com;port=3306;dbname=webdb", "sa", "password");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo '<script>window.onload = function() {
                swal({
                    title: "Falha na conexão!",
                    text: "Não foi possível estabelecer uma conexão com o banco de dados",
                    icon: "error",
                    closeOnEsc: false,
                    closeOnClickOutside: false
                })
                .then((value) => {
                    window.location.href = "/";
                });
            }</script>'; 
    }
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
    define('HOST','127.0.0.1');
    define('USUARIO','root');
    define('SENHA', '');
    define('DATABASE','pcdb');
    $conexao = mysqli_connect(HOST,USUARIO,SENHA,DATABASE);
    if(mysqli_connect_error()):
        echo '<script>window.onload = function() {
            swal({
                title: "Falha na conexão!",
                text: "Não foi possível estabelecer uma conexão com o banco de dados",
                icon: "error",
                closeOnEsc: false,
                closeOnClickOutside: false
            })
            .then((value) => {
               
            });
        }</script>'; 
    
    endif;
?>

