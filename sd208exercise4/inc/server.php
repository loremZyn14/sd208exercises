<?php
session_start();
$errFname = $errLname = $errEmail = "";
if (isset($_POST['submit'])) {
    if (strlen(trim($_POST['fname'])) < 2 or strlen(trim($_POST['fname'])) > 25) {
        $errFname = "First name must be greater than 2 and less than 25 characters";
    }
    if (strlen(trim($_POST['lname'])) < 2 or strlen(trim($_POST['lname'])) > 25) {
        $errLname = "Last name must be greater than 2 and less than 25 characters";
    }
    if (!(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))) {
        $errEmail = "Your email format is invalid";
    }
}
