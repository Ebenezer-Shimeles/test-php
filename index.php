<?php
   /*require getcwd()."/Bot_lib/main.php";
   $x = new bot("1032278958:AAGXNDBlidRywlwp0dCk5yLbhR8PdswdmZY");
   echo $x->sendMessage("556659349", "New ALert");*/
   $db_connection = pg_connect("host=ec2-3-224-165-85.compute-1.amazonaws.com dbname=da4o0jbbm8j16b user=wfrmxfclvneiev password=24ffc2055bd42bb4c9becf238f365f3941af690b16c641651fe7deb0020f1f83");
   if($db_connection) echo "DNDNDND!";
   /*$pg_query($db_connection, "CREATE TABLE IF NOT EXISTS stocks (
    id SERIAL PRIMARY KEY,
    symbol CHARACTER VARYING(10) NOT NULL UNIQUE,
    company CHARACTER VARYING(255) NOT NULL UNIQUE
);");*/
   $pg_query($db_connection, "INSERT INTO  stocks(symbol, company) VALUES('a', 'a'); ");

$psq = pg_query("SELECT * FROM stocks");
$result = pg_fetch_row($psq);
 echo vardump($result);
?>
