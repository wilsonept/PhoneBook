<?php

include('includes/db.php');

echo "Searching for " . $_POST['search'] . '<br><br><br>';

$query = $_POST['search'];

$result = mysqli_query($connection, "SELECT * FROM `phone_numbers`"); //WHERE `Lastname` = $query

?>

<table border = '1'>
	<?php

			while( ($record = mysqli_fetch_assoc($result)) )
			{
				echo '<tr>';
					echo '<td>' . $record['DepNum']		. '</td>';
					echo '<td>' . $record['DepName']	. '</td>';
					echo '<td>' . $record['Name']		. '</td>';
					echo '<td>' . $record['Lastname']	. '</td>';
					echo '<td>' . $record['Surname']	. '</td>';
					echo '<td>' . $record['Phone_1']	. '</td>';
				echo '</tr>';
			}

	?>
	


</table>
<?php

mysqli_close($connection);

?>