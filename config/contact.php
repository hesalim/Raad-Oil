<?php

return [
    // 'to' → the email where contact form messages go
    'to' => env('CONTACT_TO', 'admin@yourdomain.com'),

    // 'subject_prefix' → optional label in subject (e.g., [TEST])
    'subject_prefix' => env('CONTACT_SUBJECT_PREFIX', ''),
];
