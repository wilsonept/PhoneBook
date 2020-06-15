<?php

include('includes/db.php');
include('includes/function.php');

$query = '%' . $_POST['search'] . '%';

//echo "Searching result for " . $_POST['search'] . '<br><br><br>';


$result = mysqli_query($connection, "SELECT * FROM `phone_numbers` WHERE `Lastname` LIKE '$query' OR `Name` LIKE '$query' OR `SurName` LIKE '$query' OR `DepNum` LIKE '$query' OR `DepName` LIKE '$query' OR `Position` LIKE '$query' OR `Phone_1` LIKE '$query' OR `Phone_2` LIKE '$query' OR `Phone_3` LIKE '$query' OR `Phone_4` LIKE '$query'");


include('index.php');

?>
<div class='tbodyB'>
	<table class='tableR'>
		<thread>
			<tr class='header'>
				<th>№ отдела</th>
				<th>Название отдела</th>
				<th>Должность</th>
				<th>Фамилия</th>
				<th>Имя</th>
				<th>Отчество</th>
				<th>местн</th>
				<th>местн</th>
				<th>город</th>
				<th>город</th>
			</tr>
		</thread>
		
			<?php

				if ( mysqli_num_rows( $result ) != 0) {

					while( ($record = mysqli_fetch_assoc($result)) )
					{

						echo '<tr>';
						echo '<td class="tbody" align="center">'	. $record['DepNum']		. '</td>';
						echo '<td class="tbody" align="left">'		. $record['DepName']	. '</td>';
						echo '<td class="tbody" align="left">'		. $record['Position']	. '</td>';
						echo '<td class="tbody" align="left">'		. $record['Lastname']	. '</td>';
						echo '<td class="tbody" align="left">'		. $record['Name']		. '</td>';
						echo '<td class="tbody" align="left">'		. $record['Surname']	. '</td>';
						
						echo '<td class="tbody" align="center">'	. phone_local($record['Phone_1']) 	. '</td>';
						echo '<td class="tbody" align="center">'	. phone_local($record['Phone_2']) 	. '</td>';
						echo '<td class="tbody" align="center">'	. phone_ext($record['Phone_3']) 	. '</td>';
						echo '<td class="tbody" align="center">'	. phone_ext($record['Phone_4']) 	. '</td>';
						echo '</tr>';
					}
				}
				else
				{
					echo '<tr>';
					echo '<td>';
					echo 'По вашему запросу ничего не найдено';
					echo '</td>';
					echo '</tr>';
				}
			?>
	</table>
</div>

<?php

mysqli_close($connection);

?>