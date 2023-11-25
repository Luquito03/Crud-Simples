<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
    <link rel="stylesheet" href="loginCss/login.css">
    <title>Editar corretor</title>
    
</head>
<body>


    <?php
        include("config.php");

        $sql = "SELECT * FROM corretor WHERE id =".$_REQUEST["id"];
        $res = $conn->query($sql);

        $row = $res->fetch_object();
    ?>

    <div class="contain">

        <h1>Editar</h1>
        <div class="wrapper">
        
            <form action="salvar-usuario.php" method="POST">
                <input type="hidden" name="acao" value="editar">
                <input type="hidden" name="id" value="<?php print $row->id ?>">

                <div>
                    <input type="text" name="nome" value="<?php print $row->nome; ?>" minlength="2" placeholder="Digite seu nome" required>
                </div>

                <div>
                    <input type="text" name="cpf" value="<?php print $row->cpf; ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" minlength="11" maxlength="11" placeholder="Digite seu CPF" required>
                </div>

                <div class="full-widht">
                    <input type="text" name="creci" value="<?php print $row->creci; ?>" minlength="2" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Digite seu Creci" required>
                </div>

                <div class="full-widht">
                    <input class="botao" type="submit" value="Salvar">
                </div>

            
            </form>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>