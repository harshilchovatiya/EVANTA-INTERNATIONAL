<?php
// Function to insert data into the database
function insertDataIntoDatabase($name, $email, $msg_subject, $phone_number, $message) {
    $dbHost = 'sql105.infinityfree.com'; // Replace with your database host
    $dbUsername = 'if0_34657929'; // Replace with your database username
    $dbPassword = 'O4LJLmfAKRntb'; // Replace with your database password
    $dbName = 'if0_34657929_evanta'; // Replace with your database name

    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO contact_form_data (name, email, msg_subject, phone_number, message) VALUES ('$name', '$email', '$msg_subject', '$phone_number', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Close the database connection
        $conn->close();

        // Send email
        $to = 'bmuit26@example.com'; // Replace with recipient's email address
        $subject = 'New Contact Form Submission';
        $headers = "From: $to" . "\r\n" .
                   "Reply-To: $to" . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();
        $body = "Name: $name\nEmail: $email\nSubject: $msg_subject\nPhone: $phone_number\nMessage: $message";

        if (mail($email, $subject, $body, $headers)) {
            echo "Email sent successfully and data stored in the database!";
        } else {
            echo "Failed to send email. Please try again later.";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // if ($conn->query($sql) === TRUE) {
    //     return true;
    // } else {
    //     return false;
    // }

    // $conn->close();
}

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $msg_subject = $_POST["msg_subject"];
    $phone_number = $_POST["phone_number"];
    $message = $_POST["message"];

    // Send email and insert data into the database
    // $emailSent = sendEmail($name, $email, $msg_subject, $phone_number, $message);
    $dataInserted = insertDataIntoDatabase($name, $email, $msg_subject, $phone_number, $message);

    if ( $dataInserted) {
        // Return success message
        echo "success";
    } else {
        // Return error message
        echo "Error occurred. Please try again later.";
    }
} else {
    // If the request method is not POST, return an error message
    echo "Invalid request method";
}
?>
