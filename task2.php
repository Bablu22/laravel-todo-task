<?php

/*
 * Task 2: Develop a logging system using interfaces. Create classes that implement a logging interface and demonstrate their usage.
 */

interface Logger
{
    public function log($message);
}

class ConsoleLogger implements Logger
{
    public function log($message)
    {
        echo $message . PHP_EOL;
    }
}

$consoleLogger = new ConsoleLogger();
$consoleLogger->log("This is a log message from ConsoleLogger");
