<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    // Generate a unique patient reference number
    $patient_reference_number = uniqid();

    // ... (previous code for database connection and data insertion)

    // Send email to the patient
    $to = $email;
    $subject = "Patient Registration Confirmation";
    $message = "Dear $name,\n\nThank you for registering as a patient. Your reference number is: $patient_reference_number.\n\nPlease keep this reference number for future reference.\n\nBest regards,\nThe Hospital Team";

    $headers = "From: munyelelelevin@gmail.com"; 
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    if (mail($to, $subject, $message, $headers)) {
        echo "Data saved successfully. An email has been sent to $email with the patient reference number.";
    } else {
        echo "Error sending email.";
    }

}
?>
