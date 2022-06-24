<?php
    
    //Conexão com banco de dados
    //Criar o objeto de conexão
    $SERVIDOR = 'localhost';
    $USUARIO  = 'aluno';
    $SENHA    = '123456';
    $BANCO    = 'TI41';

    $nome     = $_GET['txtNome'];
    $usuario = $_GET['txtUsuario'];
    $senha     = $_GET['txtSenha'];


    $con = new mysqli ($SERVIDOR,$USUARIO,$SENHA,$BANCO);

    //Testar a conexão com o banco de dados

    if ($con->connect_error){
        //Aqui faz o código necessário em caso de erro durante a conexão com o banco de dados
        echo"Erro ao conectar com a base de dados.";
    }else{
        //Aqui a codificação em caso de sucesso na conexão com o banco
        echo "<h3>A conexão com o banco de dados foi realizada</h3>";
    
        $sql = "insert into cadastro (nome,usuario,senha) values ('$nome','$usuario','$senha')";
        $ret = $con->query($sql);
        if ( $ret == true){
            header("Location: loginCadastro.php");
        }


        $con->Close();
    }
    
    
    
    





?>