<?php

class Speedometer
{
    public const MILESKM_CONVERSION = 0.6213711922;

    public static function KmToMiles(int $km): float
    {
        return $km * self::MILESKM_CONVERSION;
    }

    public static function MilesToKm(int $miles): float
    {
        return $miles * self::MILESKM_CONVERSION;
    }
}