<?php

class Speedometer{

    const km=0.62;
    const mile=1.60;

    public static function convertKmIntoMiles(float $km){
        $miles= self::km*$km;
        return $km. " Kilometers is converted to: ".$miles. " Miles";
    }
    public static function convertMilesIntoKm(float $miles){
        $km= self::mile*$miles;
        return $miles. " Miles is converted to: ".$km. " Kilometers";
    }
}