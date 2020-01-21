<?php
   /*require getcwd()."/Bot_lib/main.php";
   $x = new bot("1032278958:AAGXNDBlidRywlwp0dCk5yLbhR8PdswdmZY");
   echo $x->sendMessage("556659349", "New ALert");*/
$dsn = "pgsql:"
    . "host=ec2-3-224-165-85.compute-1.amazonaws.com;"
    . "dbname=da4o0jbbm8j16b;"
    . "user=wfrmxfclvneiev;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=24ffc2055bd42bb4c9becf238f365f3941af690b16c641651fe7deb0020f1f83";

$db = new PDO($dsn);
$db->query("CREATE TABLE employees (
    employee_id SERIAL,
    last_name VARCHAR(30),
    first_name VARCHAR(30),
    title VARCHAR(50)
);");
$query = "SELECT employee_id, last_name, first_name, title "
     . "FROM employees ORDER BY last_name ASC, first_name ASC";
$result = $db->query($query);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . $row["employee_id"] . "</td>";
    echo "<td>" . htmlspecialchars($row["last_name"]) . "</td>";
    echo "<td>" . htmlspecialchars($row["first_name"]) . "</td>";
    echo "<td>" . htmlspecialchars($row["title"]) . "</td>";
    echo "</tr>";
}
$result->closeCursor();
?>
