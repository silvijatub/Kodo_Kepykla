<?php
$pavadinimas = $_POST['pavadinimas'];

require_once 'connection.php';

$sql = "DELETE FROM krepselis WHERE pavadinimas = $pavadinimas";

// Execute the query
if ($connection->query($sql) === TRUE) {
    // Row deleted successfully
    echo "success";
} else {
    // Error deleting row
    echo "error";
}

// Close the database connection
$connection->close();
?>