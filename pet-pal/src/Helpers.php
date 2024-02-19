<?php

namespace PetPal;

class Helpers
{
    public static function calculateDistance($location1, $location2)
    {
        // Implementation for calculating distance between two locations
        // For example, you can use the Haversine formula to calculate the distance between two geographical coordinates
        $lat1 = $location1->getLatitude();
        $lon1 = $location1->getLongitude();
        $lat2 = $location2->getLatitude();
        $lon2 = $location2->getLongitude();

        $earthRadius = 6371; // Radius of the earth in kilometers
        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);

        $a = sin($dLat / 2) * sin($dLat / 2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon / 2) * sin($dLon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $distance = $earthRadius * $c;

        return $distance;
    }

    // Add more helper methods here as needed
}
