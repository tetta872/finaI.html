<?php
    if ($_POST["id"] == "tony" && $_POST["pwd"] == "1234") {
        echo "歡迎登入，Tony！"; // 登入成功的訊息
    } else {
        echo "登入失敗，請檢查帳號和密碼。"; // 登入失敗的訊息
    }
?>

