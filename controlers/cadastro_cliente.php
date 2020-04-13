<?php
  session_start();
  #var_dump($_SESSION['usuarioErr']);
  if(isset($_SESSION["flag"]) and $_SESSION["flag"]!=1){
    $_SESSION["flag"]=0;
  }
?>
<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <title>Cadastro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <?php
    require('config.php');
  ?>

    <body>

      <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php">Home</a>
            </div>
          </div>
      </nav><!--************************************* Nabar do programa -->


  <?php
    if(isset($_POST['Nome']) && isset($_POST['Sobrenome']) && isset($_POST['Telefone']) && isset($_POST['CPF']) && isset($_POST['Cidade']) && isset($_POST['Estado']) && isset($_POST['usuario']) && isset($_POST['senha'])){
      #$string = base64_encode($_POST['senha']);
      $sql = "INSERT INTO `cliente`(`Nome`, `Sobrenome`, `Telefone`, `CPF`, `Cidade`, `Estado`, `usuario`, `senha`)
      VALUES ('".$_POST["Nome"]."','".$_POST["Sobrenome"]."', '".$_POST["Telefone"]."', '".$_POST["CPF"]."', '".$_POST["Cidade"]."', '".$_POST["Estado"]."','".$_POST["usuario"]."', '".$_POST['senha']."')";
      //$sql2 = "INSERT INTO `usuario`(`usuario`, `senha`)
                //VALUES ('".$_POST["usuario"]."', '".$_POST['senha']."')";
      echo $sql;
      //echo $sql2;
      $result = mysqli_query($conn,$sql);
      //$result2 = mysqli_query($conn,$sql2);
    }
  ?>

      <div class="cadastro" style="margin-left: 10px"> <!--div formulario de cadastro-->
        <h1>Cadastro</h1>
          <form method="post" action="">
            <div class="input-group col-md-6">
              <input id="Nome" type="text" class="form-control" name="Nome" placeholder="Nome">
            </div>
            <br>

            <div class="input-group col-md-6">  
              <input id="Sobrenome" type="text" class="form-control" name="Sobrenome" placeholder="Sobrenome">
            </div>
            <br>

            <div class="input-group col-md-6">
              <input id="Telefone" type="number" class="form-control" name="Telefone" placeholder="Telefone">
            </div>
            <br>

            <div class="input-group col-md-6">
              <input id="CPF" type="number" class="form-control" name="CPF" placeholder="CPF">
            </div>
            <br>

            <div class="input-group col-md-6">
              <input id="Cidade" type="text" class="form-control" name="Cidade" placeholder="Cidade">
            </div>
            <br>

            <div class="input-group col-md-6">
              <input id="Estado" type="text" class="form-control" name="Estado" placeholder="Estado">
            </div>
            <br>

            <!--<div class="input-group col-md-6">
              <input id="" type="text" class="form-control" name="" placeholder="">
            </div>
            <br>

            <div class="input-group col-md-6">
              <input id="" type="text" class="form-control" name="" placeholder="">
            </div>
            <br>-->

            <div class="input-group col-md-6">
              <input id="usuario" type="text" class="form-control" name="usuario" placeholder="Usuário">
            </div>
            <br> 
            
            <div class="input-group col-md-6">
              <input id="senha" type="password" class="form-control" name="senha" placeholder="Password">
            </div>
            <br> 

            <br>
            <input type="submit" value="Cadastrar">
            <br>
            <br>

            <!--<div class="row">
              <div class="col-sm-4"><button type="submit" class="btn btn-default btn-block">Cadastra</button></div>
              <div class="col-sm-8"></div>-->
                          
            </div>

          </form>

          <div><!-- modal login -->
                <div class="modal fade" id="popUpWindow">
                 
                     <div class="modal-dialog">
                      <div class="modal-content">
                        <!-- header -->
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h3 class="modal-title"></h3>
                        </div>
                        <!-- body -->
                        <div class="modal-header">
                          <form role="form">
                            <div class="form-group">
                              <input type="email" class="form-control" placeholder="Email"/>
                              <br>
                              <input type="password" class="form-control" placeholder="Password" />
                            </div>
                          </form>
                        </div>
                        <!-- footer -->
                        <div class="modal-footer">
                          <button class="btn btn-primary btn-block" onclick="myFunction()" >Log In</button>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div> <!-- fechamento  modal login -->

      <script>
          function myFunction() {
           window.location.href = "pag_cliente.php";
          }
      </script>

  </div>