<?php

//継承

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

//Animalクラスの継承
class Cat extends Animal
{
    private $cry;

    public function isCry($cry)
    {
        $this->cry = $cry;

        return $this->cry;
    }
}

?>

<?php

//変数
$type = 'ネコ';
$name = 'タマ';
$age = 3;

$cry = 'にゃー';

//Catクラスのオブジェクト化
$cat = new Cat($type,$name,$age);

$Type = $cat->isType();
$Name = $cat->isName();
$Age = $cat->isAge();

$Cry = $cat->isCry($cry);

echo '種類：'. $Type.'<br>';
echo '名前：'. $Name.'<br>';
echo '年齢：'. $Age. '<br>';
echo '鳴き声：'. $Cry. '<br>';