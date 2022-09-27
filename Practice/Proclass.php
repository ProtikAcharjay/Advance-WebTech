<?php
class mafia{
    public $don;
    public $wantedno;
    public $cases;

    function setdon($don){
        $this-> don = $don;
    }
    function setwantedno($wantedno){
        $this-> wantedno = $wantedno;
    }
    function setcases($cases){
        $this->cases = $cases;
    }

    function getdon(){
        return $this-> don;
    }
    function getwantedno(){
        return $this-> wantedno;
    }
    function getcases(){
        return $this-> cases;
    }
    function showdetails(){
        echo "____________________________________________";
        echo "<br>";
        echo "There is no details found for " . $this-> don." #Untraceable";
    }
}

$no1 = new mafia();
$no1-> setdon('Protik Acharjay'); 
$no1-> setwantedno('7777777'); 
$no1-> setcases('11'); 

echo "Mafia Name : " . $no1->getdon();
echo "<br>";
echo "Wanted No : " . $no1->getwantedno();
echo "<br>";
echo "No of Cases : " . $no1->getcases();
echo "<br>";
echo $no1-> showdetails();



?>