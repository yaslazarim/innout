<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'Lucas', 'email' => 'lucas@email.com']);


print_r(User::get(['name' => 'Yasmim'], 'id, name, email'));

echo '<br>';

print_r(User::get());