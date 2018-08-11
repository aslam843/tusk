<?php

class Student{
    public $name='Aslam';
    public $attendance=true;
    public $totalMarks='99';
}

$class9 = new Student();
$class9->name='Asaad';
echo $class9->name;
echo $class9->attendance;
echo $class9->totalMarks;

//========================================================================

class Bill{
    public $dinner=20;
    public $desserts=5;
    public $coldDrink=3;
    public $bill;
    
    public function dinner($person){
        $this->bill +=$this->dinner * $person;
        return $this->bill;
    }
    public function desserts($person){
        $this->bill +=$this->desserts * $person;
        return $this->bill;
    }
}

$bill=new Bill();
echo $bill->desserts(2);
echo $bill->dinner(2);
