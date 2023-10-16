<?php

namespace Dsilver\Arjoin; 

class joiner
{
    public static function select($string)
    {
        // Convert the string to lowercase
        $string = strtolower($string);

        // Replace spaces and special characters with hyphens
        $string = preg_replace('/[^a-z0-9]+/', '-', $string);

        // Remove leading and trailing hyphens
        $string = trim($string, '-');

        return $string;
    }
}
