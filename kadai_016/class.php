<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP16章課題</title>
</head>
<body>
  <?php
  class Food{
    private $name;
    private $price;

    public function show_price(){
      echo $this->price . '<br>';
    }

    public function __construct(string $name, int $price){
      $this->name = $name;
      $this->price = $price;
    }
  }

  class Animal{
    private $name;
    private $height;
    private $weight;

    public function show_height(){
      echo $this->height . '<br>';
    }

    public function __construct(string $name, string $height, string $weight){
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }
  }

  $orange = new Food('オレンジ', 200);
  $orange ->show_price();
  print_r($orange);

  echo '<br>';

  $dog = new Animal('犬','100cm', '1kg');
  $dog -> show_height();
  print_r($dog);
  ?>
</body>
</html>