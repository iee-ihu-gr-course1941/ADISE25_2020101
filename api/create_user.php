<?php
// Συμπεριλαμβάνουμε το αρχείο σύνδεσης με τη βάση δεδομένων
include 'db.php'; 

// Έλεγχος αν τα δεδομένα έχουν αποσταλεί μέσω POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Λήψη των δεδομένων από το frontend
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Κρυπτογράφηση του κωδικού

    // SQL query για την εισαγωγή του νέου χρήστη
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    // Εκτέλεση του query
    if ($stmt->execute([$username, $email, $password])) {
        echo "Χρήστης δημιουργήθηκε επιτυχώς!";
    } else {
        echo "Σφάλμα κατά τη δημιουργία χρήστη.";
    }
}
?>
