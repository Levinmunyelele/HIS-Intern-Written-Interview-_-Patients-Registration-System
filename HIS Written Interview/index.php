<!DOCTYPE html>
<html>
<head>
    <title>Patients Registration Form</title>
</head>
<body>
    <h1>Patients Registration Form</h1>
    <form action="submit.php" method="post">
        <!-- Your form fields here -->
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" name="date_of_birth" required>

        <label for="id_number">ID Number:</label>
        <input type="text" name="id_number" required>

        <label for="address">Address:</label>
        <input type="text" name="address" required>

        <label for="county">County:</label>
        <input type="text" name="county" required>

        <label for="sub_county">Sub County:</label>
        <input type="text" name="sub_county">

        <label for="telephone">Telephone:</label>
        <input type="text" name="telephone">

        <label for="email">Email:</label>
        <input type="email" name="email">

        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>

        <label for="marital_status">Marital Status:</label>
        <input type="text" name="marital_status">

        <!-- Next of Kin Section -->
        <h2>Next of Kin</h2>
        <label for="next_of_kin_name">Name:</label>
        <input type="text" name="next_of_kin_name" required>

        <label for="next_of_kin_date_of_birth">Date of Birth:</label>
        <input type="date" name="next_of_kin_date_of_birth">

        <label for="next_of_kin_id_number">ID Number:</label>
        <input type="text" name="next_of_kin_id_number">

        <label for="next_of_kin_gender">Gender:</label>
        <select name="next_of_kin_gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>

        <label for="next_of_kin_relationship">Relationship:</label>
        <input type="text" name="next_of_kin_relationship" required>

        <label for="next_of_kin_telephone">Telephone:</label>
        <input type="text" name="next_of_kin_telephone">

        <button type="submit">Submit</button>
    </form>
</body>
</html>
