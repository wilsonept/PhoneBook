<?php

include('includes/db.php');

$query = '%' . $_POST['search'] . '%';

//echo "Searching result for " . $_POST['search'] . '<br><br><br>';


$result = mysqli_query($connection, "SELECT * FROM `phone_numbers` WHERE `Lastname` LIKE '$query' OR `Name` LIKE '$query' OR `SurName` LIKE '$query' OR `DepNum` LIKE '$query' OR `DepName` LIKE '$query' OR `Phone_1` LIKE '$query'");


include('index.php');

?>
<div class='tbodyB'>
	<table class='tableR'>
		<thread>
			<tr class='header'>
				<th>№ отдела</td>
				<th>Название отдела</td>
				<th>Фамилия</td>
				<th>Имя</td>
				<th>Отчество</td>
				<th>Телефон местный</td>
			</tr>
		</thread>
		
			<?php
					while( ($record = mysqli_fetch_assoc($result)) )
					{
						echo '<tr>';
							echo '<td class="tbody" align="center">'	. $record['DepNum']		. '</td>';
							echo '<td class="tbody" align="left">'		. $record['DepName']	. '</td>';
							echo '<td class="tbody" align="left">'		. $record['Lastname']	. '</td>';
							echo '<td class="tbody" align="left">'		. $record['Name']		. '</td>';
							echo '<td class="tbody" align="left">'		. $record['Surname']	. '</td>';
							echo '<td class="tbody" align="center">'	. $record['Phone_1']	. '</td>';
						echo '</tr>';
					}
			?>
	</table>
</div>

<?php

mysqli_close($connection);

?>