 <?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit(); // Stop further execution
}

// Include database connection
include("con1.php");

// Check if 'id' is provided in the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Secure query using prepared statements to prevent SQL injection
    $stmt = $con->prepare("DELETE FROM login WHERE id = ?");
    $stmt->bind_param("i", $id); // "i" means integer

    if ($stmt->execute()) {
        echo "<script>alert('Record deleted successfully!'); window.location.href='loginmaster.php';</script>";
    } else {
        echo "<script>alert('Error deleting record.'); window.history.back();</script>";
    }

    $stmt->close();
} else {
    echo "<script>alert('Invalid request.'); window.history.back();</script>";
}

$con->close();
?>
