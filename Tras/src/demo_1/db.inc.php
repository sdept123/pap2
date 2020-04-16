<?php
     function connect_DB(){
        $servername = "localhost";
        $username = "root";
        $password= "";
        $database="bdpap";

        try{
            $conn=new mysqli($servername,$username,$password,$database);

        }catch (mysqli_sql_exception $e){
                echo nl2br("Error: unable to connect to MYSQL." .$conn->connect_error."\n");
                echo nl2br("Debugging errno:" .mysql_connect_errno(). "\n");
                echo nl2br("Debugging error:" .mysql_connect_error(). "\n");

                throw $e;
        }
        return $conn;
    }

    function executarSQL($sql_command){
        $conn=connect_DB();

        $resultado = $conn->query($sql_command);

        return $resultado;
    }
 
?>