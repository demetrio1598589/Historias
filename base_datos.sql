-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS web_historias;
USE web_historias;

-- Crear la tabla 'usuarios'
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    usuario VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Insertar un usuario (con datos mínimos válidos)

INSERT INTO usuarios (nombre, apellidos, email, usuario, password)
VALUES ('Demetrio', 'Quispe', 'admin@example.com', 'admin', '1234');

