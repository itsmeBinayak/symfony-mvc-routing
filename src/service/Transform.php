<?php
namespace App\service;

interface Transform
{
    public function transform(string $string):string;
}