<?php 
    include_once("conexao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title tags -->
    <title>Palavras Cruzadas</title>
    <link rel="shortcut icon" href="/arquivos/favicon.png" type="image/x-icon">
    
    <!-- Bootstrap and main CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    
</head>
<body>
    <!-- HEADER -->
    <nav class="p-5">
        <!-- Menu Bootstrap -->
        <ul class="nav nav-pills align-items-center">
            <li class="nav-item pr-4">
                <a href="" data-toggle="tooltip" title="Home"><img src="../arquivos/favicon.png" alt="Ícone quadriculado"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" id="btn-NovoJogo" href="javascript:btnNovoJogo()">Novo jogo</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">Desenvolvedores</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item disabled" href="#">Antonio Stanislaw</a>
                </div>
            </li>
            <li><span >CÍRCULO DE PALAVRAS-CRUZADAS DO VERMELHO</span></li>
            
        </ul>
    </nav>

    <!-- CONTEUDO -->
    <section class="p-5">
        <noscript>
            <div >SEU JAVA SCRIPT ESTÁ DESABILITADO OU NÃO TEM SUPORTE!</div>
        </noscript>
        <div class="row">

            <!-- AREA DE FORMULARIOS -->
            <div class="col-lg-3">
                <!-- Formulario Bootstrap -->
                
                <!-- Formulario Bootstrap -->
                <form id="form-jogo" class="d-none">
                    <h1 class="mb-4">Configurar Jogo</h1>           
                    <div class="form-group">
                        <label for="nome1" style="font-weight: bold">Digite o seu nome</label>
                        <input type="text" class="form-control" onblur="checaNumero(this.value);" name="nome" id="nome2" placeholder="Nome do participante">
                    </div>
                    <button id="btnJogar" type="button" onclick="carregaDados()" class="btn btn-primary mt-4">Jogar</button>
                </form>
                <div id="cronometro" class="d-none">
            
                    <span id="minutos">00</span>:<span id="segundos">00</span>
                    

                </div>
               
               <!-- <div id="campo-nome" class="d-none">
            
                    <?php 
                    //    $nome= "<span id='meu-nome'></span>";
                     //   echo "nome é $nome";
                    
                   ?>
                </div>
                <div id="campo-tempo" class="d-none">
                    <?php
                       // $tempo= "<span id='meu-tempo'></span>";
                       // echo "$tempo";
                    ?>
                </div>-->
            </div>
            
            <!-- AREA DO JOGO -->
            <div class="col-lg-9 p-4 text-center">                
                <!-- 12 Linhas com 12 Colunas -->
                <input type="text" maxlength="1" class="celula" disabled id="c1">
                <input type="text" maxlength="1" class="celula" disabled id="c2">
                <input type="text" maxlength="1" class="celula" disabled id="c3">
                <input type="text" maxlength="1" class="celula" disabled id="c4">
                <input type="text" maxlength="1" class="celula" disabled id="c5">
                <input type="text" maxlength="1" class="celula" disabled id="c6">
                <input type="text" maxlength="1" class="celula" disabled id="c7">
                <input type="text" maxlength="1" class="celula" disabled id="c8">
                <input type="text" maxlength="1" class="celula" disabled id="c9">
                <input type="text" maxlength="1" class="celula" disabled id="c10">
                <input type="text" maxlength="1" class="celula" disabled id="c11">
                <input type="text" maxlength="1" class="celula" disabled id="c12">
                <br>
                <input type="text" maxlength="1" class="celula" disabled id="c13">
                <input type="text" maxlength="1" class="celula" disabled id="c14">
                <input type="text" maxlength="1" class="celula" disabled id="c15">
                <input type="text" maxlength="1" class="celula" disabled id="c16">
                <input type="text" maxlength="1" class="celula" disabled id="c17">
                <input type="text" maxlength="1" class="celula" disabled id="c18">
                <input type="text" maxlength="1" class="celula" disabled id="c19">
                <input type="text" maxlength="1" class="celula" disabled id="c20">
                <input type="text" maxlength="1" class="celula" disabled id="c21">
                <input type="text" maxlength="1" class="celula" disabled id="c22">
                <input type="text" maxlength="1" class="celula" disabled id="c23">
                <input type="text" maxlength="1" class="celula" disabled id="c24">
                <br>
                <input type="text" maxlength="1" class="celula" disabled id="c25">
                <input type="text" maxlength="1" class="celula" disabled id="c26">
                <input type="text" maxlength="1" class="celula" disabled id="c27">
                <input type="text" maxlength="1" class="celula" disabled id="c28">
                <input type="text" maxlength="1" class="celula" disabled id="c29">
                <input type="text" maxlength="1" class="celula" disabled id="c30">
                <input type="text" maxlength="1" class="celula" disabled id="c31">
                <input type="text" maxlength="1" class="celula" disabled id="c32">
                <input type="text" maxlength="1" class="celula" disabled id="c33">
                <input type="text" maxlength="1" class="celula" disabled id="c34">
                <input type="text" maxlength="1" class="celula" disabled id="c35">
                <input type="text" maxlength="1" class="celula" disabled id="c36">
                <br>
                <input type="text" maxlength="1" class="celula" disabled id="c37">
                <input type="text" maxlength="1" class="celula" disabled id="c38">
                <input type="text" maxlength="1" class="celula" disabled id="c39">
                <input type="text" maxlength="1" class="celula" disabled id="c40">
                <input type="text" maxlength="1" class="celula" disabled id="c41">
                <input type="text" maxlength="1" class="celula" disabled id="c42">
                <input type="text" maxlength="1" class="celula" disabled id="c43">
                <input type="text" maxlength="1" class="celula" disabled id="c44">
                <input type="text" maxlength="1" class="celula" disabled id="c45">
                <input type="text" maxlength="1" class="celula" disabled id="c46">
                <input type="text" maxlength="1" class="celula" disabled id="c47">
                <input type="text" maxlength="1" class="celula" disabled id="c48">
                <br>
                <input type="text" maxlength="1" class="celula" disabled id="c49">
                <input type="text" maxlength="1" class="celula" disabled id="c50">
                <input type="text" maxlength="1" class="celula" disabled id="c51">
                <input type="text" maxlength="1" class="celula" disabled id="c52">
                <input type="text" maxlength="1" class="celula" disabled id="c53">
                <input type="text" maxlength="1" class="celula" disabled id="c54">
                <input type="text" maxlength="1" class="celula" disabled id="c55">
                <input type="text" maxlength="1" class="celula" disabled id="c56">
                <input type="text" maxlength="1" class="celula" disabled id="c57">
                <input type="text" maxlength="1" class="celula" disabled id="c58">
                <input type="text" maxlength="1" class="celula" disabled id="c59">
                <input type="text" maxlength="1" class="celula" disabled id="c60">
                <br>
                <input type="text" maxlength="1" class="celula" disabled id="c61">
                <input type="text" maxlength="1" class="celula" disabled id="c62">
                <input type="text" maxlength="1" class="celula" disabled id="c63">
                <input type="text" maxlength="1" class="celula" disabled id="c64">
                <input type="text" maxlength="1" class="celula" disabled id="c65">
                <input type="text" maxlength="1" class="celula" disabled id="c66">
                <input type="text" maxlength="1" class="celula" disabled id="c67">
                <input type="text" maxlength="1" class="celula" disabled id="c68">
                <input type="text" maxlength="1" class="celula" disabled id="c69">
                <input type="text" maxlength="1" class="celula" disabled id="c70">
                <input type="text" maxlength="1" class="celula" disabled id="c71">
                <input type="text" maxlength="1" class="celula" disabled id="c72">
                <br>
                <input type="text" maxlength="1" class="celula" disabled id="c73">
                <input type="text" maxlength="1" class="celula" disabled id="c74">
                <input type="text" maxlength="1" class="celula" disabled id="c75">
                <input type="text" maxlength="1" class="celula" disabled id="c76">
                <input type="text" maxlength="1" class="celula" disabled id="c77">
                <input type="text" maxlength="1" class="celula" disabled id="c78">
                <input type="text" maxlength="1" class="celula" disabled id="c79">
                <input type="text" maxlength="1" class="celula" disabled id="c80">
                <input type="text" maxlength="1" class="celula" disabled id="c81">
                <input type="text" maxlength="1" class="celula" disabled id="c82">
                <input type="text" maxlength="1" class="celula" disabled id="c83">
                <input type="text" maxlength="1" class="celula" disabled id="c84">
                <br>
                <input type="text" maxlength="1" class="celula" disabled id="c85">
                <input type="text" maxlength="1" class="celula" disabled id="c86">
                <input type="text" maxlength="1" class="celula" disabled id="c87">
                <input type="text" maxlength="1" class="celula" disabled id="c88">
                <input type="text" maxlength="1" class="celula" disabled id="c89">
                <input type="text" maxlength="1" class="celula" disabled id="c90">
                <input type="text" maxlength="1" class="celula" disabled id="c91">
                <input type="text" maxlength="1" class="celula" disabled id="c92">
                <input type="text" maxlength="1" class="celula" disabled id="c93">
                <input type="text" maxlength="1" class="celula" disabled id="c94">
                <input type="text" maxlength="1" class="celula" disabled id="c95">
                <input type="text" maxlength="1" class="celula" disabled id="c96">
                <br>
                <input type="text" maxlength="1" class="celula" disabled id="c97">
                <input type="text" maxlength="1" class="celula" disabled id="c98">
                <input type="text" maxlength="1" class="celula" disabled id="c99">
                <input type="text" maxlength="1" class="celula" disabled id="c100">
                <input type="text" maxlength="1" class="celula" disabled id="c101">
                <input type="text" maxlength="1" class="celula" disabled id="c102">
                <input type="text" maxlength="1" class="celula" disabled id="c103">
                <input type="text" maxlength="1" class="celula" disabled id="c104">
                <input type="text" maxlength="1" class="celula" disabled id="c105">
                <input type="text" maxlength="1" class="celula" disabled id="c106">
                <input type="text" maxlength="1" class="celula" disabled id="c107">
                <input type="text" maxlength="1" class="celula" disabled id="c108">
                <br>
                <input type="text" maxlength="1" class="celula" disabled id="c109">
                <input type="text" maxlength="1" class="celula" disabled id="c110">
                <input type="text" maxlength="1" class="celula" disabled id="c111">
                <input type="text" maxlength="1" class="celula" disabled id="c112">
                <input type="text" maxlength="1" class="celula" disabled id="c113">
                <input type="text" maxlength="1" class="celula" disabled id="c114">
                <input type="text" maxlength="1" class="celula" disabled id="c115">
                <input type="text" maxlength="1" class="celula" disabled id="c116">
                <input type="text" maxlength="1" class="celula" disabled id="c117">
                <input type="text" maxlength="1" class="celula" disabled id="c118">
                <input type="text" maxlength="1" class="celula" disabled id="c119">
                <input type="text" maxlength="1" class="celula" disabled id="c120">
                <br>
                <input type="text" maxlength="1" class="celula" disabled id="c121">
                <input type="text" maxlength="1" class="celula" disabled id="c122">
                <input type="text" maxlength="1" class="celula" disabled id="c123">
                <input type="text" maxlength="1" class="celula" disabled id="c124">
                <input type="text" maxlength="1" class="celula" disabled id="c125">
                <input type="text" maxlength="1" class="celula" disabled id="c126">
                <input type="text" maxlength="1" class="celula" disabled id="c127">
                <input type="text" maxlength="1" class="celula" disabled id="c128">
                <input type="text" maxlength="1" class="celula" disabled id="c129">
                <input type="text" maxlength="1" class="celula" disabled id="c130">
                <input type="text" maxlength="1" class="celula" disabled id="c131">
                <input type="text" maxlength="1" class="celula" disabled id="c132">
                <br>
                <input type="text" maxlength="1" class="celula" disabled id="c133">
                <input type="text" maxlength="1" class="celula" disabled id="c134">
                <input type="text" maxlength="1" class="celula" disabled id="c135">
                <input type="text" maxlength="1" class="celula" disabled id="c136">
                <input type="text" maxlength="1" class="celula" disabled id="c137">
                <input type="text" maxlength="1" class="celula" disabled id="c138">
                <input type="text" maxlength="1" class="celula" disabled id="c139">
                <input type="text" maxlength="1" class="celula" disabled id="c140">
                <input type="text" maxlength="1" class="celula" disabled id="c141">
                <input type="text" maxlength="1" class="celula" disabled id="c142">
                <input type="text" maxlength="1" class="celula" disabled id="c143">
                <input type="text" maxlength="1" class="celula" disabled id="c144">
                <br>                
            </div>

        <!-- Fecha row -->
        </div>
    </section>

    <!-- AUTENTICACAO CLIENTSIDE -->
    

    <!-- Bootstrap / SweetAlert / main JS -->
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    
    <script src="/js/palavras-cruzadas.js"></script>
    
    <!-- Allows tooltip -->
    <script>$('input').tooltip();</script>
   

</body>
</html>

