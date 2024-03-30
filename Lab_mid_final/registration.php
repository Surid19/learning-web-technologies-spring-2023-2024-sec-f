<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="validation.php" method="post">
        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="first_name" required><br>

        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name" required><br>

        <label for="dob">Date of Birth:</label><br>
        <select id="dob_day" name="dob_day" required>
            <option value="">Day</option>
            <?php
                for ($i = 1; $i <= 31; $i++) {
                    echo "<option value=\"$i\">$i</option>";
                }
            ?>
        </select>
        <select id="dob_month" name="dob_month" required>
            <option value="">Month</option>
            <?php
                $months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                foreach ($months as $key => $month) {
                    echo "<option value=\"" . ($key + 1) . "\">$month</option>";
                }
            ?>
        </select>
        <select id="dob_year" name="dob_year" required>
            <option value="">Year</option>
            <?php
                for ($i = 1900; $i <= 2016; $i++) {
                    echo "<option value=\"$i\">$i</option>";
                }
            ?>
        </select><br>

        <label for="gender">Gender:</label><br>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label><br>

        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" required><br>

        <label for="email">Email ID:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>

        <label for="confirm_password">Confirm Password:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

