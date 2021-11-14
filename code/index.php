<?php

$link = mysql_connect("172.17.0.4:3306", "root", "password")
    or die("Impossible de se connecter : " . mysql_error() . mysql_errno() );
echo 'Connexion réussie';

$query = sprintf("INSERT INTO `log` (`id`, `ts`, `mess`) VALUES (NULL, CURRENT_TIMESTAMP, 'first message test')");
$result = mysql_query($query);
mysql_close($link);

mail('caffeinated@example.com', 'Mon Sujet', 'first message test');
?>