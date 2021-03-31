<!-- DISPLAY MESSAGES ------------------------------------------>
<?php
if (isset($_SESSION['registration'])) {
    echo message_registration_success();
}
if (isset($_SESSION['empty'])) {
    echo message_empty_error();
}
if (isset($_SESSION['invalid'])) {
    echo message_invalid_error();
}
if (isset($_SESSION['password_error'])) {
    echo message_password_error();
}
if (isset($_SESSION['sql_error'])) {
    echo message_sql_error();
}
if (isset($_SESSION['username_taken'])) {
    echo message_username_taken_error();
}
?>