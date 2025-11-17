<?php
//Ejercicio 1
$host = 'db';  // Nombre del servicio en docker-compose
$dbname = 'testdb';
$username = 'alumno';
$password = 'alumno';
$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdo->exec("
CREATE TABLE IF NOT EXISTS categorias (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100), descripcion TEXT
);

CREATE TABLE IF NOT EXISTS productos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR (100), categoria_id INT NOT NULL,
    precio DECIMAL (10,2), stock UNT DEFAULT 0
);

CREATE TABLE IF NOT EXISTS usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR (100), email VARCHAR(100),
    contraseña VARCHAR (100)
);

CREATE TABLE IF NOT EXISTS pedidos(
    id INT PRIMARY KEY AUTO_INCREMENT,
    usuario_id INT NOT NULL UNIQUE,
    fecha DATETIME,
    total DECIMAL(10, 2)
);

");
?>
