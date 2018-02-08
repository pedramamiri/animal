<?php session_start(); if($_POST['test']){session_destroy(); header('Location: http://localhost:1337/settings.php');}  ?>
<!DOCTYPE html>
<html>
<head>
<title>Animal</title>
<style>

</style>
</head>
<body>
<?php
if(!$_SESSION){
    $_SESSION=$_GET;
}
if(!$_GET){
    $_GET=$_SESSION;
}
abstract class natur{
    public $name; 
    public $quan; 

    public function __construct($newName, $newQuan) {
        $this->setSpec($newName, $newQuan);
    }
    
    public function setSpec($newName, $newQuan) {
        $this->name = $newName;
        $this->quan = $newQuan;
    }
    abstract public function onclick();
    public function setPhoto(){
        if($this->name){
            for($i=0;$i<$this->quan;$i++){
              echo "<img style='margin: 40px; width: 150px; height: 150px;' src= '".$this->image."' onclick='".$this->onclick()."'  />";
            } 
        }
    }
}

class animal extends natur {
    public function onclick(){
        return  'alert("'.$this->sound.'")';
    }  
}


class plant extends natur {
    public function onclick(){
        return  'alert("this has not sound!!!")';
    }  
}


class apor extends animal {  
    protected $image = './apa.jpg';
    protected $sound = 'Ooh ooh ahh ahh';   
}
class giraffer extends animal {
    protected $image = './giraff.jpg';
    protected $sound = 'aaa aaa aaaaaaa';
   
}
class tigrar extends animal {
    protected $image = './tiger.jpg';
    protected $sound = 'grrrrrrrrrrr';
}


class kokosnöt extends plant {
    protected $image = './Kokosnot.png';
}

$myApor = new apor($_GET['anim1'],$_GET['quantity1'] );
$myGiffer = new giraffer($_GET['anim2'],$_GET['quantity2'] );
$myTigrar = new tigrar($_GET['anim3'],$_GET['quantity3'] );
$mykokosnöt = new kokosnöt($_GET['anim4'],$_GET['quantity4'] );

$myApor->setPhoto();
$myGiffer->setPhoto();
$myTigrar->setPhoto();
$mykokosnöt->setPhoto();

?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <input type="submit" name="test" id="test" value="delete allt" /><br/>
</form>



</form>
</body>
</html>
