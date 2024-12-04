<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register-style.css">
    <title>Register</title>
</head>
<body>

<form name="register" action="action_register.php" method="post">
    <table>
        <tr>
            <td>نام<span>*</span></td>
            <td><input type="text" id="name" name="name"></td>
        </tr>
        <tr>
            <td>فامیل<span>*</span></td>
            <td><input type="text" id="family" name="family"></td>
        </tr>
        <tr>
            <td>نام کاربری<span>*</span></td>
            <td><input type="text" id="username" name="username"></td>
        </tr>
        <tr>
            <td>پست الکترونیکی<span>*</span></td>
            <td><input type="email" id="email" name="email"></td>
        </tr>
        <tr>
            <td>کدملی<span>*</span></td>
            <td><input type="text" id="ncode" name="ncode"></td>
        </tr>
        <tr>
            <td>شهر<span>*</span></td>
            <td>
                <select name="city" id="city">
                    <option value="تهران">تهران</option>
                    <option value="مشهد">مشهد</option>
                    <option value="اصفهان">اصفهان</option>
                    <option value="شیراز">شیراز</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>کد پستی<span>*</span></td>
            <td><input type="text" id="pcode" name="pcode" maxlength="10"></td>
        </tr>
        <tr>
            <td>توضیحات<span>*</span></td>
            <td><input type="text" id="description" name="description"></td>
        </tr>
        <td>
            <br><br>
        </td>
        <td>
            <button name="Submit">ثبت نام</button>
        </td>
    </table>
</form>
</body>
</html>