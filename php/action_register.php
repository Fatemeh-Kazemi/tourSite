<html lang="en" dir="rtl">
<?php

session_start();
date_default_timezone_set("Asia/Tehran");
echo "<p style='color: #0a53be; text-align: center'>". date("h:i:sa"). "</p></br>";

try {
    $status = false;

    if (isset($_POST['name']) && !empty($_POST['name']) &&
        isset($_POST['family']) && !empty($_POST['family']) &&
        isset($_POST['username']) && !empty($_POST['username']) &&
        isset($_POST['email']) && !empty($_POST['email']) &&
        isset($_POST['ncode']) && !empty($_POST['ncode']) &&
        isset($_POST['city']) && !empty($_POST['city']) &&
        isset($_POST['pcode']) && !empty($_POST['pcode']) &&
        isset($_POST['description']) && !empty($_POST['description'])){
        $name = $_POST['name'];
        $family = $_POST['family'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $ncode = $_POST['ncode'];
        $city = $_POST['city'];
        $pcode = $_POST['pcode'];
        $description = $_POST['description'];

        $status = true;
    } else
        exit("برخی از فیلدها مقداردهی نشده است.");

    echo ("نام:". $name . "</br>");

    if (mb_strlen($family) >= 20)
        echo ("فامیل:". $family . "</br>");
    else
        echo ("فامیل باید حداقل 20 کاراکتر باشد". "</br>");

    if(_check_username($username) === true)
        echo ("نام کاربری:". $username . "</br>");
    else
        echo ("نام کاربری وارد شده صحیح نیست". "</br>");

    echo ("ایمیل:". $email . "</br>");

    if(_custom_check_national_code($ncode) === true)
        echo ("کد ملی:". $ncode . "</br>");
    else
        echo ("کد ملی وارد شده صحیح نیست". "</br>");

    echo ("شهر:". $city . "</br>");

    if (mb_strlen($pcode) >= 10)
        echo ("کد پستی:". $pcode . "</br>");
    else
        echo ("کد پستی باید حداقل 10 کاراکتر باشد". "</br>");

    echo ("توضیحات:". $description . "</br>");

} catch (Exception $er) {
    exit ($er);
}
?>
<?php

function _check_username($u){
    if(preg_match('/([a-z][A-Z][0-9])/', $u))
            return true;
    else
        return false;
}


function _custom_check_national_code($code){
    if(preg_match('/^(?!(\d)\1{9})\d{10}$/',$code))
        return true;
    else
        return false;
}
?>

</html>