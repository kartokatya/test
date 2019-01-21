<?php
$host = 'localhost';
$database = 'test';
$user = 'root';
$password = '';

$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));

$query ="SELECT c.name, COUNT(*) how_many
FROM clients c JOIN orders o ON o.client=c.id
WHERE status LIKE 'Complete' GROUP BY name
HAVING COUNT(*) > 4
";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
foreach($result as $res){
    print_r($res);
}