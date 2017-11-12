<?php
	
	include_once'Database.php';

	if(isset($_POST['name']) && isset($_POST['description'])){
		$name = $_POST['name'];
		$description = $_POST['description'];

		try {
			$createQuery = "INSERT INTO tasks(name, description, created_at) 
							VALUES (:name, :desc, now())";

			$statement = $conn->prepare($createQuery);
			$statement->execute(array(":name" => $name, ":desc" => $description));

			if($statement){
				echo "Record inserted";
			}
		}
		catch (PDOException $ex){
			echo "An error occurred ".$ex->getMessage();
		}
	}