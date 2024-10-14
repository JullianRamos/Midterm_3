<?php 

require_once 'dbConfig.php';

function insertIntoHandlerRecords($pdo, $first_name, $last_name, $email, $phone_number, $expertise, $date_added) {
	$sql = "INSERT INTO handler_records (first_name, last_name, email, phone_number, expertise, date_added) VALUES (?, ?, ?, ?, ?, ?)";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$first_name, $last_name, $email, $phone_number, $expertise, $date_added]);

	return $executeQuery; // Return true or false based on execution result
}

function seeAllHandlerRecords($pdo) {
	$sql = "SELECT * FROM handler_records";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
	return []; // Return an empty array if the query fails
}

function getHandlerByID($pdo, $handler_id) {
	$sql = "SELECT * FROM handler_records WHERE handler_id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$handler_id])) {
		return $stmt->fetch();
	}
	return null; // Return null if no handler is found
}

function updateAHandler($pdo, $handler_id, $first_name, $last_name, $email, $phone_number, $expertise, $date_added) {
	$sql = "UPDATE handler_records 
			SET first_name = ?, 
				last_name = ?, 
				email = ?, 
				phone_number = ?, 
				expertise = ?, 
				date_added = ? 
			WHERE handler_id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$first_name, $last_name, $email, $phone_number, $expertise, $date_added, $handler_id]);

	return $executeQuery; // Return true or false based on execution result
}

function deleteAHandler($pdo, $handler_id) {
	$sql = "DELETE FROM handler_records WHERE handler_id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$handler_id]);

	return $executeQuery; // Return true or false based on execution result
}

?>