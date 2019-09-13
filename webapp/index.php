<?php

$dbhost = 'database';
$dbname = 'webtest';
$dbuser = 'root';
$dbpass = 'dockdeploytest';
$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

$query = $dbh->query("SELECT * FROM test");

$result = $query->execute();

echo "Hello updated swarm!" . PHP_EOL;

$results = $query->fetchAll(PDO::FETCH_ASSOC);

echo <<<HTML
<table>
    <thead>
        <tr>
            <th>Example</th>
        </tr>
    </thead>
    <tbody>
HTML;

foreach ($results as $result) {
    echo <<<HTML
        <tr>
            <td>{$result['example']}</td>
        </tr>
HTML;
}

echo <<<HTML
    </tbody>
</table>
HTML;
