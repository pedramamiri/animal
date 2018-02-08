<!DOCTYPE html>
<html>
<head>
<title>Animal</title>
</head>
<body>
<?php
abstract class animal {
    public $anim; 
    public $quan; 

    public function __construct($newAnim, $newQuan) {
        $this->setMyAnim($newAnim, $newQuan);
    }
    
    public function setMyAnim($newAnim, $newQuan) {
        $this->anim = $newAnim;
        $this->quan = $newQuan;
    }
    abstract public function makeSound();
    
    public function setPhoto(){
        echo "<img style='margin: 40px; width: 150px; height: 150px;' src= '".$this->image."' onclick='".$this->makeSound()."'  />";
    }

}
class apor extends animal {
    protected $image = './apa.jpg';
    protected $sound = 'Ooh ooh ahh ahh';
    public function makeSound() {
        return  'alert("'.$this->sound.'")';
    }
}
class giraffer extends animal {
    protected $image = './giraff.jpg';
    protected $sound = 'aaa aaa aaaaaaa';
    public function makeSound() {
        return  'alert("'.$this->sound.'")';
    }
    
}
class tigrar extends animal {
    protected $image = './tiger.jpg';
    protected $sound = 'grrrrrrrrrrr';
    public function makeSound() {
        return  'alert("'.$this->sound.'")';
    }
    
}
class kamel extends animal {
    protected $image = './kamel.jpg';
    protected $sound = 'baaaaaaaaaa';
    public function makeSound() {
        return  'alert("'.$this->sound.'")';
    }
    
}
$myApor = new apor($_GET['anim1'],$_GET['quantity1'] );
$myGiffer = new giraffer($_GET['anim2'],$_GET['quantity2'] );
$myTigrar = new tigrar($_GET['anim3'],$_GET['quantity3'] );
$myKamel = new kamel($_GET['anim4'],$_GET['quantity4'] );

if($_GET['anim1']){
    for($i=0;$i<$_GET['quantity1'];$i++){
        $myApor->setPhoto();
    }
}
if($_GET['anim2']){
    for($i=0;$i<$_GET['quantity2'];$i++){
        $myGiffer->setPhoto();
    }
}
if($_GET['anim3']){
    for($i=0;$i<$_GET['quantity3'];$i++){
        $myTigrar->setPhoto();
    }
}
if($_GET['anim4']){
    for($i=0;$i<$_GET['quantity4'];$i++){
        $myKamel->setPhoto();
    }
}

?>
</body>
</html>