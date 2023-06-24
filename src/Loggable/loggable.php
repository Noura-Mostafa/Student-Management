<?php

namespace Loggable;

trait Loggable
{
    public function log($message)
    {
        $logFile = 'logfile.txt';
        $timestamp = date('Y-m-d H:i:s');
        file_put_contents($logFile, "[$timestamp] $message\n", FILE_APPEND);
    }
}
