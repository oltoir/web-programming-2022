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
                <input class="input-field__input" type="password" placeholder="Your password again" name="confirm_password" />
                <input class="main-button" type="submit" name="submit" value="Зарегистрировать" />
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

$servername = "localhost";
$database = "mysql";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty(trim($_POST["username"]))) {
    $username_err = "Please enter a username.";
  } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
    $username_err = "Username can only contain letters, numbers, and underscores.";
  } else {
    $req = "SELECT id FROM users WHERE username = ?";

    if ($stmt = mysqli_prepare($conn, $req)) {
      mysqli_stmt_bind_param($stmt, "s", $param_username);
      $param_username = trim($_POST["username"]);
      if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
          $username_err = "This username is already taken.";
        } else {
          $username = trim($_POST["username"]);
        }
      } else {
        echo "Oops! Something went wrong. Please try again later.";
      }

      mysqli_stmt_close($stmt);
    }
  }

  if (empty(trim($_POST["password"]))) {
    $password_err = "Please enter a password.";
  } elseif (strlen(trim($_POST["password"])) < 8) {
    $password_err = "Password must have atleast 8 characters.";
  } else {
    $password = trim($_POST["password"]);
  }

  if (empty(trim($_POST["confirm_password"]))) {
    $confirm_password_err = "Please confirm password.";
  } else {
    $confirm_password = trim($_POST["confirm_password"]);
    if (empty($password_err) && ($password != $confirm_password)) {
      $confirm_password_err = "Password did not match.";
    }
  }

  if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

    $req = "INSERT INTO users (username, password) VALUES (?, ?)";

    if ($stmt = mysqli_prepare($conn, $req)) {
      mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
      $param_username = $username;
      $param_password = password_hash($password, PASSWORD_DEFAULT);
      if (mysqli_stmt_execute($stmt)) {
        header("location: ../Login/index.php");
      } else {
        echo "Oops! Something went wrong. Please try again later.";
      }
      mysqli_stmt_close($stmt);
    }
  } else {
    echo $username_err;
    echo $password_err;
    echo $confirm_password_err;
  }
  mysqli_close($conn);
}
?>