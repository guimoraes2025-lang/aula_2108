<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo0.css">
    <title>RELAÇÃO CINTURA QUADRIL</title>
</head>
<body>
    <header><h1>RQC MASCULINO E FEMININO</h1></header>
    <main>
        <section>
        <p>A relação cintura-quadril (RCQ) é o cálculo feito com as medidas da cintura e do quadril para verificar o risco de doença cardiovascular.<br>
         Isso porque, quanto maior a concentração da gordura abdominal, maior o risco de ter problemas como colesterol alto, diabetes, pressão <br> alta ou aterosclerose.
        A presença dessas doenças juntamente com o excesso de gordura na região abdominal do corpo também aumenta<br>
        o risco de problemas mais graves para a saúde, como infarto, AVC e gordura no fígado.

        Em caso de relação cintura-quadril alta, é  importante <br> que o médico seja consultado para que sejam feitos exames que permitam verificar se há alguma doença e, assim, orientar formas de <br> combatê-la  ou preveni-la.</p>
        <form action="rcq.php" method="POST">
            <table>
                <tr><td>Qual é o Seu sexo?</td><td></td></tr>
                <tr><td><input type="radio" name="ques_2" value="a">F</td><td></td></tr>
                <tr><td><input type="radio" name="ques_2" value="b">M</td><td></td></tr>

                <tr><td>Qual é sua idade?</td><td></td></tr>
                <tr><td><input type="radio" name="ques_1" value="a">ATÉ 29</td><td></td></tr>
                <tr><td><input type="radio" name="ques_1" value="b">30 - 39</td><td></td></tr>
                <tr><td><input type="radio" name="ques_1" value="c">40 - 49</td><td></td></tr>
                <tr><td><input type="radio" name="ques_1" value="d">50 - 59</td><td></td></tr>
                <tr><td><input type="radio" name="ques_1" value="e">> 59</td><td></td></tr>


                <tr><td>Cintura: </td><td><input type="number" value="num2" name="num2"></td></tr>

                <tr><td>Quadril: </td><td><input type="number" value="num3" name="num3"></td></tr>
                <tr><td></td><td></td></tr>
                

                <tr><td><input type="reset" id="botaor" value="Resetar"></td><td><input type="submit" id="botaog" value="Enviar"></td></tr>
        </form>
            </table>

        <?php
            if (isset($_POST["ques_2"])) {
                $ques_2 = $_POST["ques_2"];
            } else {
                $ques_2 = null;
            }
            if (isset($_POST["ques_1"])) {
                $ques_1 = $_POST["ques_1"];
            } else {
                $ques_1 = null;
            }
            if (isset($_POST["num2"])) {
                $num2 = $_POST["num2"];
            } else {
                $num2 = null;
            }
            if (isset($_POST["num3"])) {
                $num3 = $_POST["num3"];
            } else {
                $num3 = null;
            }

            if ($num2 == null || $num3 == null || $ques_1 == null || $ques_2 == null) {
            
                echo "<p class='red'> Por favor, preencha todos os campos.</p>";
            } else {
                
                $rcq = $num2 / $num3; 
                echo"<p class='blue' >RCQ:$rcq<p/>";
            if ($ques_2 == "b") { // Masculino
                if ($ques_1 == "a") { // Até 29 anos
                    if ($rcq <= 0.83) {
                        echo "<p class='blue'>Risco Baixo</p>";
                    } else if ($rcq>0.83 && $rcq<= 0.88) {
                        echo "<p class='yellow'>Risco Moderado</p>";
                    } else if ($rcq>= 0.89 && $rcq <= 0.94) {
                        echo "<p class='orange'>Risco Alto</p>";
                    } else if ($rcq > 0.94) {
                        echo "<p class='red'>Risco Muito Alto</p>";
                    }
                } else if ($ques_1 == "b") { // 30 - 39 anos
                    if ($rcq <= 0.84) {
                        echo "<p class='blue'>Risco Baixo</p>";
                    } else if ($rcq > 0.84 && $rcq<= 0.91) {
                        echo "<p class='yellow'>Risco Moderado</p>";
                    } else if ($rcq >= 0.92 && $rcq <= 0.96) {
                        echo "<p class='orange'>Risco Alto</p>";
                    } else if ($rcq > 0.96) {
                        echo "<p class='red'>Risco Muito Alto</p>";
                    }
                } else if ($ques_1 == "c") { // 40 - 49 anos
                    if ($rcq <= 0.88) {
                        echo "<p class='blue'>Risco Baixo</p>";
                    } else if ($rcq > 0.88 && $rcq<= 0.95) {
                        echo "<p class='yellow'>Risco Moderado</p>";
                    } else if ($rcq >= 0.96 && $rcq <= 1.00) {
                        echo "<p class='orange'>Risco Alto</p>";
                    } else if ($rcq > 1.00) {
                        echo "<p class='red'>Risco Muito Alto</p>";
                    }
                } else if ($ques_1 == "d") { // 50 - 59 anos
                    if ($rcq <= 0.90) {
                        echo "<p class='blue'>Risco Baixo</p>";
                    } else if ($rcq > 0.90 && $rcq<= 0.96) {
                        echo "<p class='yellow'>Risco Moderado</p>";
                    } else if ($rcq >= 0.97 && $rcq <= 1.02) {
                        echo "<p class='orange'>Risco Alto</p>";
                    } else if ($rcq > 1.02) {
                        echo "<p class='red'>Risco Muito Alto</p>";
                    }
                } else if ($ques_1 == "e") { // > 59 anos
                    if ($rcq <= 0.91) {
                        echo "<p class='blue'>Risco Baixo</p>";
                    } else if ($rcq > 0.91 && $rcq<= 0.98) {
                        echo "<p class='yellow'>Risco Moderado</p>";
                    } else if ($rcq >= 0.99 && $rcq <= 1.03) {
                        echo "<p class='orange'>Risco Alto</p>";
                    } else if ($rcq > 1.03) {
                        echo "<p class='red'>Risco Muito Alto</p>";
                    }
                }
            } else if ($ques_2 == "a") { // Feminino
                if ($ques_1 == "a") { // Até 29 anos
                    if ($rcq <= 0.71) {
                        echo "<p class='blue'>Risco Baixo</p>";
                    } else if ($rcq > 0.71 && $rcq<= 0.77) {
                        echo "<p class='yellow'>Risco Moderado</p>";
                    } else if ($rcq >= 0.78 && $rcq <= 0.82) {
                        echo "<p class='orange'>Risco Alto</p>";
                    } else if ($rcq > 0.82) {
                        echo "<p class='red'>Risco Muito Alto</p>";
                    }
                } else if ($ques_1 == "b") { //30 - 39 anos
                    if ($rcq <= 0.72) {
                        echo "<p class='blue'>Risco Baixo</p>";
                    } else if ($rcq > 0.72 && $rcq<= 0.78) {
                        echo "<p class='yellow'>Risco Moderado</p>";
                    } else if ($rcq >= 0.79 && $rcq <= 0.84) {
                        echo "<p class='orange'>Risco Alto</p>";
                    } else if ($rcq > 0.87) {
                        echo "<p class='red'>Risco Muito Alto</p>";
                    }
                } else if ($ques_1 == "c") { // 40 -49 anos
                    if ($rcq <= 0.73) {
                        echo "<p class='blue'>Risco Baixo</p>";
                    } else if ($rcq > 0.73 && $rcq<= 0.79) {
                        echo "<p class='yellow'>Risco Moderado</p>";
                    } else if ($rcq >= 0.80 && $rcq <= 0.87) {
                        echo "<p class='orange'>Risco Alto</p>";
                    } else if ($rcq > 0.87) {
                        echo "<p class='red'>Risco Muito Alto</p>";
                    }
                } else if ($ques_1 == "d") { // 50 - 59 anos
                    if ($rcq <= 0.74) {
                        echo "<p class='blue'>Risco Baixo</p>";
                    } else if ($rcq > 0.74 && $rcq<= 0.81) {
                        echo "<p class='yellow'>Risco Moderado</p>";
                    } else if ($rcq >= 0.82 && $rcq <= 0.88) {
                        echo "<p class='orange'>Risco Alto</p>";
                    } else if ($rcq > 0.88) {
                        echo "<p class='red'>Risco Muito Alto</p>";
                    }
                } else if ($ques_1 == "e") { // maior que 59  anos ggwp
                    if ($rcq <= 0.76) {
                        echo "<p class='blue'>Risco Baixo</p>";
                    } else if ($rcq > 0.76 && $rcq<= 0.83) {
                        echo "<p class='yellow'>Risco Moderado</p>";
                    } else if ($rcq >= 0.84 && $rcq <= 0.90) {
                        echo "<p class='orange'>Risco Alto</p>";
                    } else if ($rcq > 0.90) {
                        echo "<p class='red'>Risco Muito Alto</p>";
                    }
                }
            
            }
        } 
            ?>
        </section>
                    

    </main>

</body>
</html>
