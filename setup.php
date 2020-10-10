<?php
$servername = "localhost";
$username = "root";
$password = "";
//Crear Conexion con MYSQL
$conn = new mysqli($servername, $username, $password);
//Comprobar la Conexión
if ($conn->connect_error) {
    die("Fallo de Conexión: " . $conn->connect_error);
} 
//Crear base de datos
$sql = "CREATE DATABASE aquafix";
if ($conn->query($sql) === TRUE) {
    echo "Base de Datos Creada.";
} else {
    echo "Error al Crear la Base de Datos:". $conn->error;
}
//Cerrar Conexión
$conn->close();


$nombreBD= "aquafix";

// Declaramos archivo de conexion


// Cremos la conexión con el servidor de datos
$conn = new mysqli($servername, $username, $password, $nombreBD);
// Verificamos la conexión con el servidor MySQL
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}

// sql Crea la tabla usando Lenguaje PHP
$sql1 = "CREATE TABLE cliente (
idCliente INT(11) UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
Nombre VARCHAR(20) NOT NULL,
Apellidos VARCHAR(20) NOT NULL,
noTel VARCHAR(10) NOT NULL,
Correo VARCHAR(25),
Domicilio VARCHAR(40) NOT NULL

)";

$sql2 = "CREATE TABLE usuarios (
Consec VARCHAR(2)  NOT NULL PRIMARY KEY,
Usuario VARCHAR(20) NOT NULL,
Password VARCHAR(40) NOT NULL
)";


// Se verifica si la tabla ha sido creado
if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
    echo "las tablas clientes y usuarios han sido creadas";
} else {
    echo "Hubo un error al crear las tablas: " . $conn->error;
}
// Cerramos la conexión


 $result = $conn->query("insert into usuarios (Consec, Usuario, Password) values ('1', 'admin', '123')");

$conn->close();







?>