<?php  

if (isset($_GET['handlerName'])) {
	echo "<h2>PC Handler Name: " . htmlspecialchars($_GET['handlerName']) . "</h2>";
}

if (isset($_GET['expertise'])) {
	echo "<h2>Expertise: " . htmlspecialchars($_GET['expertise']) . "</h2>";
}

if (isset($_GET['email'])) {
	echo "<h2>Email: " . htmlspecialchars($_GET['email']) . "</h2>";
}

if (isset($_GET['phone_number'])) {
	echo "<h2>Phone Number: " . htmlspecialchars($_GET['phone_number']) . "</h2>";
}
?>