<?php
// Συμπεριλαμβάνουμε το αρχείο σύνδεσης με τη βάση δεδομένων
include 'db.php'; 

// Έλεγχος αν τα δεδομένα έχουν αποσταλεί μέσω GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Λήψη του game_id από το query string
    $game_id = $_GET['game_id'];

    // SQL query για την ανάκτηση της κατάστασης του παιχνιδιού
    $sql = "SELECT * FROM games WHERE game_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$game_id]);

    $game = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($game) {
        // Επιστροφή της κατάστασης του παιχνιδιού σε JSON μορφή
        echo json_encode($game);
    } else {
        echo "Παιχνίδι δεν βρέθηκε.";
    }
}
?>
