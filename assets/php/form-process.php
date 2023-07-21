<?php
// Include PHPMailer library
// require 'path_to_phpmailer/PHPMailerAutoload.php';

// // Function to send email
// // function sendEmail($name, $email, $msg_subject, $phone_number, $message) {
// //     $mail = new PHPMailer();
// //     $mail->isSMTP();
// //     $mail->Host = 'your_smtp_host'; // Replace with your SMTP host
// //     $mail->SMTPAuth = true;
// //     $mail->Username = 'your_smtp_username'; // Replace with your SMTP username
// //     $mail->Password = 'your_smtp_password'; // Replace with your SMTP password
// //     $mail->SMTPSecure = 'tls';
// //     $mail->Port = 587;

// //     $mail->setFrom('harshilbmk@example.com', 'Harshil Chovatiya'); // Replace with your email and name
// //     $mail->addAddress($email); // Replace with recipient email

// //     $mail->Subject = 'New Contact Form Submission';
// //     $mail->Body = "Name: $name\nEmail: $email\nSubject: $msg_subject\nPhone: $phone_number\nMessage: $message";

// //     if ($mail->send()) {
// //         return true;
// //     } else {
// //         return false;
// //     }
// // }

// // Function to send email
// function sendEmail($name, $email, $msg_subject, $phone_number, $message) {
//     $from = "bmuit26@gmail.com"
//     // $to = $email; // Replace with recipient email address
//     $subject = 'New Contact Form Submission';

//     // Email headers
//     $headers = "From: $from" . "\r\n" .
//         "Reply-To: $email" . "\r\n" .
//         "X-Mailer: PHP/" . phpversion();

//     // Email body
//     $body = "Name: $name\nEmail: $email\nSubject: $msg_subject\nPhone: $phone_number\nMessage: $message";

//     // Send the email using mail() function
//     if (mail($to, $subject, $body, $headers)) {
//         return true;
//     } else {
//         return false;
//     }
// }


// // Function to insert data into the database
// // function insertDataIntoDatabase($name, $email, $msg_subject, $phone_number, $message) {
// //     $dbHost = 'your_database_host'; // Replace with your database host
// //     $dbUsername = 'your_database_username'; // Replace with your database username
// //     $dbPassword = 'your_database_password'; // Replace with your database password
// //     $dbName = 'your_database_name'; // Replace with your database name

// //     $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// //     if ($conn->connect_error) {
// //         die("Connection failed: " . $conn->connect_error);
// //     }

// //     $sql = "INSERT INTO contact_form_data (name, email, msg_subject, phone_number, message) VALUES ('$name', '$email', '$msg_subject', '$phone_number', '$message')";

// //     if ($conn->query($sql) === TRUE) {
// //         return true;
// //     } else {
// //         return false;
// //     }

// //     $conn->close();
// // }

// // Check if the request method is POST
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Retrieve form data
//     $name = $_POST["name"];
//     $email = $_POST["email"];
//     $msg_subject = $_POST["msg_subject"];
//     $phone_number = $_POST["phone_number"];
//     $message = $_POST["message"];

//     // Send email and insert data into the database
//     $emailSent = sendEmail($name, $email, $msg_subject, $phone_number, $message);
//     // $dataInserted = insertDataIntoDatabase($name, $email, $msg_subject, $phone_number, $message);

//     if ($emailSent) {
//         // Return success message
//         echo "success";
//     } else {
//         // Return error message
//         echo "Error occurred. Please try again later.";
//     }
// } else {
//     // If the request method is not POST, return an error message
//     echo "Invalid request method";
// }


// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $msg_subject = $_POST["msg_subject"];
    $phone_number = $_POST["phone_number"];
    $message = $_POST["message"];

    // You can perform validation and other processing on the data here

    // For this example, we'll just return a success message
    $response = "success";
    echo $response;
} else {
    // If the request method is not POST, return an error message
    $response = "Invalid request method";
    echo $response;
}
?>

