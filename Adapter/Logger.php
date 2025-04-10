<?php

namespace Adapter;

class Logger implements LogInterface
{
    public function log(string $message): void{
        echo "<p style='color: green'> [Info] $message </p>";
    }
    public function error(string $message): void{
        echo "<p style='color: red'> [Error] $message </p>";
    }
    public function warn(string $message): void{
        echo "<p style='color: orange'> [Warn] $message </p>";
    }

}