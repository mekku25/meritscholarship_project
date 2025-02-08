<?php
// Include the database connection file
require_once "conn.php";

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the ID and status from the POST request
    $id = $_POST['id'];
    $status = $_POST['status'];

    // Validate inputs (optional but recommended)
    if (empty($id) || empty($status)) {
        echo '<script>alert("ID or Status is missing.");</script>';
        echo '<script>window.location.href = "meritscholarshiprecord.php";</script>';
        exit;
    }

    // Update the status in the database
    $sql = "UPDATE `meritapplication` SET `status` = ? WHERE `id` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $status, $id);

    if ($stmt->execute()) {
        // Success message
        echo '<script>alert("Status updated successfully.");</script>';
    } else {
        // Error message
        echo '<script>alert("Failed to update status. Please try again.");</script>';
    }

    // Redirect back to the record page
    echo '<script>window.location.href = "meritscholarshiprecord.php";</script>';
    exit;
} else {
    // If accessed without POST method
    echo '<script>alert("Invalid access method.");</script>';
    echo '<script>window.location.href = "meritscholarshiprecord.php";</script>';
    exit;
}
?>
