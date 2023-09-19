<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";

    // Specify the path to the text file where you want to store the data
    $file = 'contact_data.txt';

    // Open the file in append mode and save the data
    file_put_contents($file, $data, FILE_APPEND);

    // Redirect to a thank you page after saving the data
    header("Location: thankyou.html");
    exit();
}
?>
