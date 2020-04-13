	<?php
		include_once("conexao.php");
		//include("dados-conexao.php"); // Carrega os dados da conexão!	
		if ($_GET) // Testa se existe valores na URL!
		echo "ENTROU NO GRAVA.PHP";
		{
			try { 
				
				$nome = $_GET['nome'];
				$query2="select * from tb_participantes where nome= '{$nome}'";
						$busca = mysqli_query($conexao, $query2);
						$row = mysqli_num_rows($busca);
						if($row >= 1) {
							echo "JÁ EXISTE ELEMENTO<br>";
							echo "$nome<br>";
							$query2="select tempo from tb_participantes where nome='{$nome}'";
							$busca = mysqli_query($conexao, $query2);
							$menor=$_GET["tempo"];
							echo "$menor<br>";
							while($dados = $busca->fetch_array()){ 
								if ($dados["tempo"]<$menor){
									$menor=$dados["tempo"];
								}
							}
							echo "novo tempo= $menor";
							$comandoSQL = "UPDATE tb_participantes SET tempo = '$menor' WHERE nome= '$_GET[nome]'";
							$resultado = mysqli_query($conexao,$comandoSQL);
							exit();
						} else {
							echo "NÃO EXISTE";
							$comandoSQL = "INSERT INTO tb_participantes (nome,tempo) VALUES ('$_GET[nome]','$_GET[tempo]')";
				
							$resultado = mysqli_query($conexao,$comandoSQL);
							exit();
						}


				
				
				// tenta fazer a conexão e executar o INSERT
				//$conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha); //istancia a classe PDO
				//$conecta->exec("set names utf8"); //permite caracteres latinos.
		//       $comandoSQL = "INSERT INTO tb_participantes (nome,tempo) VALUES ('$_GET[nome]','$_GET[tempo]')";
				
		//       $resultado = mysqli_query($conexao,$comandoSQL);
				//$grava = $conecta->prepare($comandoSQL); //testa o comando SQL
				//$grava->execute(array()); 			
			} catch(PDOException $e) { // casso retorne erro
				echo('Erro: ' . $e->getMessage()); 
			}
		} 
	?>
