<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewHandlerBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$email = trim($_POST['email']);
	$phone_number = trim($_POST['phone_number']);
	$expertise = trim($_POST['expertise']);
	$date_added = trim($_POST['date_added']);

	if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($phone_number) && !empty($expertise) && !empty($date_added)) {
		$query = insertIntoHandlerRecords($pdo, $firstName, $lastName, 
		$email, $phone_number, $expertise, $date_added);

		if ($query) {
			header("Location: ../index.php");
			exit();
		} else {
			echo "Insertion failed";
		}
	} else {
		echo "Make sure that no fields are empty";
	}
}

if (isset($_POST['editHandlerBtn'])) {
	$handler_id = $_GET['handler_id'];
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$email = trim($_POST['email']);
	$phone_number = trim($_POST['phone_number']);
	$expertise = trim($_POST['expertise']);
	$date_added = trim($_POST['date_added']);

	if (!empty($handler_id) && !empty($firstName) && !empty($lastName) && !empty($email) && !empty($phone_number) && !empty($expertise) && !empty($date_added)) {
		$query = updateAHandler($pdo, $handler_id, $firstName, $lastName, $email, $phone_number, $expertise, $date_added);

		if ($query) {
			header("Location: ../index.php");
			exit();
		} else {
			echo "Update failed";
		}
	} else {
		echo "Make sure that no fields are empty";
	}
}

if (isset($_POST['deleteHandlerBtn'])) {
	$handler_id = $_GET['handler_id'];

	if (!empty($handler_id)) {
		$query = deleteAHandler($pdo, $handler_id);

		if ($query) {
			header("Location: ../index.php");
			exit();
		} else {
			echo "Deletion failed";
		}
	} else {
		echo "Handler ID is missing";
	}
}
?>