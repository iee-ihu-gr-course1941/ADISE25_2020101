-- Δημιουργία πίνακα χρηστών
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Δημιουργία πίνακα παιχνιδιών
CREATE TABLE games (
    id INT AUTO_INCREMENT PRIMARY KEY,
    player1_id INT,
    player2_id INT,
    game_state TEXT,
    status ENUM('active', 'completed') DEFAULT 'active',
    FOREIGN KEY (player1_id) REFERENCES users(id),
    FOREIGN KEY (player2_id) REFERENCES users(id)
);

-- Δημιουργία πίνακα κινήσεων
CREATE TABLE moves (
    id INT AUTO_INCREMENT PRIMARY KEY,
    game_id INT,
    player_id INT,
    move TEXT,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (game_id) REFERENCES games(id),
    FOREIGN KEY (player_id) REFERENCES users(id)
);
