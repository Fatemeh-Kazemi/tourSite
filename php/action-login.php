<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

<?php session_start(); /* Starts the session */

echo "<p>کاربر گرامی ". $_SESSION['User']['Username']. " خوش آمدید</p>";
if(!isset($_SESSION['UserData']['Username'])){
    header("location:login.php");
    exit;
}
?>

<span>برای خروج کلیک کنید</span> <a href="logout.php">خارج شدن</a>

</body>
</html>