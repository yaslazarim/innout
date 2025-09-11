<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'Lucas', 'email' => 'lucas@email.com']);


echo User::getSelect(['id' => '1'], 'name, email');
echo '<br>';
echo User::getSelect(['name' => 'Yasmim', 'email' => 'chaves@cod3r.com.br']);
