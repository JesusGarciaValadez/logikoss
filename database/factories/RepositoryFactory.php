<?php

use Faker\Generator as Faker;

$factory->define(App\Repository::class, function (Faker $faker) {
  return [
    'node_id' => $faker->uuid(),
    'name' => $faker->name(),
    'full_name' => $faker->name(),
    'html_url' => $faker->url(),
    'url' => $faker->url(),
    'commits_url' => $faker->url(),
    'git_commits_url' => $faker->url(),
    'repo_created_at' => $faker->dateTime('now'),
    'repo_updated_at' => $faker->dateTime('now'),
    'repo_pushed_at' => $faker->dateTime('now')
  ];
});
