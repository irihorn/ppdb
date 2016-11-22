<?php 
require 'scripts/connect.php';
$id = $_REQUEST['id'];

$edit_sql = "SELECT * FROM `investigation` WHERE `ptn_id` = '{$id}'";
$result = $conn->query($edit_sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>ФИО</th><th>Возраст</th><th>Пол</th><th>История болезни</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["who_sent"]." ".$row["finance"]."</td><td>".$row["koi"]."</td><td>".$row["date_sent"]."</td><td>".$row["invest_obj"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>