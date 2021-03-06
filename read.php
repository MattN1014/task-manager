<?php 
	include_once'Database.php';

	try{

		$readQuery = "SELECT * FROM tasks";

		$statement = $conn->query($readQuery);

		while($tasks = $statement->fetch(PDO::FETCH_OBJ)){

			$created_date = strftime("%d %b %Y", strtotime($tasks->created_at));

			$output = "
				<tr>
	                <td title='Click to edit'>
	                	<div class='editable' onclick=\"makeElementEditable(this)\" onblur=\"updateTask(this, '{$tasks->id}', 'name')\"> $tasks->name </div>
	                </td>
	                <td title='Click to edit'>
	                	<div class='editable' onclick=\"makeElementEditable(this)\" onblur=\"updateTask(this, '{$tasks->id}', 'description')\"> $tasks->description </div>
	                </td>
	                <td title='Click to edit'>
	                	<div class='editable' onclick=\"makeElementEditable(this)\" onblur=\"updateTask(this, '{$tasks->id}', 'status')\"> $tasks->status </div>
	                </td>
	                <td> $created_date </td>
	                <td style='width: 5%;'>
	                	<button class='btn btn-raised btn-danger btn-sm' style='margin: 0;' onclick=\"deleteTask('{$tasks->id}')\">
	                		<i class='fa fa-times'></i>
	                	</button>
	                </td>
	            </tr>
			";

			echo $output;
		}
	}
	catch (PDOException $ex){
		echo "An error occurred ".$ex->getMessage();
	}