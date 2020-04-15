<?php
  require_once('Usuario.php');

  session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Sistema de controle de usuário</title>
</head>


<body>

  <section class="container">
    <div class="my-5 text-center">
      <span class="h2 d-block">Cadastro de Usuário</span>
      <h1 class="display-6 text-primary">NAC - Andrey YODA</h1>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form class="bg-light rounded p-4 box-shadow" method="POST" action="adiciona-usuario.php">
          <div class="form-group">
            <label for="clienteNome">Nome Completo:</label>
            <input type="text" class="form-control" name="nome" id="clienteNome" placeholder="Digite seu nome." required>
          </div>
          <div class="form-group">
            <div class="block">
              <label for="inputSexo">Sexo:</label>
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
            <div class="block">
              <label for="inputPerfil">Perfil:</label>
            </div>
            <div class="option form-check-inline">
              <div class="custom-control custom-checkbox form-check-inline">
                <input type="checkbox" class="custom-control-input" name="perfil[]" id="Administrador" value="Administrador">
                <label class="custom-control-label" for="Administrador">Administrador</label>
              </div>
              <div class="custom-control custom-checkbox form-check-inline">
                <input type="checkbox" class="custom-control-input" name="perfil[]" id="Contábil" value="Contábil">
                <label class="custom-control-label" for="Contábil">Contábil</label>
              </div>
              <div class="custom-control custom-checkbox form-check-inline">
                <input type="checkbox" class="custom-control-input" name="perfil[]" id="Financeiro" value="Financeiro">
                <label class="custom-control-label" for="Financeiro">Financeiro</label>
              </div>
            </div>
          </div>
            
            <div class="form-group row">
              <div class="col-8">

                <label for="inputData" class="block">Data de nascimento:</label>
                <div class="block">
                    <input class="form-control datepicker" name="data" type="date" value="01/01/2020" id="inputData">
                </div>
              </div>
              <div class="col-4"></div>
          
          </div>

          <div class="form-group row">
            <div class="col-8">
              <label for="inputSenha">Entre com uma senha para acesso:</label>
              <input type="password" id="inputPassword6" name="senha" class="form-control" aria-describedby="passwordHelpInline" minlength="4" maxlength="10">
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
    
    <section class="container">
        <div class="mt-3" >
            <div class="col-md-6 offset-md-3">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nome</th>
                            <th>Sexo</th>
                            <th>Perfil </th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <?php
                    if(isset($_SESSION['usuarios'])) {
                        foreach($_SESSION["usuarios"] as $usuario) {?>
                        <tr>
                            <td><?= $usuario->getNome()?></td>
                            <td><?= $usuario->getSexo()?></td>
                            <td>
                            <?php foreach($usuario->getPerfil() as $perfil) {?>
                                 <?= $perfil ?> <br>
                            <?php } ?>
                           </td>
                            <td><?= $usuario->getData()?></td>
                        </tr>
                    <?php 
                        }
                      }
                    ?>
                </table>
            </div>
        </div>
    </section>
</body>

</html>