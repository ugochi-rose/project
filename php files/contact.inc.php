<?php
require_once 'dbh.inc.php';

// Include PHPMailer files
require __DIR__ . '/../../phpmailer/PHPMailer-master/src/PHPMailer.php';
require __DIR__ . '/../../phpmailer/PHPMailer-master/src/SMTP.php'; // Include SMTP
require __DIR__ . '/../../phpmailer/PHPMailer-master/src/Exception.php'; // Include Exception

// Use PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted by checking if the submit button was pressed
if (isset($_POST['submit'])) {
    // Get form data
    $contact_name = $_POST['contact_name'];
    $contact_email = $_POST['contact_email'];
    $contact_subject = $_POST['contact_subject'];
    $contact_message = $_POST['contact_message'];

    // Sanitize form data to prevent SQL injection
    $contact_name = $conn->real_escape_string($contact_name);
    $contact_email = $conn->real_escape_string($contact_email);
    $contact_subject = $conn->real_escape_string($contact_subject);
    $contact_message = $conn->real_escape_string($contact_message);

    
    $blocked_names = ['robertpat']; 

    // Get the input, remove spaces between words, and convert to lowercase
    $contact_name = strtolower(str_replace(' ', '', trim($_POST['contact_name'] ?? '')));

    if (in_array($contact_name, $blocked_names)) {
        die('<div style="font-size: 30px; font-weight: bold; text-align: center; color: red; margin-top: 50vh;">
            ❌ Sorry, this message could not be sent.
        </div>');
    }



    // Prepare the SQL query to insert the data
    // $sql = "INSERT INTO contacts (contact_name, contact_email, contact_subject, contact_message) 
    //         VALUES ('$contact_name', '$contact_email', '$contact_subject', '$contact_message')";

    // Execute the query and check if the insertion was successful
    // if ($conn->query($sql) === TRUE) {

        // Send email notification
        $mail = new PHPMailer(true);
        try {
            // Set up SMTP configuration
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';  // Your SMTP server (e.g., Gmail)
            $mail->SMTPAuth   = true;
            $mail->Username   = 'info@kemof-ng.com'; // Your email
            $mail->Password   = 'yuci nxsw anvh uoen';       // Your email password (or app password)
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 465;                  // SMTP port (587 is common for TLS)

            // Add this line to bypass SSL certificate verification (optional, not recommended for production)
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            // Set email details
            $mail->setFrom('info@kemof-ng.com', 'Kemof Ltd NG');   
            $mail->addReplyTo($_POST['contact_email'], $_POST['contact_name']); 
            // $mail->addAddress('info@kemof-ng.com');
            $mail->addAddress('ugochiakano@gmail.com'); // Recipient's email (Admin or you)
            $mail->Subject = 'New Contact Form Submission';

            // Create email body
            $mail->Body = "<html>
                            <head>
                                <!-- Add your email styles here -->
                            </head>
                            <body>
                                <p><strong>You received a contact message.</p>
                                <hr>
                                <p><strong>Name:</strong> $contact_name</p>
                                <p><strong>Email:</strong> $contact_email</p>
                                <p><strong>Subject:</strong> $contact_subject</p>
                                <p><strong>Message:</strong></p>
                                <p>$contact_message</p>
                            </body>
                            </html>";
            $mail->isHTML(true);

            // Send the email
            $mail->send();

            $sql = "INSERT INTO contacts (contact_name, contact_email, contact_subject, contact_message) 
                VALUES ('$contact_name', '$contact_email', '$contact_subject', '$contact_message')";

            if ($conn->query($sql) !== TRUE) {
                echo "❌ Database insert failed: " . $conn->error;
                exit();
            }
            $mail->smtpClose(); // Close SMTP connection
            sleep(2); // Wait 2 seconds before sending next email

            // user confirmation mail
            $userMail = new PHPMailer(true);
            try {
                $userMail->SMTPDebug = 2; // Enable debugging (set to 0 in production)
                $userMail->Debugoutput = 'html'; // Display output in HTML format

                $userMail->isSMTP();
                $userMail->Host       = 'smtp.gmail.com';
                $userMail->SMTPAuth   = true;
                $userMail->Username   = 'info@kemof-ng.com';
                $userMail->Password   = 'yuci nxsw anvh uoen';
                $userMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $userMail->Port       = 465;

                $userMail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );

                $userMail->setFrom('info@kemof-ng.com', 'Kemof Ltd NG');
                $userMail->addAddress($contact_email); // Send to the user
                $userMail->Subject = 'Thank You for Contacting Us - Kemof Ltd NG';
                $userMail->isHTML(true);
                $userMail->Body = "
                    <html>
                    <body>
                        <p>Dear <strong>$contact_name</strong>,</p>
                        <p>Thank you for reaching out to <strong>Kemof Nigeria Limited </strong>. We have received your message and will get back to you as soon as possible.</p>
                        <p><strong>Your Message:</strong></p><p>$contact_message</p>
                        <p>Best regards,<br><strong>Kemof Ltd NG</strong></p>
                    </body>
                    </html>";

                $userMail->send(); // Send confirmation email to user
            } catch (Exception $e) {
                echo "User confirmation email failed: " . $userMail->ErrorInfo;
            }
            // end user confirmation mail

            // Redirect after success
            header("Location: ../get-a-quote.php?submitted=success");
            exit();
        } catch (Exception $e) {
            echo "Error sending email: " . $mail->ErrorInfo;
        }

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();

?>
