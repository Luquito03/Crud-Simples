<?php
    include("config.php");

    switch($_REQUEST["acao"]) {
        case 'cadastrar':

            $nome = $_POST["nome"];
            $cpf = $_POST["cpf"];
            $creci = $_POST["creci"];

            $sql = "INSERT INTO corretor (nome, cpf, creci) VALUES ('{$nome}', '{$cpf}', '{$creci}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastro com sucesso');</script>";
                print "<script>location.href='listar-usuario.php';</script>";
            }else{
                print "<script>alert('Não foi possivel');</script>";
                print "<script>location.href='index.php';</script>";
            }
            break;
        
        case 'editar' :

            $nome = $_POST["nome"];
            $cpf = $_POST["cpf"];
            $creci = $_POST["creci"];

            $sql = "UPDATE corretor SET
                        nome='{$nome}',
                        cpf='{$cpf}',
                        creci='{$creci}'
                        
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='listar-usuario.php';</script>";
            }else{
                print "<script>alert('Não foi possivel');</script>";
                print "<script>location.href='listar-usuario.php';</script>";
            }

            break;
        
        case 'excluir' :

            $sql = "DELETE FROM corretor WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='listar-usuario.php';</script>";
            }else{
                print "<script>alert('Não foi possivel');</script>";
                print "<script>location.href='listar-usuario.php';</script>";
            }

            break;



    }
        
?>