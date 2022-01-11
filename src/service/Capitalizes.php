<?php
namespace App\service;
use App\service\Transform;

class Capitalize implements Transform{

    public function transform(string $string): string
    {
        return $string;
    }
}