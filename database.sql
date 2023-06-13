CREATE DATABASE login;

CREATE TABLE user(
    
    id INT primary key AUTO_INCREMENT,
    nombres VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL, 
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

CREATE TABLE data(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    cedula VARCHAR(50) NOT NULL,
    fecha VARCHAR(50) NOT NULL,
    producto VARCHAR(50) NOT NULL,
    precio VARCHAR(50) NOT NULL
    
);