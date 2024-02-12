<?php 

// Abstraction ichki logikani tashqariga chiqarmaslik 
class Tea {
    private function boilWater(){
        echo 'Boiling water...' . '<br>';
    }
    private function brew(){
        echo 'Brewing...' . '<br>';
    }
    private function addSugar(){
        echo 'Adding sugar...' . '<br>';
    }
    private function addMilk(){
        echo 'Adding milk...' . '<br>';
    }
    private function addTea(){
        echo 'Adding tea...' . '<br>';
    }
    public function make(){
        $this->boilWater();
        $this->brew();
        $this->addSugar();
        $this->addMilk();
        $this->addTea();
    }
}

$tea = new Tea();

$tea->make();



abstract class testclass{
   abstract function test1();
   abstract function hello();
}
class myclass extends testclass{
   function test1(){
      echo "Overrides parent test method";
   }
   function hello(){
    echo 'Hi guys';
   }
}
$a=new myclass();



?>