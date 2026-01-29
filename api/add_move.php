<?php
// Συμπεριλαμβάνουμε το αρχείο σύνδεσης με τη βάση δεδομένων
include 'db.php'; 

// Έλεγχος αν τα δεδομένα έχουν αποσταλεί μέσω POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Λήψη των δεδομένων από το frontend
    $game_id = $_POST['game_id'];
    $player_id = $_POST['player_id'];
    $move = $_POST['move'];

    // SQL query για την εισαγωγή της κίνησης
    $sql = "INSERT INTO moves (game_id, player_id, move) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    // Εκτέλεση του query
    if ($stmt->execute([$game_id, $player_id, $move])) {
        echo "Κίνηση καταχωρήθηκε επιτυχώς!";
    } else {
        echo "Σφάλμα κατά την καταχώρηση κίνησης.";
    }
}
?>
