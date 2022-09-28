<?php
// NEVER put any HTML before setcookie!! - this code: retenir l'email de la personne connectée pendant 1 an

setcookie(
    'LOGGED_USER',
    'utilisateur@exemple.com',
    [
        'expires' => time() + 365*24*3600,
        'secure' => true,
        'httponly' => true,
    ]
);
?>