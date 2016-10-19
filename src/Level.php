<?php declare(strict_types = 1);

abstract class Level
{
    const FATAL = 0b00001;
    const ERROR = 0b00010;
    const WARN  = 0b00100;
    const INFO  = 0b01000;
    const DEBUG = 0b10000;

    private function __construct() {}
}
