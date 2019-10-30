<?php
function getConexion(){
    try{
        $pdo = new PDO("mysql:host=localhost; dbname=universidad;","root", "password");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        return $pdo;
        echo "conectado";
    }catch(PDOException $e){
        return NULL;
    }
}


/*

function getConexion(){
    $database_username = "root";
    $database_password = "";

    tyr{
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=universidad', $database_username, $database_password);
        $pdo -> setAttribute(PDO::ATTER_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }catch(PDOException $e){
        return NULL;
    }
}

*/











// $database = 'root';
// $password = 'password';
// try {
// $pdo_conn = new PDO('mysql:host=localhost;dbname=universidad', $database, $password); 
// $pdo_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "Conexión Extablecida";

// $sql = "INSERT INTO Estudiante (nombre) VALUES ('Juan', 'BB1020', '41')";
// $pdo_statement = $pdo_conn->prepare( $sql );
// if($result = $pdo_statement->execute()){
// echo "Realizado";
// }else{
// echo "Realizado";
// }

// catch(PDOException $e)
// {
// echo "Error de Conexión: " . $e->getMessage();
// }