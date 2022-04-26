<?php

class Car //Carクラス
{
  //プロパティ
  public $color;
  public $price;
  public $color1;
  public $price1;

  //メソッド
  public function start()
  { //発進
    echo '発進します';
  }
  public function stop()
  { //停止
    echo '停止します';
  }
  public function detail($color1, $price1)
  {
    echo '色は' . $color1 . 'で' . '値段は' . $price1 . 'です。';
  }
}

// 上記の設計図（車のクラス）を使って個々の車を作る→クラスを元に作るオブジェクトをインスタンス
$car1 = new Car();
$car2 = new Car();
//2台の車ができた 色や値段を。インスタンスのプロパティにアクセスするには->演算子を使う
$color1 = $car1->color = 'red';
$price1 =  $car1->price = '1000';

$car2->color = 'blue';
$car2->price = '2000';
//車を走らせてみる
// メソッドを実行するのもプロパティと同じ->演算子を使う
$car1->start();
$car1->detail($color1, $price1);
