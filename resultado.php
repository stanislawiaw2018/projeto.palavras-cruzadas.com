<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>RESULTADO</title>
</head>
<body style="text-align: center;">
<?php
$cont = 1; 
include("conexao.php");
$query2="select * from tb_participantes order by tempo asc  ";
$busca = mysqli_query($conexao, $query2);
?>
    <div class="container p-3 my-2">
  

            <table class="table table-hover table-danger">
            <thead>
                <tr>
                <th scope="col" >#</th>
                <th scope="col">Nome</th>
                <th scope="col" >Tempo</th>
                
                </tr>
            </thead>

            
            <?php while($dados = $busca->fetch_array()){ ?>
            <tbody>
                <tr>
                <th scope="row" ><?php echo $cont++ ?></th>
                <td ><?php echo $dados["nome"]; ?></td>
                <td ><?php echo $dados["tempo"]; ?></td>
                
                </tr>
            <?php } ?>
            
            </tbody>
            </table>
    </div>
</body>
</html>

