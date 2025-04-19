<?php

$user = new User('Ivan');
$article = new Article('title', 'text', $user);

var_dump($article);