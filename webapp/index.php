<?php

$dbhost = 'database';
$dbname = 'webtest';
$dbuser = 'root';
$dbpass = 'dockdeploytest';
$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

$query = $dbh->query("SELECT * FROM test");

$result = $query->execute();

echo "Hello new swarm!" . PHP_EOL;

var_dump($query->fetchAll(PDO::FETCH_ASSOC));
