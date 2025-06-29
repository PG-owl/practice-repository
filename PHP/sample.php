<!-- 1. PHPコードの基本構造 -->
<?php
// ここにPHPコードを書きます
echo "Hello, world!"; // 画面に「Hello, world!」と表示する
?>

<!-- 2. 変数とデータ型 -->
<?php
$name = "山田太郎"; // 文字列 (String)
$age = 30; // 整数 (Integer)
$height = 175.5; // 浮動小数点数 (Float/Double)
$isStudent = true; // 論理値 (Boolean)
$colors = ["red", "green", "blue"]; // 配列 (Array)
$person = new stdClass(); // オブジェクト (Object)
$person->name = "鈴木花子";

echo "名前: " . $name . ", 年齢: " . $age . "歳<br>";
echo "好きな色: " . $colors[0] . "<br>";
?>

<!-- 制御構造 -->
<!-- 条件分岐 (if, else if, else) -->
<?php
$score = 85;

if ($score >= 90) {
    echo "A判定です。<br>";
} elseif ($score >= 70) {
    echo "B判定です。<br>";
} else {
    echo "C判定です。<br>";
}

// 三項演算子 (簡潔な条件分岐)
$status = ($score >= 60) ? "合格" : "不合格";
echo "結果: " . $status . "<br>";
?>

<!-- 繰り返し (for, while, foreach) -->
<?php
// forループ
for ($i = 0; $i < 5; $i++) {
    echo "カウント: " . $i . "<br>";
}

// whileループ
$count = 0;
while ($count < 3) {
    echo "Whileカウント: " . $count . "<br>";
    $count++;
}

// foreachループ (配列の要素を順に処理するのに最適)
$fruits = ["apple", "banana", "cherry"];
foreach ($fruits as $fruit) {
    echo "果物: " . $fruit . "<br>";
}

// キーと値の両方を取得する場合
foreach ($fruits as $key => $fruit) {
    echo "インデックス " . $key . ": " . $fruit . "<br>";
}
?>

<!-- 4. 関数 -->
<?php
// 引数なし、戻り値なしの関数
function sayHello() {
    echo "こんにちは！<br>";
}
sayHello(); // 関数の呼び出し

// 引数あり、戻り値ありの関数
function addNumbers($num1, $num2) {
    $sum = $num1 + $num2;
    return $sum; // 結果を返す
}
$result = addNumbers(10, 20);
echo "合計: " . $result . "<br>";

// デフォルト引数
function greet($name = "ゲスト") {
    echo "ようこそ、" . $name . "さん！<br>";
}
greet(); // デフォルト引数が使われる
greet("田中");
?>

<!-- 5. オブジェクト指向プログラミング (OOP) の基礎 -->
<?php
class Car {
    // プロパティ
    public $brand;
    public $model;

    // コンストラクタ (オブジェクト生成時に自動的に実行されるメソッド)
    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
        echo $brand . "の" . $model . "が作られました。<br>";
    }

    // メソッド
    public function drive() {
        echo $this->brand . "の" . $this->model . "が走行しています。<br>";
    }
}

// オブジェクトの生成
$myCar = new Car("トヨタ", "プリウス");
$anotherCar = new Car("ホンダ", "フィット");

// メソッドの呼び出し
$myCar->drive();
$anotherCar->drive();

// プロパティへのアクセス
echo "私の車のブランドは " . $myCar->brand . "です。<br>";
?>