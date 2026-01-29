<?php
// Συμπεριλαμβάνουμε το αρχείο σύνδεσης με τη βάση δεδομένων
include 'db.php'; 

// Έλεγχος αν τα δεδομένα έχουν αποσταλεί μέσω POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Λήψη των δεδομένων από το frontend
    $player1_id = $_POST['player1_id'];
    $player2_id = $_POST['player2_id'];
    $game_state = 'player1_turn'; // Η αρχική κατάσταση του παιχνιδιού (ποιος παίκτης ξεκινάει)

    // SQL query για την εισαγωγή νέου παιχνιδιού
    $sql = "INSERT INTO games (player1_id, player2_id, game_state) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    // Εκτέλεση του query
    if ($stmt->execute([$player1_id, $player2_id, $game_state])) {
        echo "Παιχνίδι δημιουργήθηκε επιτυχώς!";
    } else {
        echo "Σφάλμα κατά τη δημιουργία παιχνιδιού.";
    }
}
?>
