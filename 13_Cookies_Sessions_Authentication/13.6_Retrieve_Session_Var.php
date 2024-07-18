<?php
session_start();

if (isset($_SESSION['forename'])) {
    $forename = $_SESSION['forename'];
    $surname = $_SESSION['surname'];

    destroy_session_and_data();

    echo htmlspecialchars("Welcome back $forename");
    echo "<br>";
    echo htmlspecialchars("Your full name is $forename $surname");


    echo "Welcome back $forename. Your username is $surname.<br>";
}
else echo "Please <a href = '13.5_Session_Success_Auth.php'>click here</a> to log in.";

function destroy_session_and_data() {
    $_SESSION = array();
    setcookie(session_name(), '', time() - 2592000, '/');
    session_destroy();
}