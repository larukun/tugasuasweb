<?php

	// This script performs an INSERT query to add a record to the users table.
	$page_title = 'Riwayat Pendidikan';
	include ('includes/header.html');

	// Check for form submission:
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$errors = array(); // Initialize an error array.

	// Check for a first name:
	if (empty($_POST['nama'])) {
	$errors[] = 'You forgot to enter your first name.';
	} else {
	$nm = trim($_POST['nama']);
	}
	
	if (empty($_POST['dasar'])) {
	$errors[] = 'You forgot to enter your first name.';
	} else {
	$d = trim($_POST['dasar']);
	}

	// Check for a last name:
	if (empty($_POST['menengah'])) {
	$errors[] = 'You forgot to enter your last name.';
	} else {
	$m = trim($_POST['menengah']);
	}

	// Check for an email address:
	if (empty($_POST['atas'])) {
	$errors[] = 'You forgot to enter your email address.';
	} else {
	$a = trim($_POST['atas']);
	}
	
	if (empty($_POST['tinggi'])) {
	$errors[] = 'You forgot to enter your email address.';
	} else {
	$t = trim($_POST['tinggi']);
	}

	
	if (empty($errors)) { // If everything's OK.

	// Register the user in the database...
	//require ('../mysqli_connect.php'); // Connect to the db.
	$Koneksi = mysql_connect("localhost","root","");
	
	mysql_select_db("identitas", $Koneksi);
	// Make the query:
	mysql_query("INSERT INTO identitas.pendidikan(nama,"."dasar, menengah, atas,tinggi)". 
	"values ('$nm','$d', '$m', '$a','$t' )");
	$r = mysql_query ("SELECT * FROM pendidikan"); // Run the query.
	if ($r) { // If it ran OK.

	// Print a message:
	echo '<h1>Thank you!</h1>
	<p> Anda berhasil melakukan pengisian Riwayat Pendidikan !</p><p><br /></p>
	<p>Untuk selanjutnya silahkan anda mengisi Form Pekerjaan !</p><p><br /></p>
	<p>Dengan cara memilih menu Pekerjaan </p><p><br /></p>';
	} else { // If it did not run OK.

	// Public message:
	echo '<h1>System Error</h1>
	<p class="error">You could not be registered due to a system error. '.
	'We apologize for any inconvenience.</p>';

	// Debugging message:
	//echo '<p>' mysql_error($Koneksi);
	} // End of if ($r) IF.
	mysql_close($Koneksi); // Close the database connection.

	// Include the footer and quit the script:
	include ('includes/footer.html');
	exit();
	} else { // Report the errors.
	echo '<h1>Error!</h1>
	<p class="error">The following error(s) occurred:<br />';
	}
	foreach ($errors as $msg) { // Print each error.
	echo " - $msg<br />\n";
	}

	echo '</p><p>Please try again.</p><p><br /></p>';
	 }// End of if (empty($errors)) IF.
	 // End of the main Submit conditional.
	?>
	<h1>Isikan Riwayat Pendidikan</h1>
	<form action="pendidikan.php" method="post">
	<p>Nama : <input type="text" name="nama" size="25" maxlength="20" value="<?php if (isset($_POST['nama'])) echo $_POST['nama']; ?>" /></p>
	<p>Pendidikan Dasar / SD : <input type="text" name="dasar" size="25" maxlength="25" value="<?php if (isset($_POST['dasar'])) echo $_POST['dasar']; ?>" /></p>
	<p>Pendidikan Menengah / SMP: <input type="text" name="menengah" size="30" maxlength="40" value="<?php if (isset($_POST['menengah'])) echo $_POST['menengah']; ?>" /></p>
	<p>Pendidikan Menengah Atas / SMA: <input type="text" name="atas" size="30" maxlength="60" value="<?php if (isset($_POST['atas'])) echo $_POST['atas']; ?>" /> </p>
	<p>Perguruan Tinggi: <input type="text" name="tinggi" size="30" maxlength="300" value="<?php if (isset($_POST['tinggi'])) echo $_POST['tinggi']; ?>" /></p>
	<p><input type="submit" name="submit" value="Simpan" /></p>
	</form>
	<?php 
	include ('includes/footer.html');
	?>