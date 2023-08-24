<!DOCTYPE html>
<html>

<head>
	<title>Web Dinamis</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="content">
		<header>
			<h1 class="judul">SMK Wikrama Bogor</h1>
			<h3 class="deskripsi">Membuat Halaman Web Dinamis Dengan PHP</h3>
		</header>
		<div class="menu">
			<ul>
				<li><a href="index.php?page=home">Beranda</a></li>
				<li><a href="index.php?page=tentang">Tentang</a></li>
				<li><a href="index.php?page=kontak">Kontak</a></li>

				<div class="menu2">
					<li><a href="index.php?page=login">Signin</a></li>
					<li><a href="index.php?page=register">Signup</a></li>
				</div>
			</ul>
			<style>
				.menu2 {
					margin-left: 80%;
				}
			</style>
		</div>
		<div class="badan">
			<?php
			if (isset($_GET['page'])) {
				$page = $_GET['page'];

				switch ($page) {
					case 'home':
						include "home.php";
						break;
					case 'tentang':
						include "tentang.php";
						break;
					case 'kontak':
						include "kontak.php";
						break;
					case 'login':
						include "login.php";
						break;
					case 'register':
						include "register.php";
						break;
					default:
						echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
						break;
				}
			} else {
				include "home.php";
			}
			?>
		</div>
	</div>
</body>

</html>