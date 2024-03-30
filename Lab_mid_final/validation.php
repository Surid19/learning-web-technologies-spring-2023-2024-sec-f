<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob_day = $_POST['dob_day'];
    $dob_month = $_POST['dob_month'];
    $dob_year = $_POST['dob_year'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $errors = array();

    if (empty($first_name) || empty($last_name)) {
        $errors[] = "Name cannot be empty";
    } else {
        $name_parts = explode(' ', "$first_name $last_name");
        if (count($name_parts) < 2) {
            $errors[] = "Name must contain at least two words";
        } else {
            foreach ($name_parts as $name_part) {
                if (!ctype_alpha(str_replace(array('.', '-'), '', $name_part))) {
                    $errors[] = "Can contain a-z or A-Z or dot(.) or dash(-)";
                    break;
                }
            }
        }
    }

    if (empty($email)) {
        $errors[] = "Email cannot be empty";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Must be a valid email address (i.e anything@example.com)";
    }

    if (empty($gender)) {
        $errors[] = "At least one of them has to be selected";
    }

    if (empty($dob_day) || empty($dob_month) || empty($dob_year)) {
        $errors[] = "DOB Cannot be empty";
    } elseif (!is_numeric($dob_day) || !is_numeric($dob_month) || !is_numeric($dob_year) ||
              $dob_day < 1 || $dob_day > 31 || $dob_month < 1 || $dob_month > 12 ||
              $dob_year < 1900 || $dob_year > 2016) {
        $errors[] = "DOB must be a valid number (dd: 0-31, mm: 1-12, yyyy: 1900-2016)";
    }

    if (!empty($errors)) {
        echo "<h3>Errors:</h3><ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        echo "<h3>Form submitted successfully!</h3>";
    }
}
?>
