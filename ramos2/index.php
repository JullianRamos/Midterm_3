<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PC Handler Registration</title>
	<style>
		body {
			font-family: "Arial", sans-serif;
		}
		input {
			font-size: 1.2em;
			height: 40px;
			width: 250px;
		}
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 8px;
			text-align: left;
		}
		th {
			background-color: #f2f2f2;
		}
		.actions a {
			margin-right: 10px;
		}
	</style>
</head>
<body>
	<h3>Welcome to the PC Handler Management System. Input your details here to register</h3>
	<form action="core/handleForm.php" method="POST">
		<p><label for="firstName">First Name</label> <input type="text" name="firstName" required></p>
		<p><label for="lastName">Last Name</label> <input type="text" name="lastName" required></p>
		<p><label for="email">Email</label> <input type="email" name="email" required></p>
		<p><label for="phone_number">Phone Number</label> <input type="text" name="phone_number" required></p>
		<p><label for="expertise">Expertise</label> <input type="text" name="expertise" required></p>
		<p><label for="date_added">Date Added</label> <input type="date" name="date_added" required></p>
		<p><input type="submit" name="insertNewHandlerBtn" value="Register"></p>
	</form>

	<table style="width:100%; margin-top: 20px;">
		<tr>
			<th>Handler ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Phone Number</th>
			<th>Expertise</th>
			<th>Date Added</th>
			<th>Action</th>
		</tr>

		<?php $handlers = seeAllHandlerRecords($pdo); ?>
		<?php foreach ($handlers as $handler) { ?>
		<tr>
			<td><?php echo htmlspecialchars($handler['handler_id']); ?></td>
			<td><?php echo htmlspecialchars($handler['first_name']); ?></td>
			<td><?php echo htmlspecialchars($handler['last_name']); ?></td>
			<td><?php echo htmlspecialchars($handler['email']); ?></td>
			<td><?php echo htmlspecialchars($handler['phone_number']); ?></td>
			<td><?php echo htmlspecialchars($handler['expertise']); ?></td>
			<td><?php echo htmlspecialchars($handler['date_added']); ?></td>
			<td class="actions">
				<a href="edithandler.php?handler_id=<?php echo $handler['handler_id'];?>">Edit</a>
				<a href="deletehandler.php?handler_id=<?php echo $handler['handler_id'];?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>