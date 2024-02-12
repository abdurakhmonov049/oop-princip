<?php 

class myPassport{
    private $name;
    private $last_name;
    private $idNumber;
    private $JShSHR;
    private $birthday;

    public function setName($name){
        $this->name = $name;}
    
    public function getName(){
        return "My name is " . $this->name; 
    }
    public function setlast_name($last_name){
        $this->last_name = $last_name;}
    
    public function getlast_name(){
        return "My last_name is " . $this->last_name; 
    }
    public function setidNumber($idNumber){
        $this->idNumber = $idNumber;}
    
    public function getidNumber():string{
        return "My idNumber is " . $this->idNumber; 
    }
    public function setJshshr($JShSHR){
        $this->JShSHR = $JShSHR;
    }
    public function getJshshr(){
        return "My Jshshr is " . $this->JShSHR;
    }
   public function setBirthday($birthday)
   {
    $this->birthday = $birthday;
   }
   public function getBirthday(){
    return 'My birthday is' . $this->birthday;
   }
  

}

$obj = new myPassport();
$obj->setName('Diyorbek');
$obj->setlast_name('Abdurahmonov');
$obj->setidNumber(944740844);
$obj->setJshshr(4325623);
$obj->setBirthday(75642432);



echo $obj->getName() . '<br>' . $obj->getlast_name() . '<br>' . $obj->getidNumber() . '<br>' . $obj->getJshshr() . '<br>' . $obj->getbirthday();



?>



