<?php
// class Fruits{
//     //properties
//     public $name;
//     public $color;
//     //Methods
//     function set_name($name)
//     {
//         $this->name = $name;
//     }
//     function get_name()
//     {
//         return $this->name;
//     }
// }
// $apple = new Fruits();
// $banana = new Fruits();
// $apple->set_name('Apple');
// $banana->set_name('Banana');
// echo $apple->get_name();
// echo "<br>";
// echo $banana->get_name();
 
//using constructor
// class Fruits
// {
//     public $name;
//     public $color;
//     function __construct($name)
//     {
//         $this->name = $name;
//     }
//     function getName()
//     {
//         return $this->name;
//     }

// }
// $apple = new Fruits("orange");
// echo $apple->getName();

//Access specifier
class Fruits
{
    public $name;
    public $color;
    public $weight;
    function SetName($n) //public function defalut
    {
        $this->name = $n;
    }
    protected function SetColor($c)
    {
        $this->color=$n;
    }
    private function SetWeight($w)
    {
        $this->weight = $w;
    }
}

$mango = new Fruits();
$mango->SetName('Mango');
//$mango->SetColor('yellow');
//$mango->SetWeight('300');

?>
if($a>10&&b>10)
{
    body
}
else if($a>10||$a>0)
{
    body
}
else if(a!=10||b==10)
{
    
}
else
{
    body
}