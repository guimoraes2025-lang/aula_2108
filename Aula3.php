<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="estilo3.css">
</head>
<body>
    <header><h1>Formulários em PHP</h1></header>
    <nav></nav>
    <main>
        <form action="Aula3.php" method="POST">
            <table>
                <tr><td>Nome:</td><td><input type="text" name="nome"></td></tr>
                <tr><td>Matrícula:</td><td><input type="number" name="num"></td></tr>
                <tr><td>Qual sua linguagem preferida?</td><td>
                <select name="seleciona"  size="1">
                <option value="HTML">HTML</option>
                <option value="JS">JS</option>
                <option value="PHP">PHP</option>
                </select></td></tr>
                <tr><td>Tenho maior facilidade em:</td><td></td></tr>
                <tr><td><input type="radio" name="lin" value="HTML">HTML</td><td></td></tr>
                <tr><td><input type="radio" name="lin" value="JS">JS</td><td></td></tr>
                <tr><td><input type="radio" name="lin" value="PHP">PHP</td><td></td></tr>
                <tr><td>Atualmente eu:</td><td></td></tr>
                <tr><td><input type="checkbox" name="box1" value="Estudo">ESTUDO</td><td></td></tr>
                <tr><td><input type="checkbox" name="box2" value="Trabalho">TRABALHO</td><td></td></tr>
                <tr><td><td></td></td></tr>
                <tr><td><input type="reset" value="Apagar"></td><td><input type="submit" value='Enviar'></td></tr>
            </table>
        </form>
        <?php 
            if(isset($_POST['nome'])){
                $nome = $_POST['nome'];
            }
            else{
                $nome = null;
            }

            if(isset($_POST['num'])){
                $num = $_POST['num'];
            }
            else{
                $num = null;
            }
            
            if(isset($_POST['num'])){
                $num = $_POST['num'];
            }
            else{
                $num = null;
            }
            echo"<p>Nome: $nome</p>
            <p>Matrícula: $num</p>";
        ?>
        
    </main>
    <footer><h1>Sistemas Web I - Guilherme Moraes</h1></footer>
</body>
</html>
