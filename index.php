<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style type="text/css">
/*--------------------------------------------------
:: Login Section
-------------------------------------------------- */
#login {
    padding-top: 50px
}
#login .form-wrap {
    width: 30%;
    margin: 0 auto;
}
#login h1 {
    color: #0ba3e0;
    font-size: 18px;
    text-align: center;
    font-weight: bold;
    padding-bottom: 20px;
}
#login .form-group {
    margin-bottom: 25px;
}
#login .checkbox {
    margin-bottom: 20px;
    position: relative;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
}
div.col-xs-12 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
#login .checkbox.show:before {
    content: '\e013';
    color: #0ba3e0;
    font-size: 17px;
    margin: 1px 0 0 3px;
    position: absolute;
    pointer-events: none;
    font-family: 'Glyphicons Halflings';
}
#login .checkbox .character-checkbox {
    width: 25px;
    height: 25px;
    cursor: pointer;
    border-radius: 3px;
    border: 1px solid #ccc;
    vertical-align: middle;
    display: inline-block;
}
#login .checkbox .label {
    color: #0ba3e0;
    font-size: 13px;
    font-weight: normal;
}
#login .btn.btn-custom {
    font-size: 14px;
    margin-bottom: 20px;
}
#login .forget {
    font-size: 13px;
    text-align: center;
    display: block;
}
.center {
    text-align: center;
}

/*    --------------------------------------------------
    :: Inputs & Buttons
    -------------------------------------------------- */
.form-control {
    color: #212121;
}
.btn-custom {
    color: #fff;
    background-color: #0ba3e0;
}
.btn-custom:hover,
.btn-custom:focus {
    color: #fff;
}

/*    --------------------------------------------------
    :: Footer
    -------------------------------------------------- */
#footer {
    color: #6d6d6d;
    font-size: 12px;
    text-align: center;
}
#footer p {
    margin-bottom: 0;
}
#footer a {
    color: inherit;
}
</style>
<title>COMLINKS Login</title>
<script type="text/javascript">//<![CDATA[
window.onload=function(){

}//]]>
</script>
</head>
<script type="text/javascript">function showPassword() {
    
    var key_attr = $('#key').attr('type');
    
    if(key_attr != 'text') {
        
        $('.checkbox').addClass('show');
        $('#key').attr('type', 'text');
        
    } else {
        
        $('.checkbox').removeClass('show');
        $('#key').attr('type', 'password');
        
    }
    
}</script>
<body>
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-sm-12 col-md-6 col-md-push-3 col-lg-4 col-lg-push-4">
                    <h1>Sistema COMLINKS</h1>
                    <form role="form" action="busca_no_bd.php" method="post" id="login-form" autocomplete="off">
                        <div id="success" class="text-center"></div>
                        <div class="form-group">
                        <?php
                            if(isset($_GET["error"]) and  $_GET["error"] == "mail")
                                echo "<div id='trouble' class='alert alert-danger'>Login não encontrado</div>"?>
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu email" required>
                        </div>
                        <div class="form-group">
                        <?php
                            if(isset($_GET["error"]) and $_GET["error"] == "password")
                                echo"<div id='trouble' class='alert alert-danger'>Senha Incorreta</div>"?>
                            <label for="key" class="sr-only">Password</label>
                            <input type="password" name="key" id="key" class="form-control" placeholder="Senha" required>
                        </div>
                        <div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Mostrar Senha</span>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Entrar">
                    </form>
                    <a href="javascript:;" class="forget" id="forget" data-toggle="modal" data-target=".forget-modal">Esqueceu a Senha?</a>
                    <hr>
                    <div class="center">
                        <p>© - 2016</p>
                        <p>PROPP - UESC</p>
                    </div>
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Recuperar Senha</h4>
            </div>
            <div class="modal-body">
                <p>Escreva seu email</p>
                <input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">
            </div>
            <div id="fail" class="text-center"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
                <button type="button" id="send" class="btn btn-custom">Enviar</button>
                
            </div>
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->
<script>
    
    $('#forget').on('click', function(){
        $('#recovery-email').val('');
        $('#fail').html("");
        $('#fail').removeClass(" alert alert-danger");
        $('#fail').removeClass(" alert alert-success");
    });

    $('#send').on('click', function(){
        //var emailP = $("#recovery-email").val();
        ajaxSubscribe();
    }); 


    function ajaxSubscribe() {
    
        $.ajax({
            method: 'POST',
            url: '../estagio/final/index.php/login/redirecionar_email?email='+$("#recovery-email").val(),
            data: {
                email: $("#recovery-email").val()
            }
        })//webpropp@uesc.br
        .success(function( data ) {
            $('#success').html("");
            $('#fail').html("");
            switch(data){
                case "E-mail enviado com sucesso":
                    $('.modal').modal("hide");
                    $('#email').val($("#recovery-email").val());
                    $('#success').addClass(" alert alert-success");
                    $('#success').append(data);
                break;

                case "Falha no envio do e-mail":
                    $('#fail').removeClass(" alert alert-warning");
                    $('#fail').addClass(" alert alert-danger");
                    $('#fail').append(data);
                break;

                case "E-mail não encontrado!":
                    $('#fail').removeClass(" alert alert-danger");
                    $('#fail').addClass(" alert alert-warning");
                    $('#fail').append(data);
                break;
            }
            //alert(data);
            
            //console.log("E-mail enviado com sucesso");
        });
    
    }
</script>
</body>
