<?php

$link = mysql_connect("db", "root", "password")
    or die("Impossible de se connecter : " . mysql_error());
echo 'Connexion réussie';

$query = sprintf("INSERT INTO `log` (`id`, `ts`, `mess`) VALUES (NULL, CURRENT_TIMESTAMP, 'first message test')");
$result = mysql_query($query);
mysql_close($link);

mail('caffeinated@example.com', 'Mon Sujet', 'first message test');
?>