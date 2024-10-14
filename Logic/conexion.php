<?PHP
//Definimos las variables de conexion
$server = "localhost";
$user = "root";
$pass = "";
$db = "bd_ventas";
//Creamos la conexion
try{
    $conexion= new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user,$pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Conectado";
    //code...
} catch (PDOException $e) {
    echo "Error: " . $e-> getMessage();
}


