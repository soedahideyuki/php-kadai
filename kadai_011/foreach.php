<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP11章課題</title>
</head>
<body>
  <?php
  $shops = ['名前' => '玉ねぎ','値段' => 200, '産地' => '北海道'];
  foreach($shops as $key=>$value){
    echo "{$key}:{$value}<br>";
  }
  ?>
</body>
</html>