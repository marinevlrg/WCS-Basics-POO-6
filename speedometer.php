<?php

class Speedometer
{
    public const KMMILES_CONVERSION = 0.621371;

    public const MILESKM_CONVERSION = 1.60934;

    public static function KmToMiles(int $km): float
    {
        return $km * self::KMMILES_CONVERSION;
    }

    public static function MilesToKm(int $miles): float
    {
        return $miles * self::MILESKM_CONVERSION;
    }
}