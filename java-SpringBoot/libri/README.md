-- Creazione del database
CREATE DATABASE IF NOT EXISTS Biblioteca;

-- Seleziona il database
USE Biblioteca;

-- Creazione della tabella libri
CREATE TABLE IF NOT EXISTS libri (
    id INT AUTO_INCREMENT PRIMARY KEY, -- ID unico per ogni libro
    nome_libro VARCHAR(255) NOT NULL, -- Nome del libro, non può essere vuoto
    numero_pagine INT NOT NULL -- Numero di pagine, non può essere vuoto
);

-- Inserimento dei nuovi libri
INSERT INTO libri (nome_libro, numero_pagine) VALUES
('Orgoglio e Pregiudizio', 432),
('Il Grande Gatsby', 180),
('Moby Dick', 635),
('Guerra e Pace', 1225),
('Cime Tempestose', 408),
('Don Chisciotte', 863),
('Ulisse', 730),
('Il Codice Da Vinci', 454),
('Il Nome della Rosa', 512),
('La Metamorfosi', 102),
('I Promessi Sposi', 720),
('Fahrenheit 451', 194),
('Anna Karenina', 864),
('Il Processo', 256),
('Uno, Nessuno e Centomila', 288);

-- Visualizzazione dei dati
SELECT * FROM libri;
