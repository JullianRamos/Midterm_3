<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Delete Handler</title>
	<style>
		body {
			font-family: "Arial", sans-serif;
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		.container {
			border: 1px solid #ccc;
			padding: 20px;
			margin: 20px;
		}
	</style>
</head>
<body>
	<h1>Are you sure you want to delete this PC Handler?</h1>
	<?php $getHandlerById = getHandlerByID($pdo, $_GET['handler_id']); ?>
	<form action="core/handleForm.php?handler_id=<?php echo $_GET['handler_id']; ?>" method="POST">
		<div class="container">
			<p><strong>First Name:</strong> <?php echo $getHandlerById['first_name']; ?></p>
			<p><strong>Last Name:</strong> <?php echo $getHandlerById['last_name']; ?></p>
			<p><strong>Email:</strong> <?php echo $getHandlerById['email']; ?></p>
			<p><strong>Phone Number:</strong> <?php echo $getHandlerById['phone_number']; ?></p>
			<p><strong>Expertise:</strong> <?php echo $getHandlerById['expertise']; ?></p>
			<p><strong>Date Added:</strong> <?php echo $getHandlerById['date_added']; ?></p>
			<input type="submit" name="deleteHandlerBtn" value="Delete">
		</div>
	</form>
</body>
</html>