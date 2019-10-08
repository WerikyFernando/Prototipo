<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../libs/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Source+Serif+Pro&display=swap" rel="stylesheet">
</head>
<body class="bg-dark"> 
<div class="container-fluid">
      <div class="container tam-400px bg-white mt-5">
        <div class="row bg-transparent">
          <div class="col-md text-center">
            <h1 class="titulo-25 bold-600 text-darkPink">Cadastro de Professor</h1>
          </div>
        </div>
        <form action="../controller/cadastroAdmin.php" method="post" id="formulario" class="pb-5 pt-3 align-center campo-75">
          <div class="form-row">
            <div class="form-group col-lg">
              <input class="form-control" type="text" name="txtNome" placeholder="Nome" required="required">
              <span class="text-danger"></span>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-lg">
              <input class="form-control" type="text" name="txtLogin" placeholder="Login" required="required">
              <span class="text-danger"></span>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-lg">
              <input class="form-control" type="password" name="pwSenha" placeholder="Senha" required="required">
              <span class="text-danger"></span>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-lg">
              <input class="form-control" type="password" name="pwSenhaConfirm" placeholder="Senha (Confirmar)" required="required">
              <span class="text-danger"></span>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-lg">
                <input class="form-control" type="password" name="pwChave" placeholder="Chave de Segurança" required="required">
                <span class="text-danger"></span>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-lg text-center">
              <input class="btn bg-info text-white" type="submit" name="btnCadastro" value="Cadastrar">
            </div>
          </div>
        </form>
      </div>
    </div>      
</body>
</html>