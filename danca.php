<?php
    if(isset($_POST['submit'])){
        
        include_once('config.php');

        $ctg = $_POST['ctg'];
        $nome = $_POST['nome'];
        $cartao = $_POST['cartao'];
        $nasc = $_POST['nasc'];
        $validade = $_POST['validade'];
        $func = $_POST['func'];

        $result = mysqli_query($conexao, "INSERT INTO inscritos(ctg,nome,cartao,nasc,validade,func) VALUES ('$ctg','$nome','$cartao','$nasc','$validade','$func')");

    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição JuvEnart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body onload="carregar();">
    <div class="box">
        <form action="danca.php" method="post" onsubmit="inscrito()">
            <fieldset>
                <legend><b>Inscrição JuvEnart 2025 - Danças Tradicionais</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="ctg" id="ctg" class="inputUser" required>
                    <label class="labelInput" for="ctg">Nome da entidade - Cidade - Região Tradicionalista</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label class="labelInput" for="nome">Nome completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="cartao" id="cartao" class="inputUser" required>
                    <label class="labelInput" for="cartao">Número Cartão Tradicionalista (RS-XXXXXXXX)</label>
                </div>
                <br>
                <div class="datas">
                    <div class="inputBox" >
                        <label for="nasc">Data de nascimento:</label>
                        <input type="date" name="nasc" id="nasc" required>
                    </div>
                    <div class="inputBox">
                        <label for="validade">Validade do cartão:</label>
                        <input type="date" name="validade" id="validade" required>
                    </div>
                </div>
                <div class="botao">
                    <div>
                    <p>Função:</p>
                        <input type="radio" id="dancarino" name="func" value="dancarino" required>
                        <label for="dancarino">Dançarino</label>
                        <input type="radio" id="instrutor" name="func" value="instrutor" required>
                        <label for="dancarino">Instrutor</label>
                        <input type="radio" id="patronagem" name="func" value="patronagem" required>
                        <label for="dancarino">Patronagem</label>
                        <input type="radio" id="coordenacao" name="func" value="coordenacao" required>
                        <label for="dancarino">Coordenação</label>
                        <input type="radio" id="assistentes" name="func" value="assistentes" required>
                        <label for="dancarino">Assistentes</label>
                    </div>
                        <input type="submit" name="submit" id="submit"> 
                    </div>
            </fieldset>
        </form>
    </div>
    <script>
        const botao =document.getElementById("submit");
        botao.onclick = () => {
            localStorage.setItem("ctg",document.getElementById("ctg").value);
   
        }
        function carregar(){
            document.getElementById("ctg").value = localStorage.getItem("ctg");
        }
        function inscrito(){
            alert("Inscrito com sucesso!");
        }
    </script>
</body>
</html>