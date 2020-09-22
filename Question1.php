<?php

interface IProduct{
    function setServiceFee($serviceFee);
    function getServiceFee();
}

abstract class Product {
    protected $serviceFee;

     //sets the service fee value
    function setServiceFee(float $serviceFee){
        $this->serviceFee = $serviceFee;
    }

    //returns service fee
    function getServiceFee(){
        return $this->serviceFee;
    }
}

class Line extends Product implements IProduct{
    function __construct(float $serviceFee) {
        parent::__constructor($serviceFee);
    }   
}


class Trunk extends Product implements IProduct{
    function __construct(float $serviceFee) {
        parent::__constructor($serviceFee);
    }   
}

//function that creates trunk or line in runtime
function createTrunkOrLine($serviceFee, $type) {
    if ($type = 1) {
        return new Trunk($serviceFee);
    }

    return new Line($serviceFee);
}

function increaseProductFee(Product $object,float $increasePercentage){
    $serviceFeeAmount = $object->getServiceFee();
    $increasedFeeAmount = $serviceFeeAmount * $increasePercentage;
    $object->setServiceFee($increasedFeeAmount);
}

//example of creating a line
$line = createTrunkOrLine(100, 2);
echo $line->getServiceFee();

//example of creating a trunk
$trunk = createTrunkOrLine(150, 1);
echo $trunk->getServiceFee()

increaseProductFee($trunk);
echo $trunk->getServiceFee();

?>
