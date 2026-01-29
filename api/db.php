<?php
$host = 'localhost'; // ή το IP αν είναι απομακρυσμένος server
$dbname = 'xeri_game'; // Το όνομα της βάσης δεδομένων που έχεις δημιουργήσει
$username = 'root'; // Χρησιμοποιήστε το κατάλληλο όνομα χρήστη
$password = '0016'; // Αν δεν υπάρχει κωδικός πρόσβασης για το root, άφησέ το κενό

try {
    // Δημιουργία σύνδεσης
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Για να εμφανίζονται τα λάθη
} catch (PDOException $e) {
    echo "Σφάλμα σύνδεσης: " . $e->getMessage();
    exit;
}
?>
