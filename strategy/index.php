<?php
interface TravelInterface{
    public function arrive();
}
class Plane implements TravelInterface{
    public function arrive(){
        return "travel with plane";
    }
}
class Train implements TravelInterface{
    public function arrive(){
        return "travel with train";
    }
}
class Bus implements TravelInterface{
    public function arrive(){
        return "travel with bus";
    }
}
class Bicycle implements TravelInterface{
    public function arrive(){
        return "travel with bicycle";
    }
}
class Travel{
    public TravelInterface $travel;
    public function setTravel(TravelInterface $travel):Travel
    {
        $this->travel = $travel;
        return $this;
    }

    public function traveled(){
        echo $this->travel->arrive()."<br>";
    }
}
$travel=new Travel();
($travel->setTravel(new Train()))->traveled();
($travel->setTravel(new Bus()))->traveled();
($travel->setTravel(new Bicycle()))->traveled();
($travel->setTravel(new Plane()))->traveled();
//$travel->setTravel(new plane());
//$travel->traveled();