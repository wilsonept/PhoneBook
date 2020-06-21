<?php

include('includes/db.php');
include('includes/function.php');

$query = '%' . $_POST['search'] . '%';

$result = mysqli_query($connection, "SELECT * FROM `phonebook` WHERE `Lastname` LIKE '$query' OR `Name` LIKE '$query' OR `SurName` LIKE '$query' OR `DepNum` LIKE '$query' OR `DepName` LIKE '$query' OR `Position` LIKE '$query' OR `Phone_1` LIKE '$query' OR `Phone_2` LIKE '$query' OR `Phone_3` LIKE '$query' OR `Phone_4` LIKE '$query' ORDER BY `Object`");


include('index.php');

?>

<div class='table_box'>
	<table>
		<thread>
			<tr class='table_header'>
				<th class='table_header_radius_1'>№ отдела</th>
				<th>Название отдела</th>
				<th>Должность</th>
				<th>Фамилия</th>
				<th>Имя</th>
				<th>Отчество</th>
				<th>Телефон</th>
				<th class='table_header_radius_2'>объект</th>
			</tr>
		</thread>
	
			<?php

					if ( mysqli_num_rows( $result ) != 0)
					{

						$class = array('tr_one', 'tr_two');
						while( ($record = mysqli_fetch_assoc($result)) )
						{
							echo "<tr class=$class[0]>";
							echo '<td align="center">'	. $record['DepNum']		. '</td>';
							echo '<td align="left">'		. $record['DepName']	. '</td>';
							echo '<td align="left">'		. $record['Position']	. '</td>';
							echo '<td align="left">'		. $record['Lastname']	. '</td>';
							echo '<td align="left">'		. $record['Name']		. '</td>';
							echo '<td align="left">'		. $record['Surname']	. '</td>';
							
							echo '<td align="center">'
									. phone_local($record['Phone_1'])	. '<br />' 
									. phone_local($record['Phone_2'])	. '<br />'
									. phone_ext($record['Phone_3'])		. '<br />'
									. phone_ext($record['Phone_4'])		. '</td>';

							echo '<td align="center">' . $record['Object'] . '</td>';
							echo '</tr>';

							$class = array($class[1], $class[0]);
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