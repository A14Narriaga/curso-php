CREATE DATABASE Proyecto;
USE Proyecto;

CREATE TABLE Cuestionario (
    nombre VARCHAR(100) NOT NULL,
    creado DATETIME DEFAULT NOW(),
    clave VARCHAR(10) PRIMARY KEY
);

CREATE TABLE Pregunta (
    pregunta VARCHAR(225),
    numero INT NOT NULL,
    claveCuestionario VARCHAR(10),
    PRIMARY KEY( numero, claveCuestionario ),
    FOREIGN KEY ( claveCuestionario ) REFERENCES Cuestionario ( clave ) ON UPDATE CASCADE
);

CREATE TABLE Opcion (
    opcion VARCHAR(225) NOT NULL,
    esCorrecta BOOLEAN,
    inciso VARCHAR(1),
    claveCuestionario VARCHAR(10),
    numPregunta INT,
    PRIMARY KEY( inciso, claveCuestionario, numPregunta ),
    FOREIGN KEY ( claveCuestionario, numPregunta ) REFERENCES Pregunta ( claveCuestionario, numero ) ON UPDATE CASCADE
);