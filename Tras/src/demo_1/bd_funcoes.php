<?php 
    include 'db.inc.php';

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['editar_convidados'])  ){
    
        $id=$_POST['id'];
        $nome=$_POST['nome'];
        $datanascimento=$_POST['datanascimento'];
        $contacto=$_POST['contacto'];
        $email=$_POST['email'];
        $foto=$_POST['foto'];
        $tipoutilizador=$_POST['descricao_convidados'];

        // echo "UPDATE tblutilizador SET nome='".$nome."', datanascimento='".$datanascimento."', 
        // contacto='".$contacto."',email='".$email."',foto='".$foto."',tipoutilizador=$tipoutilizador WHERE id=".$id."";

        //secção de importação de imagem
        $target_dir = "./images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;

        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        echo  $target_file."\n";
        echo  $imageFileType."\n";
echo 'chegou aqui 1';

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "O arquivo é uma imagem - " . $check["mime"] . ".";
            $uploadOk = 1;
            echo 'chegou aqui 2';
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "O ficheiro ". basename( $_FILES["fileToUpload"]["name"]). " foi enviado.";

                // $resultado=executarSQL("INSERT INTO galeria (id, descricao, caminho, tipomult)  
                //                 VALUES (NULL, '".$descricao."','/images/".$_FILES["fileToUpload"]["name"]."',".$tipo_multi.") ");
                echo 'chegou aqui 3';
                $resultado=executarSQL("UPDATE tblutilizador SET nome='".$nome."', datanascimento='".$datanascimento."', 
                contacto='".$contacto."',email='".$email."',foto='/images/".$_FILES["fileToUpload"]["name"]."',tipoutilizador=$tipoutilizador WHERE id=".$id."");
echo 'chegou aqui 4';
            } else {
                echo 'chegou aqui 5';
                echo "Desculpe, ocorreu um erro ao fazer upload do seu arquivo.";
            }
        } else {
            echo 'chegou aqui 6';
            echo "O arquivo não é uma imagem.";
            echo "Desculpe, seu arquivo não foi carregado.";
            $uploadOk = 0;
        }     

        header ("Location: alterarUser.php?id=".$id."");
        
    }

















?>