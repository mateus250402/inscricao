<?php
    if(isset($_POST['submit'])){
        
        include_once('config.php');

        $ctg = $_POST['ctg'];
        $nome1 = $_POST['nome1'];
        $cartao1 = $_POST['cartao1'];
        $nasc1 = $_POST['nasc1'];
        $validade1 = $_POST['validade1'];
        $nome2 = $_POST['nome2'];
        $cartao2 = $_POST['cartao2'];
        $nasc2 = $_POST['nasc2'];
        $validade2 = $_POST['validade2'];

        $result = mysqli_query($conexao, "INSERT INTO salao(ctg,nome1,cartao1,nasc1,validade1,nome2,cartao2,nasc2,validade2) VALUES ('$ctg','$nome1','$cartao1','$nasc1','$validade1','$nome2','$cartao2','$nasc2','$validade2')");
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
        <form action="salao.php" method="post">
            <fieldset>
                <legend><b>Inscrição JuvEnart 2025 - Dança de salão</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="ctg" id="ctg" class="inputUser" required>
                    <label class="labelInput" for="ctg">Nome da entidade - Cidade - Região Tradicionalista</label>
                </div>
                <br>
                <section class="dupla">
                        <div class="caixa">
                            <div class="inputBox">
                                <input type="text" name="nome1" id="nome" class="inputUser" required>
                                <label class="labelInput" for="nome">Nome completo</label>
                            </div>
                            <br>
                            <div class="inputBox">
                                <input type="text" name="cartao1" id="cartao" class="inputUser" required>
                                <label class="labelInput" for="cartao">Número Cartão Tradicionalista (RS-XXXXXXXX)</label>
                            </div>
                            <br>
                            <div class="datas">
                                <div class="inputBox" >
                                    <label for="nasc">Data de nascimento:</label>
                                    <input type="date" name="nasc1" id="nasc" required>
                                </div>
                                <div class="inputBox">
                                    <label for="validade">Validade do cartão:</label>
                                    <input type="date" name="validade1" id="validade" required>
                                </div>
                            </div>
                        </div>
                        <div class="caixa">
                            <div class="inputBox">
                                <input type="text" name="nome2" id="nome" class="inputUser" required>
                                <label class="labelInput" for="nome">Nome completo</label>
                            </div>
                            <br>
                            <div class="inputBox">
                                <input type="text" name="cartao2" id="cartao" class="inputUser" required>
                                <label class="labelInput" for="cartao">Número Cartão Tradicionalista (RS-XXXXXXXX)</label>
                            </div>
                            <br>
                            <div class="datas">
                                <div class="inputBox" >
                                    <label for="nasc">Data de nascimento:</label>
                                    <input type="date" name="nasc2" id="nasc" required>
                                </div>
                                <div class="inputBox">
                                    <label for="validade">Validade do cartão:</label>
                                    <input type="date" name="validade2" id="validade" required>
                                </div>
                            </div>
                        </div>
                </section>
                <div class="botao">
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
    </script>
</body>
</html>