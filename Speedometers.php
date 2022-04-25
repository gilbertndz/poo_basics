<?php

class Speedometers

{
    public const MILES_CONVERSION = 0.621371;
    public const KM_CONVERSION = 1.60934;

    public static function convertKmToMiles(int $km)
    {
        return $km * self::MILES_CONVERSION;
    }

    public static function convertMilesToKm(int $miles)
    {
        return $miles * self::KM_CONVERSION;
    }
}
