<?php


namespace App\Util;


class Car
{
    private  $makeModel;
    private $fuel;
    private $vrt;


    public function getMakeModel()
    {
        return $this->makeModel;
    }


    public function setMakeModel($makeModel): void
    {
        $this->makeModel = $makeModel;
    }


    public function getFuel()
    {
        return $this->fuel;
    }


    public function setFuel($fuel): void
    {
        $this->fuel = $fuel;
    }

    public function __toString()
    {
        return $this->makeModel;
    }


    public function getVrt()
    {
        return $this->vrt;
    }


    public function setVrt($vrt): void
    {
        $this->vrt = $vrt;
    }



    public function isExempt($vrt)
    {
        if($vrt == true){
            return 'exempt';
        }else {
            return 'needs vrt';
        }
    }





}