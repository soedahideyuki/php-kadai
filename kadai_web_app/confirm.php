<?php
$name = $_POST['employee_name'];
$age = $_POST['employee_age'];
$department = $_POST['department'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHPweb課題</title>
</head>
<body>
  <h2>入力内容をご確認ください</h2>
  <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

  <table border="1">
    <tr>
      <td>社員名</td>
      <td><?php echo $name;?></td>
    </tr>
    <tr>
      <td>年齢</td>
      <td><?php echo $age;?></td>
    </tr>
    <tr>
      <td>所属部署</td>
      <td><?php echo $department;?></td>
    </tr>
  </table>
  <p>
    <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
    <button id="cancel-btn" onclick="history.back();">キャンセル</button>
  </p>
</body>
</html>