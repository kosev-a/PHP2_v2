<?php

require_once 'vendor/fzaninotto/faker/src/autoload.php';
$faker = Faker\Factory::create();

switch ($argv[1]) {
    case 'user':
        echo $faker->name() . PHP_EOL;
        break;
    case 'post':
        echo $faker->word() . PHP_EOL;
        break;
    case 'comment':
        echo $faker->realText() . PHP_EOL;
        break;
}