<?php include 'header.php'; ?>

<!-- <table>
	<tr>
		<td>Filter Name</td>
		<td>Filter ID</td>
	</tr>
	<?php
		// foreach (filter_list() as $id => $filter) {
		// 	echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
		//}
	?>
</table> -->

<?php
	// $str = "<h2>I am Learning PHP.</h2>";
	// $newstr = filter_var($str, FILTER_SANITIZE_STRING);
	// echo $newstr; 

	// $int = 50.6;
	// if (filter_var($int, FILTER_VALIDATE_INT)) {
	// 	echo "It is Integer Value.";
	// }else {
	// 	echo "It is not Integer Value.";
	// }

	// $ip = "127.0.0.1";
	// if (filter_var($ip, FILTER_VALIDATE_IP)) {
	// 	echo "$ip is valid IP Address.";
	// }else {
	// 	echo "$ip is not valid IP Address.";
	// }

	// $mail = "shakirahmad84@gmail.com";
	// if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
	// 	echo "$mail is valid Email Address.";
	// }else {
	// 	echo "$mail is not valid Email Address.";
	// }

	$url = "https://shakirahmad.com";
	if (filter_var($url, FILTER_VALIDATE_URL)) {
		echo "$url is valid Website Address.";
	}else {
		echo "$url is not valid Website Address.";
	}
?>

<?php include 'footer.php'; ?>