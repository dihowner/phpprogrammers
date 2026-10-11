<?php

// Heredoc
$name = "Raheem";
$role = "Backend Engineer";

$message = <<<TEXT
Hello, $name!
You are a $role.
Welcome to PHP.
TEXT;

echo $message;


echo "<hr>";

$name = "Raheem";

$message = <<<'TEXT'
Hello, $name!
Welcome to PHP.
TEXT;

echo $message;