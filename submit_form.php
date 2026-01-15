<?php
include '../db.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = $_POST['first_name'] ?? '';
    $middle_name = $_POST['middle_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $admission_no = $_POST['admission_no'] ?? '';
    $email = $_POST['email'] ?? '';
    $additional_email = $_POST['additional_email'] ?? '';
    $address = $_POST['address'] ?? '';
    $contact_number = $_POST['contact_number'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $message = $_POST['message'] ?? '';

    $sql = "INSERT INTO students 
        (first_name, middle_name, last_name, admission_no, email, additional_email, address, contact_number, gender, message)
        VALUES 
        ('$first_name', '$middle_name', '$last_name', '$admission_no', '$email', '$additional_email', '$address', '$contact_number', '$gender', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Form submitted successfully!');
                window.location.href='../index.html';  // go back to home
              </script>";
    } else {
        echo 'ERROR: ' . $conn->error;
    }
}
?>
