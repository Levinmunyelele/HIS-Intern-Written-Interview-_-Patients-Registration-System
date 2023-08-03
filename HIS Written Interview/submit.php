<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $date_of_birth = $_POST["date_of_birth"];
    $id_number = $_POST["id_number"];
    $address = $_POST["address"];
    $county = $_POST["county"];
    $sub_county = $_POST["sub_county"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $marital_status = $_POST["marital_status"];
    $next_of_kin_name = $_POST["next_of_kin_name"];
    $next_of_kin_date_of_birth = $_POST["next_of_kin_date_of_birth"];
    $next_of_kin_id_number = $_POST["next_of_kin_id_number"];
    $next_of_kin_gender = $_POST["next_of_kin_gender"];
    $next_of_kin_relationship = $_POST["next_of_kin_relationship"];
    $next_of_kin_telephone = $_POST["next_of_kin_telephone"];

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = "patients_form";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert data into the 'patients' table
    $sql = "INSERT INTO patients (name, date_of_birth, id_number, address, county, sub_county, telephone, email, gender, marital_status, next_of_kin_name, next_of_kin_date_of_birth, next_of_kin_id_number, next_of_kin_gender, next_of_kin_relationship, next_of_kin_telephone) VALUES ('$name', '$date_of_birth', '$id_number', '$address', '$county', '$sub_county', '$telephone', '$email', '$gender', '$marital_status', '$next_of_kin_name', '$next_of_kin_date_of_birth', '$next_of_kin_id_number', '$next_of_kin_gender', '$next_of_kin_relationship', '$next_of_kin_telephone')";

    // Execute the query and check if it was successful
    if ($conn->query($sql) === TRUE) {
        echo "Data saved successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
