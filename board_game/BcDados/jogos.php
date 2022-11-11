<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados dos jogos</title>
    <?php
        include_once("conexao.php");
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="jogo">Nome do Jogo</label>
        <input type="text" name="nomeJogo" maxlength="100" placeholder="Nome do Jogo" required><br/>
        <input type="submit" value="Adicionar">
        <input type="reset" value="Limpar">
    </form>
    <p><a href="../index.html">Voltar</a></p>
    <?php
        $jogo = isset($_POST["nomeJogo"]) ? trim(ucwords(strtolower($_POST["nomeJogo"]))) : "[NÃO INFORMADO]";
        $insert = "insert into jogos (jogo) values ('$jogo');";
        $salvar = mysqli_query($conexao, $insert);

        mysqli_close($conexao);
    ?>
</body>
</html>