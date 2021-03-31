<?php

/* REGISTRATION ------------------------------------------------------------ */
/* Sucess Message For Registration*/
function message_registration_success()
{
    $message = '';
    if (isset($_SESSION['registration'])) {
        $message = '<div class="alert alert-success fade show">';
        $message .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        $message .= ' <strong>SUCCESS! </strong>';
        $message .= htmlentities($_SESSION['registration']);
        $message .= '</div>';

        //clear message after use
        $_SESSION['registration'] = null;
        return $message;
    }
}
/* Empty Message For Registration*/
function message_empty_error()
{
    $message = '';
    if (isset($_SESSION['empty'])) {
        $message = '<div class="alert alert-danger fade show">';
        $message .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        $message .= ' <strong>ERROR! </strong>';
        $message .= htmlentities($_SESSION['empty']);
        $message .= '</div>';

        //clear message after use
        $_SESSION['empty'] = null;
        return $message;
    }
}
/* Invalid Username Message For Registration*/
function message_invalid_error()
{
    $message = '';
    if (isset($_SESSION['invalid'])) {
        $message = '<div class="alert alert-danger fade show">';
        $message .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        $message .= ' <strong>ERROR! </strong>';
        $message .= htmlentities($_SESSION['invalid']);
        $message .= '</div>';

        //clear message after use
        $_SESSION['invalid'] = null;
        return $message;
    }
}
/* Password do not match Message For Registration*/
function message_password_error()
{
    $message = '';
    if (isset($_SESSION['password_error'])) {
        $message = '<div class="alert alert-danger fade show">';
        $message .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        $message .= ' <strong>ERROR! </strong>';
        $message .= htmlentities($_SESSION['password_error']);
        $message .= '</div>';

        //clear message after use
        $_SESSION['password_error'] = null;
        return $message;
    }
}
/* SQL ERROR Message For Registration*/
function message_sql_error()
{
    $message = '';
    if (isset($_SESSION['sql_error'])) {
        $message = '<div class="alert alert-danger fade show">';
        $message .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        $message .= ' <strong>ERROR! </strong>';
        $message .= htmlentities($_SESSION['sql_error']);
        $message .= '</div>';

        //clear message after use
        $_SESSION['sql_error'] = null;
        return $message;
    }
}
/* Username Taken Message For Registration*/
function message_username_taken_error()
{
    $message = '';
    if (isset($_SESSION['username_taken'])) {
        $message = '<div class="alert alert-danger fade show">';
        $message .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        $message .= ' <strong>ERROR! </strong>';
        $message .= htmlentities($_SESSION['username_taken']);
        $message .= '</div>';

        //clear message after use
        $_SESSION['username_taken'] = null;
        return $message;
    }
}
