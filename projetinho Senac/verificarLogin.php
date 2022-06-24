<?php
    //Conexão com banco de dados
    //Criar o objeto de conexão
    $SERVIDOR   = 'localhost';
    $USUARIO    = 'aluno';
    $SENHA      = '123456';
    $BANCO      = 'TI41';

    $con = new mysqli ($SERVIDOR,$USUARIO,$SENHA,$BANCO);

    $user      = $_GET['txtUser'];
    $senha      = $_GET['txtSenha'];
    $voltar      = true;

    if ( $con->connect_error){
        echo "Erro ao conectar com a base de dados";
    }else{

        $sql = "select * from cadastro where usuario = '$user' and senha = '$senha';";
        $ret = $con -> query($sql);

    while ($registro = $ret->fetch_assoc()) {

        if ($user == $registro['usuario'] && $senha == $registro['senha']) {
            //echo "O login foi validade com sucesso!";
            session_start();
            $_SESSION['user'] = $user;
            $_SESSION['token'] = "ABCDEF";
            header("Location: teste.php");
            $voltar = false;
        }else {
            //echo "Usuario ou senhas invalidos.";
            //header("Location: index.php");
            $voltar = true;
        }
    }   
    if ($voltar == true){
        header("Location: loginCadastro.php");
        
    }

        
}


?>