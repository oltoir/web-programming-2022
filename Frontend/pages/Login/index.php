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
          <h2 class="main-card__title">Введите имя пользователя и пароль</h2>
        </div>
        <div class="main-card__content">
          <div class="input-field" icon="user">
            <div class="input-field__wrapper">
              <form action="index.php" method="POST">
                <input class="input-field__input" type="text" placeholder="Username" name="username" />
                <input class="input-field__input" type="password" placeholder="Password" name="password" />
                <input class="main-button" type="submit" name="submit" value="Далее" />
              </form>
            </div>
          </div>
          <a class="main-button--gray" href="../Registration/index.php">Нет аккаунта?</a>
          <div id="recaptcha-container"></div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

<?php
session_start();


if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  header("location: ../MainPage/index.php");
  exit;
}

$servername = "localhost";
$database = "mysql";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$username = $password = "";
$username_err = $password_err = $login_err = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty(trim($_POST["username"]))) {
    $username_err = "Please enter username.";
  } else {
    $username = trim($_POST["username"]);
  }
  if (empty(trim($_POST["password"]))) {
    $password_err = "Please enter your password.";
  } else {
    $password = trim($_POST["password"]);
  }

  if (empty($username_err) && empty($password_err)) {
    $req = "SELECT id, username, password FROM users WHERE username = ?";

    if ($stmt = mysqli_prepare($conn, $req)) {
      mysqli_stmt_bind_param($stmt, "s", $param_username);
      $param_username = $username;
      if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) == 1) {
          mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
          if (mysqli_stmt_fetch($stmt)) {
            if (password_verify($password, $hashed_password)) {
              session_start();
              $_SESSION["loggedin"] = true;
              $_SESSION["username"] = $username;
              $_SESSION["user_id"] = $id;
              $_SESSION["time"] = $_SERVER['REQUEST_TIME'];
              header("location: ../MainPage/index.php");
            } else {
              $login_err = "Invalid username or password.";
            }
          }
        } else {
          $login_err = "Invalid username or password.";
        }
      } else {
        echo "Oops! Something went wrong. Please try again later.";
      }
      mysqli_stmt_close($stmt);
    }
  }
  mysqli_close($conn);
}
?>