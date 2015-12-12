<?php

	// This script performs an INSERT query to add a record to the users table.
	$page_title = 'Pengalaman Kerja';
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
	
	if (empty($_POST['perusahaan'])) {
	$errors[] = 'You forgot to enter your first name.';
	} else {
	$pr = trim($_POST['perusahaan']);
	}

	// Check for a last name:
	if (empty($_POST['jabatan'])) {
	$errors[] = 'You forgot to enter your last name.';
	} else {
	$jb = trim($_POST['jabatan']);
	}

	// Check for an email address:
	if (empty($_POST['tahun'])) {
	$errors[] = 'You forgot to enter your email address.';
	} else {
	$th = trim($_POST['tahun']);
	}
	
	if (empty($errors)) { // If everything's OK.

	// Register the user in the database...
	//require ('../mysqli_connect.php'); // Connect to the db.
	$Koneksi = mysql_connect("localhost","root","");
	
	mysql_select_db("identitas", $Koneksi);
	// Make the query:
	mysql_query("INSERT INTO identitas.pekerjaan(nama,"."perusahaan, jabatan, tahun)". 
	"values ('$nm','$pr', '$jb', '$th')");
	$r = mysql_query ("SELECT * FROM pekerjaan"); // Run the query.
	if ($r) { // If it ran OK.

	// Print a message:
	echo '<h1>Thank you!</h1>
	<p> Penyimpanan Riwayat Pekerjaan Berhasil !</p><p><br /></p>
	<p>Terima Kasih Anda Telah Melakukan Registrasi di Web Kami </p><p><br /></p>
	<p>Sukses Selalu Untuk Kita Semua :-) </p><p><br /></p>';
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
	<h1>Isikan Data Pekerjaan Terakhir Anda</h1>
	<form action="pekerjaan.php" method="post">
	<p>Nama : <input type="text" name="nama" size="25" maxlength="20" value="<?php if (isset($_POST['nama'])) echo $_POST['nama']; ?>" /></p>
	<p>Nama Perusahaan : <input type="text" name="perusahaan" size="25" maxlength="25" value="<?php if (isset($_POST['perusahaan'])) echo $_POST['perusahaan']; ?>" /></p>
	<p>Jabatan: <input type="text" name="jabatan" size="30" maxlength="40" value="<?php if (isset($_POST['jabatan'])) echo $_POST['jabatan']; ?>" /></p>
	<p>Tahun: <input type="text" name="tahun" size="6" maxlength="6" value="<?php if (isset($_POST['tahun'])) echo $_POST['tahun']; ?>" /> </p>
	
	<p><input type="submit" name="submit" value="Simpan" /></p>
	</form>
	<?php 
	include ('includes/footer.html');
	?>