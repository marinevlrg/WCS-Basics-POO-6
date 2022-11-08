<?php
require_once 'speedometer.php';

echo '10 Km = ' . Speedometer::KmToMiles(10) . 'Miles <br>';
echo '10 Miles = ' . Speedometer::MilesToKm(10) . 'Km';