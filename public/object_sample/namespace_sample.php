<?php
namespace A;

class Fruit {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function introduce() {
        print '僕は名前空間AのFruit:' . $this->name .'です<br>';
    }

}

namespace B;

class Fruit {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function introduce() {
        print '僕は名前空間BのFruit:' . $this->name .'です<br>';
    }

}

// 名前空間Bの中でfruitクラスのインスタンスを作成する
$b_fruit = new Fruit('banana');
$b_fruit->introduce();

// 名前空間Bの中でAの名前空間のFruitクラスを使いたい場合は、名前空間を付与したクラス名（完全修飾クラス名）を利用する
$a_fruit = new \A\Fruit('apple');
$a_fruit->introduce();

namespace C;

use \A\Fruit;
// 名前空間Cの中で完全修飾クラス名を使わないで名前空間Aのクラスを使う時は、インポートする
$fruit = new Fruit('meron'); // 名前空間AのFruit
$fruit->introduce();