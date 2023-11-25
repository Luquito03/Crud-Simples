<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
    <link rel="stylesheet" href= "loginCss/login.css">
    <title>Cadastro corretor</title>
    
</head>
<body>

    <div class="contain">

        <h1>Cadastro de Corretor</h1>
        <div class="wrapper">
        
            
            <form action="salvar-usuario.php" method="POST">
                <input type="hidden" name="acao" value="cadastrar">


                <div>
                    <input type="text" name="cpf" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" minlength="11" maxlength="11" placeholder="Digite seu CPF" required>
                </div>

                <div>
                    <input type="text" name="creci" minlength="2" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Digite seu Creci" required>
                </div>

                <div class="full-widht">
                    <input type="text" name="nome" minlength="2" placeholder="Digite seu nome" required>
                </div>

                <div class="full-widht">
                    <input class="botao" type="submit" value="Enviar">
                </div>

            </form>
        
        </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>