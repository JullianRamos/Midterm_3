<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit PC Handler</title>
	<style>
		body {
			font-family: "Arial", sans-serif;
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
	</style>
</head>
<body>
	<?php $getHandlerById = getHandlerByID($pdo, $_GET['handler_id']); ?>
	<form action="core/handleForm.php?handler_id=<?php echo $_GET['handler_id']; ?>" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo htmlspecialchars($getHandlerById['first_name']); ?>" required>
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo htmlspecialchars($getHandlerById['last_name']); ?>" required>
		</p>
		<p>
			<label for="email">Email</label>
			<input type="email" name="email" value="<?php echo htmlspecialchars($getHandlerById['email']); ?>" required>
		</p>
		<p>
			<label for="phone_number">Phone Number</label>
			<input type="text" name="phone_number" value="<?php echo htmlspecialchars($getHandlerById['phone_number']); ?>" required>
		</p>
		<p>
			<label for="expertise">Expertise</label>
			<input type="text" name="expertise" value="<?php echo htmlspecialchars($getHandlerById['expertise']); ?>" required>
		</p>
		<p>
			<label for="date_added">Date Added</label>
			<input type="date" name="date_added" value="<?php echo htmlspecialchars($getHandlerById['date_added']); ?>" required>
		</p>
		<p>
			<input type="submit" name="editHandlerBtn" value="Update Handler">
		</p>
	</form>
</body>
</html>