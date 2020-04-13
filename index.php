<?php require_once ("head.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<header>
   
    <title>Tela inicial</title>
</header>
<body >
    <div class="tela-inicial">
        <div class="conteudo-inicial">
            <h1>Seja muito bem vindo ao <span style= color:red>CIRCULO DE PALAVRAS-CRUZADAS DO VERMELHO!</span></h1>
            <br>
            <p>Neste desafio você irá participar de um jogo de palavras cruzadas,
                onde será contabilizado o seu tempo de resposta, por isso sua habilidades de conhecimentos e eficiência são muito importantes,
                então lhe desejo, Boa sorte!. 
            </p>
            <br>
            <div id="mensagem">Aguarde! Seu desafio começará em 10 segundos.</div>
            <br>
            <div><img id="circulo_inicial"  src="arquivos/circulo-vermelho.png" alt="circulo-vermelho"></div>
            <h3>Deseja participar do nosso desafio?</h3>
            <button type="button" class="btn btn-danger" onclick=sim()>Sim</button>
            <button type="button" class="btn btn-danger" onclick=nao()>Não</button>

        </div>
            <script type="text/javascript" src="/js/palavras-cruzadas.js"></script>
    </div>
</body>
</html>
