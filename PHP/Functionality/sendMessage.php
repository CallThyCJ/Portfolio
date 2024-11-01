<?php

    include "../Includes/dbConnection.php";
    require "../../vendor/phpmailer/phpmailer/src/PHPMailer.php";
    require "../../vendor/phpmailer/phpmailer/src/Exception.php";
    require "../../vendor/phpmailer/phpmailer/src/SMTP.php";
    require __DIR__ . "/../../vendor/autoload.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    header('Content-Type: application/json');

    $response = [];

    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        // VALIDATION CHECKS
        if (empty($firstName)) {
            $errors[] = ["field" => "firstName", "message" => "Please enter your first name."];
        }

        if (empty($lastName)) {
            $errors[] = ["field" => "lastName", "message" => "Please enter your last name."];
        }

        if (empty($email)) {
            $errors[] = ["field" => "email", "message" => "Please enter your email."];
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = ["field" => "email", "message" => "Please enter a valid email."];
        }

        if (empty($message)) {
            $errors[] = ["field" => "message", "message" => "Message contents are required."];
        }

        if (!empty($errors)) {
            $response["status"] = "error";
            $response["errors"] = $errors;
        } else {

            // DATABASE LOGIC

            try {

                $SQL = "INSERT INTO message_storage(first_name, last_name, email_address, subject, message)
                        VALUES (:first_name, :last_name, :email_address, :subject, :message)";

                $statement = $conn->prepare($SQL);
                
                $statement->bindValue(':first_name', $firstName);
                $statement->bindValue(':last_name', $lastName);
                $statement->bindValue(':email_address', $email);
                $statement->bindValue(':subject', $subject);
                $statement->bindValue(':message', $message);

                if ($statement->execute()) {
                    $response['status'] = 'success';
                    $response['message'] = 'New email was stored successfully';


                    try {
                        // USE PHP MAILER TO SEND COPY VIA SMTP
                        $mail = new PHPMailer(true);
                        $mail->isSMTP();
                        $mail->Host = "sandbox.smtp.mailtrap.io";
                        $mail->SMTPAuth = true;
                        $mail->Username = $_ENV["SMTP_Username"]; // Your Mailtrap username
                        $mail->Password = $_ENV["SMTP_Password"]; // Your Mailtrap password
                        $mail->AuthType = 'LOGIN';
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use STARTTLS
                        $mail->Port = 2525; // Port number

                        // SET THE EMAIL CONTENT
                        $mail->setFrom($email);
                        $mail->addAddress($_ENV["SMTP_Email"]);
                        $mail->isHTML(true);
                        $mail->Subject = 'New Message from Contact Form -' . $subject;
                        $mail->Body = "
                            <html>
                            <h2>New Message Details</h2>
                            <p><strong>First Name:</strong> $firstName</p>
                            <p><strong>Last Name:</strong> $lastName</p>
                            <p><strong>Email:</strong> $email</p>
                            <p><strong>Subject:</strong> $subject</p>
                            <p><strong>Message:</strong><br>$message</p>
                            </html>
                        ";

                        // SEND THE EMAIL
                        $mail->send();         
                    } catch (Exception $e) {
                        $response['status'] = 'error';
                        $response['message'] = "Failed to send email. PHPMailer Error: {$mail->ErrorInfo}";
                    }

                } else {
                    $response['status'] = 'error';
                    $response['message'] = 'Database error: ' . implode(", ", $statement->errorInfo());
                }
            } catch (PDOException $e) {
                $response['status'] = 'error';
                $response['message'] = 'Connection failed: ' . $e->getMessage();
            }

        }

        
    } else {
        // Handle invalid request method
        $response['status'] = 'error';
        $response['message'] = 'Invalid request method';
    }

    echo json_encode($response);
    exit;


?>