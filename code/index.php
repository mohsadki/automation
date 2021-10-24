<?php
$link = mysql_connect('db', 'root', 'password');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);

$query = sprintf("INSERT INTO `log` (`id`, `ts`, `mess`) VALUES (NULL, CURRENT_TIMESTAMP, 'first message test')");

mail('caffeinated@example.com', 'Mon Sujet', 'first message test');
?>