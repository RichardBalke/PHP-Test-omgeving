<?php

declare(strict_types=1);

function is_input_empty(string $first_name, string $last_name, string $email, string $user_password) {
    	if (empty($first_name) || empty($last_name) || empty($email) || empty($user_password)) {
            return true;
        } else {
            return false;
        }
}

function is_email_invalid(string $email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}


function is_email_registered(object $pdo, string $email) {
    if(get_email($pdo , $email)){
        return true;
    } else {
        return false;
    }
}

function create_user(object $pdo, string $first_name, string $last_name, string $email, string $user_password) {
    set_user($pdo, $first_name, $last_name, $email, $user_password);
}