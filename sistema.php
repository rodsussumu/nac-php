<?php
require_once('funcoes.php');
require_once('Usuario.php');

session_start();

if(isset($_POST['submit'])) {
    $_SESSION["usuarios"][] = new Usuario($_POST["nome"], $_POST["sexo"], $_POST["perfil"], $_POST["data"], $_POST["senha"]);
} else {
    $usuarios = [
        new Usuario("Rodrigo", "Masculino", ["Administrador", " "], "22/08/2000", "123456")
    ];
    $_SESSION["usuarios"] = $usuarios;
}
?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Sistema de controle de usuário</title>
</head>

<body>

  <section class="container">
    <div class="my-5 text-center">
      <span class="h6 d-block">Cadastro de Usuário</span>
      <h1 class="display-4 text-primary">Cadastra Mestre Andrey YODA</h1>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form class="bg-light rounded p-4 box-shadow" method="POST" action="">
          <div class="form-group">
            <label for="clienteNome">Nome</label>
            <input type="text" class="form-control" name="nome" id="clienteNome" placeholder="Digite seu nome.">
          </div>
          <div class="form-group">
            <div class="block">
              <label for="inputSexo">Sexo</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline1" name="sexo" value="Masculino" class="custom-control-input">
              <label class="custom-control-label" for="customRadioInline1">Masculino</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline2" name="sexo" value="Feminino" class="custom-control-input">
              <label class="custom-control-label" for="customRadioInline2">Feminino</label>
            </div>
          </div>

          <div class="form-group">
            <label for="inputPerfil">Perfil</label>
            <div class="option">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="perfil[]" id="Administrador" value="Administrador">
                <label class="custom-control-label" for="Administrador">Administrador</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="perfil[]" id="Contábil" value="Contábil">
                <label class="custom-control-label" for="Contábil">Contábil</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="perfil[]" id="Financeiro" value="Financeiro">
                <label class="custom-control-label" for="Financeiro">Financeiro</label>
              </div>
            </div>
          </div>
            
            <div class="form-group row">
              <div class="col-8">

                <label for="inputData" class="block">Data de nascimento</label>
                <div class="block">
                    <input class="form-control" name="data" type="date" value="01/01/2020" id="inputData">
                </div>
              </div>
              <div class="col-4"></div>
          
          </div>

          <div class="form-group row">
            <div class="col-8">
              <label for="inputSenha">Entre com uma senha para acesso</label>
              <input type="password" id="inputPassword6" name="senha" class="form-control" aria-describedby="passwordHelpInline">
              <small id="passwordHelpInline" class="text-muted" id="inputSenha" placeholder="Senha">
                Sua senha deve conter de 4-10 caracteres.
              </small>
            </div>
            <div class="col-4"></div>
          </div>

          <button type="submit" name="submit" class="btn btn-outline-primary">Cadastrar</button>

          </form>
        </div>
    </section>
          <?php
              foreach($_SESSION["usuarios"] as $usuario) {?>
              <tr>
                  <td><?= $usuario->getNome()?></td>
                  <td><?= $usuario->getSexo()?></td>
                  <?php foreach($usuario->getPerfil() as $perfil) {?>
                    <td><?= $perfil ?></td>
                  <?php } ?>
                  <td><?= $usuario->getData()?></td>
              </tr>
          <?php } ?>
</body>

</html>