<?php
    include 'db.inc.php';

    if($_SERVER['REQUEST_METHOD']=='POST'){
    
        $nome=$_POST['nome'];
        $datanascimento=$_POST['datanascimento'];
        $email=$_POST['email'];
        $contacto=$_POST['contacto'];
        $pass=SHA1($_POST['pass']);
        

        $resultado=executarSQL("INSERT INTO `tblutilizador` (`id`, `nome`, `datanascimento`,  `contacto`,  `email`,  `pass`) VALUES (NULL, '".$nome."','".$datanascimento."','".$contacto."','".$email."','".$pass."');
        ");

        header ("Location: login.php");
    }
    
?>