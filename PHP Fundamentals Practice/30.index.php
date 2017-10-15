<?php include 'header.php'; ?>
<?php

	$name = $email = $website = $comment = $gender = "";
	$errname = $erremail = $errweb = $errgender = "";

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		if(empty($_POST['name'])){
			$errname = "<span style='color:red'>Name is required.</span>";
		}else{
			$name = validate($_POST['name']);
		}

		if(empty($_POST['email'])){
			$erremail = "<span style='color:red'>E-mail is required.</span>";
		}elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
				$erremail = "<span style='color:red'>Invalid E-mail format.</span>";
		}else{
			$email = validate($_POST['email']);
		}

		if(empty($_POST['website'])){
			$errweb = "<span style='color:red'>Website is required.</span>";
		}elseif(!filter_var($_POST['website'], FILTER_VALIDATE_URL)){
			$errweb = "<span style='color:red'>Invalid Web Address.</span>";
		}else{
			$website = validate($_POST['website']);
		}

		if(empty($_POST['gender'])){
			$errgender = "<span style='color:red'>Gender is required.</span>";
		}else{
			$gender = validate($_POST['gender']);
		}

		$comment = validate($_POST['comment']);

	}

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
	<table>
		<p style="color: red">* required field</p>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"> * <?php echo $errname; ?></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td><input type="text" name="email"> * <?php echo $erremail; ?></td>
		</tr>
		<tr>
			<td>Website</td>
			<td><input type="text" name="website"> * <?php echo $errweb; ?></td>
		</tr>
		<tr>
			<td>Comments</td>
			<td><textarea name="comment" id="" cols="30" rows="5"></textarea></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="mmale">Male * <?php echo $errgender; ?>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Submit"></td>
		</tr>
	</table>
</form>

<?php
	echo "Name: "    . $name . "<br>";
	echo "E-mail: "  . $email . "<br>";
	echo "Website: " . $website . "<br>";
	echo "Comment: " . $comment . "<br>";
	echo "Gender: "  . $gender . "<br>";
?>

<?php include 'footer.php'; ?>