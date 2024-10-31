<?php

    include "../Includes/dbConnection.php";
    require __DIR__ . "/../../vendor/autoload.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

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

                    // // USE PHP MAILER TO SEND COPY VIA SMTP
                    // $mail = new PHPMailer(true);
                    // $mail->isSMTP();
                    // $mail->Host = "smtp.gmail.com";
                    // $mail->SMTPAuth = true;
                    // $mail->Username = "celestinjacobss@gmail.com";
                    // $mail->SMTP_Password = "vtyx dxvh bhbv rlyf";
                    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    // $mail->Port = 587;

                    // // SET THE EMAIL CONTENT
                    // $mail->setFrom($email, $firstName);
                    // $mail->addAddress("celestinjacobss@gmail.com", 'Your Name');
                    // $mail->isHTML(true);
                    // $mail->Subject = 'New Message from Contact Form';
                    // $mail->Body = "
                    //     <h2>New Message Details</h2>
                    //     <p><strong>First Name:</strong> $firstName</p>
                    //     <p><strong>Last Name:</strong> $lastName</p>
                    //     <p><strong>Email:</strong> $email</p>
                    //     <p><strong>Subject:</strong> $subject</p>
                    //     <p><strong>Message:</strong><br>$message</p>
                    // ";

                    // // SEND THE EMAIL
                    // if ($mail->send()) {
                    //     $response['email_status'] = 'Email sent successfully';
                    // } else {
                    //     $response['email_status'] = 'Failed to send email' . $mail->ErrorInfo;
                    // }

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


?>