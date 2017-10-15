<?php include 'header.php'; ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" required></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Website</td>
			<td><input type="text" name="website"></td>
		</tr>
		<tr>
			<td>Comments</td>
			<td><textarea name="comment" id="" cols="30" rows="5"></textarea></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="mmale">Male
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Submit"></td>
		</tr>
	</table>
</form>

<?php

$name = $email = $website = $comment = $gender = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$name    = validate($_POST['name']);
	$email   = validate($_POST['email']);
	$website = validate($_POST['website']);
	$comment = validate($_POST['comment']);
	$gender  = validate($_POST['gender']);

	echo "Name: "    . $name . "<br>";
	echo "E-mail: "  . $email . "<br>";
	echo "Website: " . $website . "<br>";
	echo "Comment: " . $comment . "<br>";
	echo "Gender: "  . $gender . "<br>";

}

function validate($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>

<?php include 'footer.php'; ?>