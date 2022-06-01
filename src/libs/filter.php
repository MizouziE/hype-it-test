<?php

function filter(array $data, array $fields, array $messages = []): array
{
    $sanitization_rules = [];
    $validation_rules  = [];

    foreach ($fields as $field => $rules) {
        if (strpos($rules, '|')) {
            [$sanitization_rules[$field], $validation_rules[$field]] =  explode('|', $rules, 2);
        } else {
            $sanitization_rules[$field] = $rules;
        }
    }

    $inputs = sanitize($data, $sanitization_rules);
    $errors = validate($inputs, $validation_rules, $messages);

    return [$inputs, $errors];
}

$fields = [
    'username' => 'string | required | alphanumeric | between: 3, 25 | unique: users, username',
    'email' => 'email | required | email | unique: users, email',
    'password' => 'string | required | secure',
    'password2' => 'string | required | same: password',
    'agree' => 'string | required'
];

// custom messages
$messages = [
    'password2' => [
        'required' => 'Please enter the password again',
        'same' => 'The password does not match'
    ],
    'agree' => [
        'required' => 'You need to agree to the term of services to register'
    ]
];

[$inputs, $errors] = filter($_POST, $fields, $messages);