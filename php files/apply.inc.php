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

    // Sanitize form data
    $apply_fn = mysqli_real_escape_string($conn, $_POST['apply_fn']);
    $apply_ln = mysqli_real_escape_string($conn, $_POST['apply_ln']);
    $apply_address = mysqli_real_escape_string($conn, $_POST['apply_address']);
    $apply_phone = mysqli_real_escape_string($conn, $_POST['apply_phone']);
    $apply_email = mysqli_real_escape_string($conn, $_POST['apply_email']);
    $apply_pob = mysqli_real_escape_string($conn, $_POST['apply_pob']);
    $apply_dob = mysqli_real_escape_string($conn, $_POST['apply_dob']);
    $apply_country = mysqli_real_escape_string($conn, $_POST['apply_country']);
    $apply_gender = mysqli_real_escape_string($conn, $_POST['apply_gender']);
    $apply_salary = mysqli_real_escape_string($conn, $_POST['apply_salary']);
    $apply_link = mysqli_real_escape_string($conn, $_POST['apply_link']);

    // Check if files are uploaded
    if (isset($_FILES['apply_cv']) && isset($_FILES['apply_cl'])) {
        // File upload handling for CV
        $cv_name = uniqid('cv_', true) . "-" . basename($_FILES["apply_cv"]["name"]);
        $cv_tmp_name = $_FILES["apply_cv"]["tmp_name"];
        $cv_upload_dir = "uploads/cv";
        if (!file_exists($cv_upload_dir)) {
            mkdir($cv_upload_dir, 0777, true); // Create directory if it doesn't exist
        }
        $cv_upload_path = $cv_upload_dir . "/" . $cv_name;

        // File upload handling for Cover Letter
        $cl_name = uniqid('cl_', true) . "-" . basename($_FILES["apply_cl"]["name"]);
        $cl_tmp_name = $_FILES["apply_cl"]["tmp_name"];
        $cl_upload_dir = "uploads/cl";
        if (!file_exists($cl_upload_dir)) {
            mkdir($cl_upload_dir, 0777, true); // Create directory if it doesn't exist
        }
        $cl_upload_path = $cl_upload_dir . "/" . $cl_name;

        // Check for file upload errors
        if ($_FILES["apply_cv"]["error"] === UPLOAD_ERR_OK && $_FILES["apply_cl"]["error"] === UPLOAD_ERR_OK) {
            // Move files to the desired location
            if (move_uploaded_file($cv_tmp_name, $cv_upload_path) && move_uploaded_file($cl_tmp_name, $cl_upload_path)) {
                // Prepare email notification first, before inserting data into the database
                $mail = new PHPMailer(true);
                try {
                    // Set up SMTP configuration for admin notification
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.gmail.com';  // Your SMTP server (e.g., Gmail)
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'info@kemof-ng.com'; // Your email
                    $mail->Password   = 'yuci nxsw anvh uoen';       // Your email password (or app password)
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                    $mail->Port       = 465;                  // SMTP port (587 is common for TLS)

                    // Add this line to bypass SSL certificate verification
                    $mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );

                    // Set email details
                    $mail->setFrom('info@kemof-ng.com', 'Kemof Ltd NG');  // Sender's email
                    // $mail->addAddress('info@kemof-ng.com'); 
                    $mail->addAddress('ugochiakano@gmail.com'); // Recipient's email (Admin or you)
                    $mail->Subject = 'New Job Application from Your website';
                    $mail->Body = "
                                        <html>
                                        <head>
                                        </head>
                                        <body>
                                            <div style='display: flex; align-items: center; gap: 10px;'>
                                                <img src='https://drive.google.com/uc?export=view&id=1qPG1K_2brn91Rd13ZeWhYi9cGnnYLVTK' width='50' height='50'>
                                                <strong style='font-size: 20px; padding-top: 0.5rem; padding-left: 0.5rem'>Kemof Ltd NG</strong>
                                            </div>
                                            <br>
                                            <p>A new application has been submitted.</p>
                                            <p><strong>Name:</strong> $apply_fn $apply_ln</p>
                                            <p><strong>Email:</strong> $apply_email</p>
                                            <p><strong>Phone:</strong> $apply_phone</p>
                                            <p><strong>Address:</strong> $apply_address</p>
                                            <p><strong>Place of Birth:</strong> $apply_pob</p>
                                            <p><strong>Date of Birth:</strong> $apply_dob</p>
                                            <p><strong>Country:</strong> $apply_country</p>
                                            <p><strong>Gender:</strong> $apply_gender</p>
                                            <p><strong>Salary Expectation:</strong> ₦" . number_format($apply_salary, 2) . "</p>
                                            <p><strong>LinkedIn:</strong> $apply_link</p>
                                            <p><strong>CV Path:</strong> $cv_upload_path</p>
                                            <p><strong>Cover Letter Path:</strong> $cl_upload_path</p>
                                        </body>
                                        </html>
                                        ";

                    // Attach the CV and Cover Letter files
                    $mail->addAttachment($cv_upload_path); // Attach CV
                    $mail->addAttachment($cl_upload_path); // Attach Cover Letter

                    $mail->isHTML(true);  // If the email body is in HTML format

                    // Send the email
                    if ($mail->send()) {
                        // Insert data into the database **after** email was sent successfully
                        $sql = "INSERT INTO applications (first_name, last_name, address, phone, email, place_of_birth, dob, country, gender, salary, linkedin_url, cv_path, cover_letter_path)
                            VALUES ('$apply_fn', '$apply_ln', '$apply_address', '$apply_phone', '$apply_email', '$apply_pob', '$apply_dob', '$apply_country', '$apply_gender', '$apply_salary', '$apply_link', '$cv_upload_path', '$cl_upload_path')";
                        
                        if ($conn->query($sql) === TRUE) {


                            // Send confirmation email to the user
                            $userMail = new PHPMailer(true);
                            try {
                                // Set up SMTP configuration
                                $userMail->isSMTP();
                                $userMail->Host       = 'smtp.gmail.com';  // Your SMTP server (e.g., Gmail)
                                $userMail->SMTPAuth   = true;
                                $userMail->Username   = 'info@kemof-ng.com'; // Your email
                                $userMail->Password   = 'yuci nxsw anvh uoen';       // Your email password (or app password)
                                $userMail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                                $userMail->Port       = 465;                  // SMTP port (587 is common for TLS)

                                // Bypass SSL certificate verification
                                $userMail->SMTPOptions = array(
                                    'ssl' => array(
                                        'verify_peer' => false,
                                        'verify_peer_name' => false,
                                        'allow_self_signed' => true
                                    )
                                );

                                // user Set email details
                                $userMail->setFrom('info@kemof-ng.com', 'Kemof Ltd NG'); // Sender's email
                                $userMail->addAddress($apply_email); // Recipient (User's email)
                                $userMail->Subject = 'Application Received - Kemof Ltd NG';
                                $userMail->isHTML(true); // Enable HTML email

                                // Email body
                                $userMail->Body = "
                                <html>
                                <head>
                                    <style>
                                        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                                        .container { padding: 20px; border: 1px solid #ddd; border-radius: 5px; width: 90%; max-width: 600px; }
                                        .header { display: flex; align-items: center; gap: 10px; }
                                        .header img { width: 50px; height: 50px; }
                                        .header h2 { margin: 0; font-size: 20px; }
                                        .footer { margin-top: 20px; font-size: 14px; color: #777; }
                                    </style>
                                </head>
                                <body>
                                    <div class='container'>
                                        <div class='header'>
                                            <img src='https://drive.google.com/uc?export=view&id=1qPG1K_2brn91Rd13ZeWhYi9cGnnYLVTK' alt='Kemof Ltd NG Logo'>
                                            <h2>Kemof Ltd NG</h2>
                                        </div>
                                        <p>Dear <strong>$apply_fn $apply_ln</strong>,</p>
                                        <p>Thank you for applying to <strong>Kemof Ltd NG</strong>. We have received your application and will review it shortly.</p>
                                        <p>Our team will get back to you if your application matches our current requirements.</p>
                                        <p>Best regards,</p>
                                        <p><strong>Kemof Ltd NG</strong></p>
                                        <div class='footer'>
                                            <p>This is an automated message. Please do not reply.</p>
                                        </div>
                                    </div>
                                </body>
                                </html>
                                ";

                                // Send the email
                                $userMail->send();

                                header("Location: ../apply.php?submitted=success");
                                exit();

                            } catch (Exception $e) {
                                echo "Error sending confirmation email: " . $userMail->ErrorInfo;
                            }

                        } else {
                            echo "Error inserting data into the database.";
                        }
                    } else {
                        echo "Error sending admin email.";
                    }
                } catch (Exception $e) {
                    echo "Error sending email-> " . $mail->ErrorInfo;
                }

            } else {
                echo "Error uploading files.";
            }
        } else {
            echo "Error in file upload.";
        }
    } else {
        echo "No files were uploaded.";
    }
}
?>
