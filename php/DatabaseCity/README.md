-- Creazione del database
CREATE DATABASE DatabaseCitta;

-- Utilizzo del database
USE DatabaseCitta;

-- Creazione della tabella Citta
CREATE TABLE Citta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    prezzo DECIMAL(10, 2) NOT NULL,
    foto TEXT NOT NULL
);

-- Inserimento di dati di esempio con URL di immagini prese da Wikipedia
INSERT INTO Citta (nome, prezzo, foto) VALUES
    ('Roma', 150.00, 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Colosseum_in_Rome%2C_Italy_-_April_2007.jpg/1920px-Colosseum_in_Rome%2C_Italy_-_April_2007.jpg'),
    ('Parigi', 200.00, 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Paris_Night.jpg/1920px-Paris_Night.jpg'),
    ('Londra', 180.00, 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/London_Montage_L.jpg/1920px-London_Montage_L.jpg'),
    ('Berlino', 130.00, 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Berlin_Brandenburg_Gate_Night.jpg/1920px-Berlin_Brandenburg_Gate_Night.jpg'),
    ('Madrid', 140.00, 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Palacio_de_Comunicaciones_-_07.jpg/1920px-Palacio_de_Comunicaciones_-_07.jpg');