<?php
$custname = $_POST["nomcliente"];
$product = $_POST["producto"];
$amount = $_POST["cantidad"];
$date = $_POST["fecha"];

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "regClientes";

try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    if ($conn) {
        echo "Conectado con éxito <br>";
    } else {
        echo "No se pudo conectar";
    }

    $sql = "INSERT INTO ventas VALUES ('$custname', '$product', '$amount', '$date')";

    if ($conn->query($sql) === TRUE) {
        echo "Se ha insertado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} catch(mysqli_sql_exception) {
    echo "No se pudo conectar";
}
return $conn;
    
$conn->close();
?>