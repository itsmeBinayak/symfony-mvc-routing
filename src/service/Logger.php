<?php
namespace App\service;
class Logger{

    public function logger(string $msg)
    {
        $msg .= "\n";
        // Write the contents to the file, 
        // using the FILE_APPEND flag to append the content to the end of the file
        // and the LOCK_EX flag to prevent anyone else writing to the file at the same time
        file_put_contents('log.info',$msg , FILE_APPEND);
    }
}

