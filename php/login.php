<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/register-style.css">
    <title>Login</title>
</head>
<body>

<form action="" method="post" name="Login_Form">
    <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
        <?php if (isset($msg)) { ?>
            <tr>
                <td colspan="2" align="center" valign="top"><?php echo $msg; ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
        </tr>
        <tr>
            <td align="right" valign="top">نام کاربری</td>
            <td><input name="Username" type="text" class="Input"></td>
        </tr>
        <tr>
            <td align="right">گذرواژه</td>
            <td><input name="Password" type="password" class="Input"></td>
        </tr>
        <tr>
            <td></td>
            <td><button name="Submit" class="Button3">ورود</button></td>
        </tr>
    </table>
</form>

<?php
$_SESSION['failed-login'] = 0;
session_start(); /* Starts the session */


/* Check Login form submitted */
if (isset($_POST['Submit'])) {
    /* Define username and associated password array */
    $logins = array('Admin' => '1234', 'user1' => 'password1', 'user2' => 'password2');

    /* Check and assign submitted Username and Password to new variable */
    $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';


    /* Check Username and Password existence in defined array */
    if (isset($logins[$Username]) && $logins[$Username] == $Password) {
        /* Success: Set session variables and redirect to Protected page  */
        $_SESSION['UserData']['Username'] = $logins[$Username];
        $_SESSION['User']['Username'] =$Username;
        header("location:action-login.php");
        exit;
    } else {
        /*Unsuccessful attempt: Set error message */
        echo "<p style='color:red; text-align: center'>ورود نامعتبر است</p>";
        if (!isset($_SESSION['failed-login'])) {
            $_SESSION['failed-login']=0;
        }
        $_SESSION['failed-login'] += 1;
        echo "<p style='color:red; text-align: center'>تعداد دفعات ورود ناموفق:" . $_SESSION['failed-login'] . "</p>";
    }
}
?>

</body>
</html>
