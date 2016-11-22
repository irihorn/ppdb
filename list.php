<?php
	require 'scripts/connect.php';
	$sql = "SELECT id, first_name, last_name, case_report_num, age, gender FROM patients";
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Список больных</title>
	<link href="styles/style.css" rel="stylesheet">
	<script type="text/javascript" src='scripts/js/jquery-3.1.1.min.js'></script>
	<script type="text/javascript" src='scripts/js/js.js'></script>
	
</head>
<body>
<div class='wrapper'>

	<header class="header">
	</header>
	<main class="content">
		<?
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    echo "<table class='list'>",
					"<tr>",
					"<th>№</th>",
					"<th>ФИО</th>",
					"<th class='age'>Возраст</th>",
					"<th>Пол</th>",
					"<th>История болезни</th>",
					"<th class='ed_del'></th>",
					"</tr>";
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "<tr><form method='post' action='edit.php'>",
						"<td class='number'>".$row["id"]."<input type='hidden' name='id' value='".$row["id"]."'></td>",
						"<td class='fio'>".$row["first_name"]." ".$row["last_name"]."</td>",
						"<td class='age'>".$row["age"]."</td>",
						"<td class='gender'>".$row["gender"]."</td>",
						"<td class='rep_num'>".$row["case_report_num"]."</td>",
						"<td class='ed_del'><input type='image' src='images/buttons/edit20.png' data-title='Удалить' alt='Submit Form'/>",
					"<img class='delbutton' src='images/buttons/del20.png' data-title='Удалить' onClick='delete_Tr'/></td>",
					"</form></tr>";
			}
			echo "</table>";
		} else {
		    echo "0 results";
		}
		$conn->close();
		?>
	</main>
</div>

<footer class="footer">
	<strong>Made by Islam</strong>
</footer><!-- .footer -->
</body>
