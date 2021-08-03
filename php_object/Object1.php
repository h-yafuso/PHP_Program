<?php

//インスタンスとオブジェクト

Class Animal{

    //プロパティまたはフィールド
    private $type;
    private $name;
    private $age;

    //コンストラクタ
    public function __construct($type,$name,$age)
    {
        $this->type = $type;
        $this->name = $name;
        $this->age = $age;
    }

    //メソッド
    public function isType()
    {
        return $this->type;
    }

    public function isName()
    {
        return $this->name;
    }

    public function isAge()
    {
        return $this->age;
    }
}
?>

<?php

//変数
$type = 'サル';
$name = 'おさむ';
$age = 3;

//Animalクラスのオブジェクト化
$monkey = new Animal($type,$name,$age);

$Type = $monkey->isType();
$Name = $monkey->isName();
$Age = $monkey->isAge();

echo '種類：'. $Type.'<br>';
echo '名前：'. $Name.'<br>';
echo '年齢：'. $Age. '<br>';

