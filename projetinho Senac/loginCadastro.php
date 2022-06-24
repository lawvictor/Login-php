<html>
    <h1>Bem vindo a tela de login</h1>
    <hr />
    <form action = 'verificarLogin.php' >
        <p>
                <label>Usuário</label>
                <input type = "text" name = "txtUser" />
        </p>
                <label>Senha</label>
                <input type = "password" name = "txtSenha" />
        </p>
        <p>
                <input type = "submit" value = "Entrar" />
        </p>           
    </form>




    <form action = 'Cadastro.php' >
       <p>
            <input type = "submit" value = "Cadastre-se" />

</form>

    </html>
    <?php
        if ( isset($_GET['erro'])){
            echo "<h3>Usuário ou senha inválidos.</h3>";
    
        }
    

?>