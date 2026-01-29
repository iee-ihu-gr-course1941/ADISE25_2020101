-- Προσθήκη χρηστών
INSERT INTO users (username, email, password)
VALUES 
    ('player1', 'player1@example.com', 'password123'),
    ('player2', 'player2@example.com', 'password456');

-- Προσθήκη παιχνιδιού
INSERT INTO games (player1_id, player2_id, game_state)
VALUES 
    (1, 2, 'player1_turn');

-- Προσθήκη κίνησης
INSERT INTO moves (game_id, player_id, move)
VALUES 
    (1, 1, 'play_1');
