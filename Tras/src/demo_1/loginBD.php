<?php
    // estabelecer ligação com a base de dados
    include 'db.inc.php';
    // começar ou retomar uma sessão
    session_start();
    
    if((isset($_POST['email'])) && (isset($_POST['pass']))){
        $usuario = $_POST['email']; //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $senha = SHA1($_POST['pass']);
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result = executarSQL("SELECT * FROM tblutilizador u Inner join tbltipoutilizador tu ON u.tipoutilizador = tu.id WHERE email = '$usuario' and pass = '$senha' LIMIT 1");

        //mysqli_num_rows - da o numero total de linhas
        if (mysqli_num_rows($result) == 1) {
           
            //mysqli_fetch_array - seleciona um determinado registo (linha) do resultado obtido na interrogaçao feito à base de dados 
            while ($row_ColumsData = mysqli_fetch_array($result)) {
               // o utilizador está correctamente validado e vamos guardar as informações numa sessão
               $_SESSION['id'] = $row_ColumsData['id'];
               $_SESSION['nome'] = $row_ColumsData['nome'];
               $_SESSION['tipouser'] = $row_ColumsData['tipoutilizador'];
            }
 
             echo "<p>Sessão iniciada com sucesso como {$_SESSION['username']}</p>";
             //redericionar para a página index.php 

             if($_SESSION['tipouser'] == "Admin"){
                header('Location: index.php');
             }   
             else{
                header('Location: login.php');
             } 
             
 
          } else {
            // falhou o login
            echo "<p>Utilizador ou password inválidos. <a href=\"login.php\">Tente novamente</a></p>";
 
            //redericionar para a página login.php, pois os dados nao estão corretos     
            header('Location: login.php');
          }

        
      
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        /*if(isset($resultado)){
            $_SESSION['usuarioId'] = $resultado['id'];
            $_SESSION['usuarioNome'] = $resultado['nome'];
            $_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
            $_SESSION['usuarioEmail'] = $resultado['email'];
            if($_SESSION['usuarioNiveisAcessoId'] == "1"){
                header("Location: administrativo.php");
            }elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
                header("Location: colaborador.php");
            }else{
                header("Location: cliente.php");
            }
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: login.php");
        }
        */
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: login.php");
    }
    
?>