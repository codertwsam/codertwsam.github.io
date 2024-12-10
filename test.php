<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 獲取 textarea 中的數據
    $message = htmlspecialchars($_POST['message']);

    // 顯示數據
    echo "<h2>您提交的消息:</h2>";
    echo "<p>" . nl2br($message) . "</p>";
} else {
    echo "未通過 POST 方法提交數據。";
}
?>

