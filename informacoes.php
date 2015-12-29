<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Êxodo arte em ferro</title>
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>  
    <script type="text/javascript" src="js/includes.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <?php include "includes/includes.php";?>
    <div class="container-fluid padding-left-less">

        <div class="col-sm-9 glass pull-right">
            <h2>Informações para contato</h2>
            <p><b>E-mail:</b><br>
            exodoarteferro@gmail.com<br>
            <br>
            <p><b>Fortaleza, CE, Brasil</b></p>
            <p><i class="fa fa-phone"></i> 
                <abbr title="Celular">C</abbr>: OI (85) 98810-0430</p>
            <p><i class="fa fa-phone"></i> 
                <abbr title="Celular">C</abbr>: TIM (85) 99644-7453</p>
            <p><i class="fa fa-envelope-o"></i> 
                <abbr title="Email">E</abbr>: <a href="mailto:exodoarteferro@gmail.com">exodoarteferro@gmail.com</a>
            </p>
            <p><i class="fa fa-clock-o"></i> 
                <abbr title="Horário de atendimento">H</abbr>: Domingo a Domingo: 8:00 às 22:00</p>

            <div class="row">
            <div class="col-sm-8">
                <h3>Mande-nos uma mensagem</h3>
                <form name="sentMessage" id="contactForm" action="sendmail.php" method="post">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nome:</label>
                            <input type="text" autofocus class="form-control" id="name" name="nome" required >
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="email" required name="email">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mensagem:</label>
                            <textarea rows="6" cols="100" class="form-control" id="message" name="mensagem" required style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

        </div> <!--col-9-->
    </div> <!--container-->
</body>
</html>