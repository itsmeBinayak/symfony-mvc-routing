<?php
namespace App\service;
use App\service\Transform;
use App\service\Logger;
use Symfony\Bundle\MakerBundle\Str;

class Master{

    private Transform $transform;
    private Logger $logger;
    private string $msg;

    public function __construct(Transform $transform,Logger $logger)
    {
        $this->transform = $transform;
        $this->logger = $logger;
    }  

    public function transform(string $msg){
        return $this->transform->transform($msg);
    }

    public function logger(string $msg){
        return $this->logger->logger($msg);
    }
}