<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Sistema de controle de usuário</title>
</head>
<body>
        <form class="form-control" action="" action="">
            <label for="inputNome">Nome</label>
            <input type="text" name="nome" id="inputNome">

            <label for="inputSexo">Sexo</label>
            <div class="option">
                <input type="radio" name="sexo" value="Masculino">Masculino
                <input type="radio" name="sexo" value="Feminino">Feminino
            </div>

            <label for="inputPerfil">Perfil</label>
            <div class="option">
                <input type="checkbox" name="perfil" value="Administrador">Administrador
                <input type="checkbox" name="perfil" value="Contábil">Contábil
                <input type="checkbox" name="perfil" value="Financeiro">Financeiro
            </div>

            <label for="inputData">Data de nascimento</label>
            <input type="date" name="data" id="inputData">

            <label for="inputSenha">Entre com uma senha para acesso</label>
            <input type="password" name="senha" id="inputSenha">

            <input type="submit" class="btn-submit">
        </form>
</body>
</html>