<?php
// store_form.php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    // Format data
    $data = "Name: $name\nPhone: $phone\nEmail: $email\nSubject: $subject\n\n";

    // Save data to a file
    $file = 'form_data.txt';
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX) !== false) {
        echo "Form data has been saved successfully.";
    } else {
        echo "Error: Unable to save form data.";
    }
}
?>
