<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../../assets/main.css" />
	<title>Choco</title>
</head>

<body style="background-color: white">
	<div class="login__container">
		<div>
			<img itemprop="logo" src="https://www.chocotravel.com/media/v3/media/images/chocotravel-logo.svg" width="273" height="51" alt="Chocotravel.com" title="Авиабилеты дешево онлайн" style="margin-bottom: 20px" />
			<div class="login__card">
				<div class="main-card__header">
					<h2 class="main-card__title">Мои бронирования</h2>
				</div>
				<div class="main-card__content">
					<div class="input-field" icon="user">
						<div class="input-field__wrapper">
							<form action="index.php" method="POST">
								<input class="input-field__input" type="text" placeholder="Flight ID" name="flight_id" />
								<input class="input-field__input" type="text" placeholder="Card number" name="card_number" />
								<input class="input-field__input" type="text" placeholder="Expiration month" name="exp_month" />
								<input class="input-field__input" type="text" placeholder="Expiration year" name="exp_year" />
								<input class="input-field__input" type="text" placeholder="Holder name" name="holder_name" />
								<input class="input-field__input" type="password" placeholder="CVV" name="cvv" />
								<input class="main-button" type="submit" name="submit" value="Подтвердить бронирование" />
							</form>
						</div>
					</div>
					<div id="recaptcha-container"></div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>

<?php
session_start();
if (!isset($_SESSION['ttl'])) {
	$_SESSION["ttl"] = $_SERVER['REQUEST_TIME'];
}
$tz = 'Asia/Omsk';
$timestamp = $_SESSION["ttl"];
$timesLoggedIn = time() - $timestamp - 6 * 60 * 60;
$dtLI = new DateTime("now", new DateTimeZone($tz));
$dtLI->setTimestamp($timesLoggedIn);
// echo "<h1>Logged in for: " . $dtLI->format('H:i:s') . "</h1> <br>";

if ($timesLoggedIn + 6 * 60 * 60 >= 60) {
	unset($_SESSION["ttl"]);
	header("Location: ../MainPage/index.php");
	exit;
}

$servername = "localhost";
$database = "mysql";
// print_r($_SESSION);
$username = "root";
$password = "";
$month = 12;
$year = 22;
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST["submit"])) {
	$ok = true;
	if (!preg_match("/^\d{16}$/", $_POST['card_number']) && !preg_match("/^\d{4}-\d{4}-\d{4}-\d{4}$/", $_POST['card_number'])) {
		echo "Invalid card number<br>";
		$ok = false;
	}
	if (intval($_POST['exp_year']) < $year) {
		echo "Card is out of date<br>";
		$ok = false;
	}
	if (intval($_POST['exp_year']) == $year && intval($_POST['exp_month']) < $month) {
		echo "Card is out of date<br>";
		$ok = false;
	}
	if (intval($_POST['cvv']) < 100 || intval($_POST['cvv']) > 999) {
		echo "Wrong CVV<br>";
		$ok = false;
	}
	if ($ok) {
		$req = "INSERT INTO bookings (flight_id, user_id) VALUES (?, ?)";
		if ($stmt = mysqli_prepare($conn, $req)) {
			mysqli_stmt_bind_param($stmt, "ss", $_POST['flight_id'], $_SESSION['user_id']);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_close($stmt);
		}
		$req = "UPDATE users SET bonuses = bonuses + 5000 WHERE id = " . $_SESSION['user_id'];
		if ($stmt = mysqli_prepare($conn, $req)) {
			if (mysqli_stmt_execute($stmt)) {
				header("location: ../MainPage/index.php");
			}
			mysqli_stmt_close($stmt);
		}
		mysqli_close($conn);
	}
}
?>