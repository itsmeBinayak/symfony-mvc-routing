<?php
namespace App\service;
use App\service\Transform;

class Dashes implements Transform{

    public function transform(string $string): string
    {
        return str_replace(' ','-',$string);
    }
}