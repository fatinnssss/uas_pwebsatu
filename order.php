<?php
session_start();
include 'koneksi.php';
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
$namaproduk= $_POST['namaproduk'];
$hargaproduk= $_POST['hargaproduk'];
$pembayaran=$_POST['pembayaran'];

$query = mysqli_query($conn, "INSERT INTO transaksi (username, email, namaproduk, hargaproduk, pembayaran) VALUES ('$username', '$email',  '$namaproduk', '$hargaproduk', '$pembayaran')");

if($query) {
			echo '<script>alert("Order Pemesanan Berhasil");
			location.href="index.php"</script>';
	  	}else {
			echo '<script>alert("Register Gagal")</script>';
	  	}

}
?>
< !DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Beautiful Bootstrap Contact Form with Gradient Background</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
html, body {
	min-height: 100%;
}
body {
	background: #ff5e63; /* Fallback for browsers that don't support gradients */
	font-family: "Varela Round", sans-serif;
	background: linear-gradient(#ff9968, #ff5e63)  no-repeat;
}
.form-control {
	border-color: #d7d7d7;
	box-shadow: none;
}
.form-control:focus, .btn:focus {
	border-color: #a177ff;
	box-shadow: 0 0 8px #c2a8ff;
}
.contact-form {
	width: 500px;   
	margin: 0 auto;
	padding: 40px 0;
}
.contact-form form {
	background: #fff;
	padding: 40px;
	border-radius: 6px;
}
.contact-form h1 {
	text-align: center;
	font-size: 50px;
	margin: 0 0 15px;
}
.contact-form .form-group {
	margin-bottom: 20px;
}
.contact-form .form-control, .contact-form .btn  {        
	border-radius: 2px;
	min-height: 40px;
	transition: all 0.5s;
	outline: none;
}
.contact-form .btn {
	background: #a177ff;
	font-size: 16px;
	min-height: 50px;
	border: none;
}
.contact-form .btn:hover, .contact-form .btn:focus {
	background: #8048ff;
	outline: none;
}
.contact-form .btn i {
	margin-right: 5px;
}
.contact-form label {
	color: #bbb;
	font-weight: normal;
}
.contact-form textarea {
	resize: vertical;
}
.hint-text {
	font-size: 15px;
	text-align: center;
	padding-bottom: 25px;
	opacity: 0.8;
}
</style>
</head>
<body>
<div class="contact-form">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<h1>ORDER KNOW </h1>
			<p class="hint-text">FATIN STORE </p>
			<div class="form-group">
				<label for="inputusername">Username</label>
				<input type="text" class="form-control" id="inputusername" name="username" required>
			</div>
			<div class="form-group">
				<label for="inputEmail">Email Address</label>
				<input type="email" class="form-control" id="inputEmail" name="email" required>
			</div>
			<div class="form-group">
				<label for="inputNamaproduk">Nama Produk</label>
				<input type="text" class="form-control" id="inputNamaproduk" name="namaproduk" required>
			</div>
			<div class="form-group">
				<label for="inputHargaproduk">Harga Produk</label>
				<input type="text" class="form-control" id="inputHargaproduk" name="hargaproduk" required>
			</div>
			<div class="form-group">
				<label for="inputPembayaran">Pembayaran</label>
				<textarea class="form-control" id="inputPembayaran" name="pembayaran" rows="5" required></textarea>
			</div>

			<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i> Send Message</button>
		</form>

</div>
</body>
</html>