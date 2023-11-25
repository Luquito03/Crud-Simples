<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
    <link rel="stylesheet" href="loginCss/login.css">
    <title>Lista corretor</title>
    
</head>
<body>

    <div class="contain">

        <h1>Corretores</h1>
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
                    <input class="botao" type="submit" value="Adicionar">
                </div>

            </form>
        
        </div>
    </div>

    <?php
        include("config.php");
        
        $sql = "SELECT * FROM corretor";

        $res = $conn->query($sql);

        $qtd = $res->num_rows;

        if($qtd > 0){

            print "<table class='table table-hover table-striped table-bordered'>";
                print "<tr>";
                print "<th>Id</th>";
                print "<th>Nome</th>";
                print "<th>CPF</th>";
                print "<th>Creci</th>";
                print "<th>Ações</th>";
                print "</tr>";
            while($row = $res->fetch_object()){
                print "<tr>";
                print "<td>".$row->id."</td>";
                print "<td>".$row->nome."</td>";
                print "<td>".$row->cpf."</td>";
                print "<td>".$row->creci."</td>";
                print "<td>
                        <button onclick=\"location.href='editar.php?id=".$row->id."';\" class='btn btn-success'>Editar</button>
                        <button onclick=\"location.href='salvar-usuario.php?acao=excluir&id=".$row->id."';\" class='btn btn-danger'>Excluir</button>
                      </td>";
                print "</tr>";
            }
            print "</table>";

        }else{
            print "<p class='alert alert-danger'>Não encontrou resultaods!</p>";
        }
    ?>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>