<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace
    $name    = strip_tags(trim($_POST["name"]));
    $name    = str_replace(array("\r","\n"), array(" "," "), $name);
    $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = trim($_POST["subject"]);
    $number  = trim($_POST["number"]);
    $message = trim($_POST["message"]);

    // Validate inputs
    if (empty($name) || empty($message) || empty($number) || empty($subject) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Please complete the form and try again.";
        exit;
    }

    // Recipient email address
    $recipient = "umairmanzoor320@gmail.com";

    // Subject line
    $subjectLine = "New contact from $name about $subject";

    // Email body
    $email_content  = "Name: $name\n";
    $email_content .= "Phone: $number\n";
    $email_content .= "Subject: $subject\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Email headers
    $email_headers  = "From: Website Contact <no-reply@yourdomain.com>\r\n";
    $email_headers .= "Reply-To: $email\r\n"; 
    $email_headers .= "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail($recipient, $subjectLine, $email_content, $email_headers)) {
        http_response_code(200);
        echo "Thank You! Your message has been sent.";
    } else {
        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your message.";
    }

} else {
    // Not a POST request
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
?>
