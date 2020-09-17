<?php

interface Product{

    protected $serviceFee;
    function setServiceFee($serviceFee);
    function getServiceFee();
}

Class Line implements Product{
    //Function definitions
    public $serviceFee;

    //sets the service fee value
    function setServiceFee($serviceFee){
        $this->serviceFee = $serviceFee;
    }

    //returns service fee
    function getServiceFee(){
        return $this->serviceFee;
    }

}


Class Trunk implements Product{
    //Function definitions
    public $serviceFee;

    //sets the service fee value
    function setServiceFee($serviceFee){
        $this->serviceFee = $serviceFee;
    }

    //returns service fee
    function getServiceFee(){
        return $this->serviceFee;
    }

}


Class main(){

    function increaseProductFee(Product $object){

        //
        $passedObject = $object->getServiceFee();

        $object->setServiceFee($passedObject);

        return $object;

    }


}


?>